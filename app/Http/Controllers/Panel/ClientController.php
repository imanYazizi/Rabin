<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditClientRequest;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\ClientCollection;
use App\Http\Resources\ClientPaginateCollection;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

/**
 * @group Panel Users
 *
 */
class ClientController extends Controller
{

    /**
     *
     * Show All Users
     *
     * @queryParam count
     *
     * @response scenario=success
     * [{
     * "id": 2,
     * "image": "",
     * "name": "zeinab",
     * "phone": "9129612721",
     * "email": "zeinab@gmail.com",
     * "orders": []
     * },
     * {
     * "id": 3,
     * "image": "",
     * "name": "zeinab",
     * "phone": "9129612722",
     * "email": "yari@gmail.com",
     * "orders": []
     * }]
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function index()
    {
        _can('read', true);
        if (\request()->has('count') && request()->count)
            $clients = Client::query()->orderByDesc('created_at')->paginate(request()->count);

        else
            $clients = Client::query()->orderByDesc('created_at')->paginate(12);
        return response()->json(new ClientPaginateCollection($clients));

    }

    /**
     *
     * Create User
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "image": "",
     * "name": "zeinab",
     * "phone": "9129612721",
     * "email": "zeinab@gmail.com",
     * "orders": []
     * }
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=422 scenario="validation error" {"message": "The selected country id is invalid. (and 2 more errors)","errors": {"country_id": ["The selected country id is invalid."],"password": ["The password must be at least 8."],"re_try_Password": ["The re try  password and password must match."]}}
     */
    public function store(RegisterRequest $request)
    {
        _can('create', true);

        $client = Client::query()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'country_id' => $request->country_id,
            'password' => Hash::make($request->password),
        ]);


        if ($request->image) {

            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));

            $client->avatar = 'files/' . $fileName;
            $client->save();
        }

        return response()->json(new ClientResource($client));
    }

    /**
     *
     * Show one user
     * @response scenario=success
     * {
     * "id": 2,
     * "image": "",
     * "name": "zeinab",
     * "phone": "9129612721",
     * "email": "zeinab@gmail.com",
     * "orders": []
     * }
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function show($id)
    {
        _can('read', true);

        $client = Client::query()->findOrFail($id);
        return response()->json(new ClientResource($client));

    }

    /**
     *
     * Edit User
     *
     *
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "image": "",
     * "name": "zeinab",
     * "phone": "9129612721",
     * "email": "zeinab@gmail.com",
     * "orders": []
     * }
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=422 scenario="validation error" {"message": "The selected country id is invalid. (and 2 more errors)","errors": {"country_id": ["The selected country id is invalid."],"password": ["The password must be at least 8."],"re_try_Password": ["The re try  password and password must match."]}}
     */
    public function update(EditClientRequest $request, $id)
    {
        _can('edit', true);

        $client = Client::query()->findOrFail($id);

        if ($request->name)
            $client->name = $request->name;

        if ($request->phone)
            $client->phone = $request->phone;

        if ($request->email)
            $client->email = $request->email;

        if ($request->country_id)
            $client->country_id = $request->country_id;


        if ($request->image) {

            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));

            $client->avatar = 'files/' . $fileName;
        }

        $client->save();

        return response()->json(new ClientResource($client));
    }

    /**
     *
     * Delete one user
     *
     * @response scenario=success {"message" : "user deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        _can('delete', true);

        $client = Client::query()->findOrFail($id);
        $client->delete();
        return response()->json(["message" => 'user deleted successfully']);

    }
}
