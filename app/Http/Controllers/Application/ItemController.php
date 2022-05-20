<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemCollection;
use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;

/**
 * @group Menu
 *
 * APIs for Menu
 */
class ItemController extends Controller
{
    /**
     * Show all foods in the menu
     *
     * This endpoint Sends you all foods.
     *
     *
     * @response scenario=success
     *
     * [
     * {
     * "id": 2,
     * "category": "pizza",
     * "image": "http://127.0.0.1:8000/storage/mknjbh",
     * "available": true,
     * "name": "peperoni",
     * "price": "5",
     * "description": "very delicious"
     * },
     * {
     * "id": 3,
     * "category": "hamburger",
     * "image": "http://127.0.0.1:8000/storage/AS",
     * "available": true,
     * "name": "cheeseburger",
     * "price": "6",
     * "description": "delicious"
     * },
     * ]
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function index()
    {

        $items = Item::all();

        return response()->json(new ItemCollection($items));
    }


    /**
     * Show one menu item
     *
     *
     * @response scenario=success
     * [
     * {
     * "id": 2,
     * "category": "pizza",
     * "image": "http://127.0.0.1:8000/storage/mknjbh",
     * "available": true,
     * "name": "peperoni",
     * "price": "5",
     * "description": "very delicious"
     * }
     * ]
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function show($id)
    {
        $items = Item::query()->findOrFail($id);
        return response()->json(new ItemResource($items));
    }



    /**
     * Show all special items
     *
     * This endpoint sends you foods of the specific category.
     * <aside class="success">Send me category id.</aside>
     *
     * @response scenario=success
     * [
     * {
     * "id": 2,
     * "category": "pizza",
     * "image": "http://127.0.0.1:8000/storage/mknjbh",
     * "available": true,
     * "is_special": true,
     * "name": "peperoni",
     * "price": "5",
     * "description": "very delicious"
     * }
     * ]
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function special()
    {
        $items = Item::query()->where('is_special' , true)->get();
        return response()->json(new ItemCollection($items));
    }
}
