<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderEditRequest;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * @group panel Orders
 *
 */
class OrderController extends Controller
{
    /**
     *
     * Show All Orders
     *
     * If you want a certain number of it use "count" in url params
     * like this :
     * also for "search" and "status filter"
     *  <aside class="success">{url}/api/panel/orders?count=5&search=hello&status=pending</aside>
     *
     *  <aside class="warning">status should be one of these : ['pending' , 'sent' , 'rejected']</aside>
     *
     *
     * @response scenario=success
     *[
     *{
     *"id": 3,
     *"client_id": 1,
     *"is_pay": false,
     *"total_price": 0,
     *"status": null,
     *"address": {
     *"id": 1,
     *"client_id": 1,
     *"title": "home",
     *"address": "USA , NY",
     *"lat_lng": ""
     *},
     *"carts": []
     *},]
     *
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function index()
    {
        _can('read', true);

        $orders = Order::query()->orderByDesc('created_at');
        if (\request()->has('count'))
            $orders = Order::query()->take(request()->count);

        if (\request()->has('search')) {
            $search = \request()->input('search');

            $orders->whereHas('client', function (Builder $query) use ($search) {
                $query->where('clients.name', 'LIKE', "%$search%")
                    ->orWhere('clients.phone', 'LIKE', "%$search%")
                    ->orWhere('clients.email', 'LIKE', "%$search%");
            });
        }
        if (\request()->has('status'))
            $orders = Order::query()->where('status', \request()->input('status'));


        $orders = $orders->get();
        return response()->json(new OrderCollection($orders));
    }


    /**
     *
     * Show one order
     *
     * @response scenario=success
     *
     *{
     *"id": 3,
     *"client_id": 1,
     *"is_pay": false,
     *"total_price": 0,
     *"status": null,
     *"address": {
     *"id": 1,
     *"client_id": 1,
     *"title": "home",
     *"address": "USA , NY",
     *"lat_lng": ""
     *},
     *"carts": []
     *}
     *
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function show($id)
    {
        _can('read', true);

        $order = Order::query()->findOrFail($id);
        return response()->json(new OrderResource($order));
    }

    /**
     * Change order status
     *
     * @response scenario=success
     *{
     *"id": 3,
     *"client_id": 1,
     *"is_pay": false,
     *"total_price": 0,
     *"status": null,
     *"address": {
     *"id": 1,
     *"client_id": 1,
     *"title": "home",
     *"address": "USA , NY",
     *"lat_lng": ""
     *},
     *"carts": []
     *}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function update(OrderEditRequest $request, $id)
    {
        _can('update', true);

        $order = Order::query()->findOrFail($id);
        $order->status = $request->status;
        $order->save();
        return response()->json(new OrderResource($order));

    }


}
