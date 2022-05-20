<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemEditRequest;
use App\Http\Requests\ItemImageRequest;
use App\Http\Requests\ItemRequest;
use App\Http\Resources\ItemCategoryResource;
use App\Http\Resources\ItemCollection;
use App\Http\Resources\ItemPaginateCollection;
use App\Http\Resources\ItemResource;
use App\Models\IngredientToItem;
use App\Models\Item;
use App\Models\ItemCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @group Panel Menu
 *
 */
class MenuController extends Controller
{
    /**
     *
     * Show All Menu
     *
     * to get items of a category use :
     *  <aside class="success">{url}/api/panel/menus?category_id=5</aside>
     *
     * @queryParam category_id to show items of a category .
     * @queryParam count to show last n items  .
     *
     * @response scenario=success
     * {
     * "pizza": [
     * {
     * "id": 2,
     * "item_category_id": 1,
     * "image": "",
     * "available": 1,
     * "name": "peperoni",
     * "price": "5",
     * "description": "good",
     * "created_at": null,
     * "updated_at": null,
     * "deleted_at": null,
     * "category": {
     * "id": 1,
     * "image": "",
     * "name": "pizza",
     * "created_at": null,
     * "updated_at": null,
     * "deleted_at": null
     * }
     * }
     * ],
     * "hamburger": [
     * {
     * "id": 3,
     * "item_category_id": 2,
     * "image": "",
     * "available": 1,
     * "name": "peperoni",
     * "price": "6",
     * "description": "bad",
     * "created_at": null,
     * "updated_at": null,
     * "deleted_at": null,
     * "category": {
     * "id": 2,
     * "image": "",
     * "name": "hamburger",
     * "created_at": null,
     * "updated_at": null,
     * "deleted_at": null
     * }
     * },
     * ]
     * }
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function index()
    {
        _can('read', true);

        if (\request()->has('count') && request()->count) {
            $items = Item::query()->orderByDesc('created_at')->paginate(\request()->count);
            return response()->json(new ItemPaginateCollection($items));

        }
        if (\request()->has('category_id') && request()->category_id) {
            $items = [];
            $category = ItemCategory::query()->findOrFail(request()->category_id);
            $items[] = [
                'category' => new ItemCategoryResource($category),
                'items' => new ItemCollection($category->items)
            ];

        } else {
            $items = [];
            $categories = ItemCategory::all();
            foreach ($categories as $category) {
                $items[] = [
                    'category' => new ItemCategoryResource($category),
                    'items' => new ItemCollection($category->items)
                ];
            }

        }

        return response()->json($items);
    }


    /**
     *
     * Create one menu
     *
     *
     * this will create an item in menu
     *
     * @response scenario=success
     * {
     * "id": 3,
     * "item_category_id": 2,
     * "image": "",
     * "available": 1,
     * "name": "peperoni",
     * "price": "6",
     * "description": "hot",
     * "category": {
     * "id": 2,
     * "image": "",
     * "name": "hamburger",
     * }
     *
     * @response status=422 scenario="validation error" {"message": "The selected item_category_id is invalid.","errors": {"item_category_id": ["The selected item_category_id is invalid."]}}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function store(ItemRequest $request)
    {
        _can('create', true);

        $file = $request->image;
        $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
        Storage::put('files/' . $fileName, file_get_contents($file));

        $item = Item::query()->create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'item_category_id' => $request->item_category_id,
            'available' => $request->available,
            'is_special' => $request->is_special,
            'image' => 'files/' . $fileName,
        ]);


        foreach ($request->ingredients as $ingredient) {

            IngredientToItem::query()->create([
                'item_id' => $item->id,
                'ingredient_id' => $ingredient['id'],
                'amount' => $ingredient['amount'],
            ]);

        }

        return response()->json(new ItemResource($item));

    }

    /**
     *
     * Show one menu item
     *
     * @response scenario=success
     * {
     * "id": 3,
     * "item_category_id": 2,
     * "image": "",
     * "available": 1,
     * "name": "peperoni",
     * "price": "6",
     * "description": "hot",
     * "category": {
     * "id": 2,
     * "image": "",
     * "name": "hamburger",
     * }
     *
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function show($id)
    {
        _can('read', true);

        $item = Item::query()->findOrFail($id);
        return response()->json(new ItemResource($item));

    }

    /**
     *
     * Edit menu item
     *
     *
     * @response scenario=success
     * {
     * "id": 3,
     * "item_category_id": 2,
     * "image": "",
     * "available": 1,
     * "name": "peperoni",
     * "price": "6",
     * "description": "hot",
     * "category": {
     * "id": 2,
     * "image": "",
     * "name": "hamburger",
     * }
     *
     * @response status=422 scenario="validation error" {"message": "The selected phone is invalid.","errors": {"phone": ["The selected phone is invalid."]}}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function update(ItemEditRequest $request, $id)
    {
        _can('update', true);

        $item = Item::query()->findOrFail($id);
        if ($request->name)
            $item->name = $request->name;

        if ($request->price)
            $item->price = $request->price;

        if ($request->description)
            $item->description = $request->description;

        if ($request->item_category_id)
            $item->item_category_id = $request->item_category_id;

        if ($request->available)
            $item->available = $request->available;

        if ($request->is_special)
            $item->is_special = $request->is_special;

        if ($request->image) {
            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));
            $item->image = 'files/' . $fileName;
        }
        $item->save();

        return response()->json(new ItemResource($item));
    }


    /**
     *
     * Delete one menu item
     *
     * @response scenario=success {"message" : "item deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        _can('delete', true);

        $item = Item::query()->findOrFail($id);
        $item->delete();
        return response()->json(["message" => 'item deleted successfully']);
    }
}
