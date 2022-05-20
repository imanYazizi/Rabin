<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemCategoryCollection;
use App\Http\Resources\ItemCategoryResource;
use App\Http\Resources\ItemCollection;
use App\Models\Item;
use App\Models\ItemCategory;
use Illuminate\Http\Request;

/**
 * @group Menu category
 *
 * APIs for Menu's category
 */
class ItemCategoryController extends Controller
{
    /**
     *
     * Show All Menu's Category
     *
     *@response scenario=success
     * [
    {
    "id": 1,
    "image": "http://127.0.0.1:8000/storage/image.png",
    "name": "pizza"
    },
    {
    "id": 2,
    "image": "http://127.0.0.1:8000/storage/jlhv",
    "name": "hamburger"
    }
    ]
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function index()
    {
        $items = ItemCategory::all();

        return response()->json(new ItemCategoryCollection($items));
    }

    /**
     * Show foods of a category in the menu
     *
     * This endpoint sends you foods of the specific category.
     * <aside class="success">Send me category id.</aside>
     *
     * @response scenario=success
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
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function show($id)
    {
        $items = [];
        $category = ItemCategory::query()->findOrFail($id);
        $items[] = [
            'category' => new ItemCategoryResource($category),
            'items' => new ItemCollection($category->items)
        ];

        return response()->json($items);

    }

}
