<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Resources\OrderResource;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group Cart
 *
 * APIs for managing carts
 */
class CartController extends Controller
{
    /**
     *
     * Create One Cart
     *
     * This endpoint creates one cart
     * <aside class="success">pizza_id = selfmade & item_id = Menu Item</aside>
     *
     * @response scenario=success {
    "id": 1,
    "client_id": 2,
    "is_pay": false,
    "total_price": 180,
    "status": "pending",
    "address": null,
    "carts": [
    {
    "id": 1,
    "item_id":
    {
    "id": 1,
    "item_category_id": 1,
    "image": "",
    "available": 1,
    "name": "peperroni",
    "price": "25",
    "description": "so good",
    "created_at": null,
    "updated_at": null,
    "deleted_at": null
    },
    "is_menu": true,
    "count": 6,
    "amount": 150
    }]
    }
     * @response status=422 scenario="validation error"
     {
    "message": "The selected pizza id is invalid.",
    "errors": {
    "pizza_id": [
    "The selected pizza id is invalid."
    ]
    }
    }
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */


    public function store(CartRequest $request)
{
    $order = Order::query()->where('client_id', auth()->guard('api')->user()->id)->where('is_pay', false)->with('carts')->firstOrCreate([
        'client_id' => auth()->guard('api')->user()->id,
        'order_number' => mt_rand(100000000,999999999),

    ]);

    if ($request->pizza_id) {
        $item = Pizza::query()->findOrFail($request->pizza_id);
    } else {
        $item = Item::query()->findOrFail($request->item_id);
    }

    $cart = Cart::query()->updateOrCreate([
        'order_id' => $order->id,
        'itemable_id' => $item->id,
    ], [
        'order_id' => $order->id,
        'count' => DB::raw('count + 1'),
    ]);

    $cart->itemable()->associate($item);
    $cart->save();
    return response()->json(new OrderResource($order));
}


}
