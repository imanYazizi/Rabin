<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddAddressToOrder;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

/**
 * @group Order
 *
 * APIs for Orders
 */
class OrderController extends Controller
{

    /**
     * Cart
     *
     * This endpoint shows active order
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "client_id": 1,
     * "is_pay": false,
     * "total_price": 0,
     * "status": null,
     * "address": {
     * "id": 1,
     * "client_id": 1,
     * "title": "l;kjh",
     * "address": ";klj",
     * "lat_lng": ""
     * },
     * "carts": []
     * }
     */
    public function active_order()
    {
        $order = Order::query()->where([
            'client_id' => auth()->guard('api')->user()->id,
            'is_pay' => false
        ])->first();
        if(!$order)
            return response()->json([]);

        return response()->json(new OrderResource($order));
    }

    /**
     * Order History
     *
     * This endpoint shows all orders
     *
     * @response scenario=success
     * [
     * {
     * "id": 1,
     * "client_id": 1,
     * "is_pay": false,
     * "total_price": 60,
     * "status": 'sent',
     * "address": {
     * "id": 1,
     * "client_id": 1,
     * "title": "home",
     * "address": "canada",
     * "lat_lng": ""
     * },
     * "carts": [
     * {
     * "id": 1,
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
     * },
     * "is_menu": true,
     * "count": 6,
     * "amount": 30
     * },
     * {
     * "id": 2,
     * "item_id": {
     * "id": 3,
     * "item_category_id": 2,
     * "image": "AS",
     * "available": 1,
     * "name": "QWE",
     * "price": "6",
     * "description": "QWE",
     * "created_at": null,
     * "updated_at": null,
     * "deleted_at": null
     * },
     * "is_menu": true,
     * "count": 5,
     * "amount": 30
     * }
     * ]
     * },
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function index()
    {
        $orders = Order::query()->where('client_id', auth()->guard('api')->user()->id)->get();

        return response(new OrderCollection($orders));
    }

    /**
     * Add address to cart
     *
     *
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "client_id": 1,
     * "is_pay": false,
     * "total_price": 0,
     * "status": null,
     * "address": {
     * "id": 1,
     * "client_id": 1,
     * "title": "l;kjh",
     * "address": ";klj",
     * "lat_lng": ""
     * },
     * "carts": []
     * }
     */
    public function store(AddAddressToOrder $request)
    {
        $order = Order::query()->where([
            'client_id' => auth()->guard('api')->user()->id,
            'is_pay' => false
        ])->first();

        $order->address_id = $request->address_id;
        $order->save();
        return response()->json(new OrderResource($order));

    }
}
