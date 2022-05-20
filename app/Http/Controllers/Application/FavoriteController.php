<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\FavoriteRequest;
use App\Http\Resources\FavoriteCollection;
use App\Http\Resources\FavoriteResource;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Item;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group Favorite
 *
 * APIs for Favorite
 */
class FavoriteController extends Controller
{

    /**
     * Show All Favorites
     *
     * This endpoint shows all of the items that is favorite
     *
     *
     * @response scenario=success
     * [
     * {
     * "id": 1,
     * "is_menu": true,
     * "item_id": {
     * "id": 2,
     * "item_category_id": 1,
     * "image": "mknjbh",
     * "available": 1,
     * "name": "peperoni",
     * "price": "5",
     * "description": ";.'lkjihugjhg",
     * "created_at": null,
     * "updated_at": null,
     * "deleted_at": null
     * }
     * },
     * {
     * "id": 2,
     * "is_menu": true,
     * "item_id": {
     * "id": 2,
     * "item_category_id": 1,
     * "image": "mknjbh",
     * "available": 1,
     * "name": "peperoni",
     * "price": "5",
     * "description": ";.'lkjihugjhg",
     * "created_at": null,
     * "updated_at": null,
     * "deleted_at": null
     * }
     * }
     * ]
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function index()
    {
        $favorites = Favorite::query()->where('client_id', auth()->guard('api')->user()->id)->get();

        return response(new FavoriteCollection($favorites));
    }


    /**
     * Favorite An Item
     *
     * This endpoint favorites an item (Menu item or selfmade pizza)
     *  <aside class="success">for selfmade send pizza_id
     * an if it's menu item send item_id</aside>
     *
     * @response scenario=success {
     * "id": 2,
     * "is_menu": true,
     * "item_id": {
     * "id": 2,
     * "item_category_id": 1,
     * "image": "mknjbh",
     * "available": 1,
     * "name": "peperoni",
     * "price": "5",
     * "description": ";.'lkjihugjhg",
     * "created_at": null,
     * "updated_at": null,
     * "deleted_at": null
     * }
     * }
     *
     * @response status=422 scenario="validation error"
     * {
     * "message": "The pizza id field is required when none of item id are present. (and 1 more error)",
     * "errors": {
     * "pizza_id": [
     * "The pizza id field is required when none of item id are present."
     * ],
     * "item_id": [
     * "The item id field is required when none of pizza id are present."
     * ]
     * }
     * }
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function store(FavoriteRequest $request)
    {
//        App\Models\Item
        if ($request->pizza_id) {
            $item = Pizza::query()->findOrFail($request->pizza_id);

            $favorite = Favorite::query()->updateOrCreate([
                'client_id' => auth()->guard('api')->user()->id,
                'itemable_type' => 'App\Models\Pizza',
                'itemable_id' => $item->id,
            ]);

        } else {
            $item = Item::query()->findOrFail($request->item_id);
            $favorite = Favorite::query()->updateOrCreate([
                'client_id' => auth()->guard('api')->user()->id,
                'itemable_type' => 'App\Models\Item',
                'itemable_id' => $item->id,
            ]);
        }

        return response()->json(new FavoriteResource($favorite));
    }


    /**
     * Unfavorite An Item
     *
     * This endpoint unfavorites an item (send favorite's id)
     *
     * @response scenario=success {"message" : "item unfavorited successfully"}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function destroy($id)
    {
        $favorite = Favorite::query()->findOrFail($id);
        $favorite->delete();
        return response()->json(["message" => 'item unfavorited successfully']);

    }
}
