<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Http\Requests\AddressStoreRequest;
use App\Http\Resources\AddressCollection;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;

/**
 * @group Addresses
 *
 * APIs for user's addresses
 *
 *
 */
class AddressController extends Controller
{
    /**
     * Show All Addresses
     *
     * This endpoint shows all addresses of specific user
     *
     * @response scenario=success [{"id": 3,"client_id": 2,"title": "Home","address": "USA , LA","lat_lng": ""},{"id": 4,"client_id": 2,"title": "Office ","address": "Germany , Hamburg","lat_lng": ""}]
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function index()
    {
        $addresses = Address::query()->where('client_id', auth()->guard('api')->user()->id)->get();
        return response()->json(new AddressCollection($addresses));
    }


    /**
     * Create Address
     *
     * This endpoint creates address of specific user
     *
     * @response scenario=success {"id": 3,"client_id": 2,"title": "Home","address": "USA , LA","lat_lng": ""}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function store(AddressStoreRequest $request)
    {
        $address = Address::query()->create([
            'client_id' => auth()->guard('api')->user()->id,
            'title' => $request->title,
            'address' => $request->address,
            'lat_lng' => $request->lat_lng
        ]);

        return response()->json(new AddressResource($address));
    }

    /**
     * Show One Address
     *
     * This endpoint shows one address
     * <aside class="success">Send address's id</aside>
     *
     * @response scenario=success {"id": 3,"client_id": 2,"title": "Home","address": "USA , LA","lat_lng": ""}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function show($id)
    {
        $address = Address::query()->findOrFail($id);
        return response()->json(new AddressResource($address));

    }


    /**
     * Edit One Address
     *
     * This endpoint edits one address
     * <aside class="success">please send all items </aside>
     *
     *
     * @response scenario=success {"id": 3,"client_id": 2,"title": "Home","address": "USA , LA","lat_lng": ""}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */

    public function update(AddressRequest $request, $id)
    {
        $address = Address::query()->findOrFail($id);
        if ($request->title)
            $address->title = $request->title;

        if ($request->address)
            $address->address = $request->address;

        if ($request->lat_lng)
            $address->lat_lng = $request->lat_lng;

        $address->save();
        return response()->json(new AddressResource($address));
    }


    /**
     * Delete One Address
     *
     * This endpoint edits one address
     * <aside class="success">Send me the address's id</aside>
     *
     * @response scenario=success {"message": "address deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function destroy($id)
    {
        $address = Address::query()->findOrFail($id);
        $address->delete();
        return response()->json(['message' => 'address deleted successfully']);
    }
}
