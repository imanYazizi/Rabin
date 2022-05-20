<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientEditRequest;
use App\Http\Requests\ingredientRequest;
use App\Http\Requests\ItemIngredientCreate;
use App\Http\Resources\IngredientCategoryResource;
use App\Http\Resources\IngredientCollection;
use App\Http\Resources\IngredientResource;
use App\Models\Ingredient;
use App\Models\IngredientCategory;
use App\Models\IngredientToItem;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @group Panel Ingredient
 *
 */
class IngredientController extends Controller
{

    /**
     * Show all ingredients
     * @queryParam category_id to show ingredients of a category .
     * @queryParam count to show last N ingredients  .
     *
     *
     * @response scenario=success
     *[
     * {
     * "id": 1,
     * "image": "http://127.0.0.1:8000/storage/files/1650706364-1792862385.png",
     * "name": "cheese",
     * "amount": "200gr",
     * "price": "5.3",
     * "description": null
     * },
     * {
     * "id": 3,
     * "image": "http://127.0.0.1:8000/storage/files/1650706701-287947386.png",
     * "name": "cheese2",
     * "amount": "20gr",
     * "price": "5.3",
     * "description": null
     * }
     * ]
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     *
     */
    public function index()
    {
        _can('read', true);

        $main_array = [];

        if (\request()->has('count') && request()->count){
            $ingredient = Ingredient::query()->orderByDesc('created_at')->paginate(\request()->count);
            return response()->json(new IngredientCollection($ingredient));

        }
        if (\request()->has('category_id') && request()->category_id){
            $category = IngredientCategory::query()->findOrFail(request()->category_id);
            $main_array[] = [
                'category' => new IngredientCategoryResource($category),
                'items' => new IngredientCollection($category->ingredients)
            ];
        }

        else {
            $categories = IngredientCategory::all();
            foreach ($categories as $category) {
                $main_array[] = [
                    'category' => new IngredientCategoryResource($category),
                    'items' => new IngredientCollection($category->ingredients)
                ];
            }
        }

        return response()->json($main_array);

    }

    /**
     * Create one ingredient
     *
     * @response scenario=success
     *{
     * "id": 1,
     * "image": "http://127.0.0.1:8000/storage/files/1650706364-1792862385.png",
     * "name": "cheese",
     * "amount": "20gr",
     * "price": "5.3",
     * "description": null
     * }
     * @response status=422 scenario="validation error" {"message": "The selected item_category_id is invalid.","errors": {"item_category_id": ["The selected item_category_id is invalid."]}}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function store(ingredientRequest $request)
    {
        _can('create', true);

        $file = $request->image;
        $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
        Storage::put('files/' . $fileName, file_get_contents($file));

        $ingredient = Ingredient::query()->create([
            'image' => 'files/' . $fileName,
            'ingredient_category_id' => $request->ingredient_category_id,
            'name' => $request->name,
        ]);

        return response()->json(new IngredientResource($ingredient));
    }

    /**
     * Show one ingredient
     * @response scenario=success
     *{
     * "id": 1,
     * "image": "http://127.0.0.1:8000/storage/files/1650706364-1792862385.png",
     * "name": "cheese",
     * "amount": "20gr",
     * "price": "5.3",
     * "description": null
     * }
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     *
     */
    public function show($id)
    {
        _can('read', true);

        $ingredient = Ingredient::query()->findOrFail($id);
        return response()->json(new IngredientResource($ingredient));

    }

    /**
     *
     * Edit one ingredient
     * @response scenario=success
     *{
     * "id": 1,
     * "image": "http://127.0.0.1:8000/storage/files/1650706364-1792862385.png",
     * "name": "cheese",
     * "amount": "20gr",
     * "price": "5.3",
     * "description": null
     * }
     *
     * @response status=422 scenario="validation error" {"message": "The selected phone is invalid.","errors": {"phone": ["The selected phone is invalid."]}}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     */
    public function update(IngredientEditRequest $request, $id)
    {
        _can('update', true);

        $ingredient = Ingredient::query()->findOrFail($id);
        if ($request->image) {
            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));
            $ingredient->image = 'files/' . $fileName;
        }

        if ($request->name)
            $ingredient->name = $request->name;

        if ($request->ingredient_category_id)
            $ingredient->ingredient_category_id = $request->ingredient_category_id;


        $ingredient->save();

        return response()->json(new IngredientResource($ingredient));
    }


    /**
     *
     * Delete one ingredient
     *
     * @response scenario=success {"message" : "ingredient deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        _can('delete', true);

        $ingredient = Ingredient::query()->findOrFail($id);
        $ingredient->delete();
        return response()->json(["message" => 'ingredient deleted successfully']);

    }

    /**
     *
     * add one ingredient to men item
     *
     * @response scenario=success {"message" : "ingredient deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function add_to_item(ItemIngredientCreate $request)
    {
        _can('create', true);

        IngredientToItem::query()->create([
            'item_id' => $request->item_id,
            'ingredient_id' => $request->ingredient_id,
            'amount' => $request->amount,
        ]);

        return response()->json(["message" => 'ingredient added successfully']);

    }
}
