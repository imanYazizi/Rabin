<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminRegisterRequest;
use App\Http\Requests\EditAdminRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\AdminCollection;
use App\Http\Resources\AdminPaginateCollection;
use App\Http\Resources\AdminResource;
use App\Models\Admin;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

/**
 * @group panel Admin
 *
 */
class AdminController extends Controller
{

    /**
     *
     * Show All Admins
     * @queryParam count
     *
     * @response scenario=success
     * [
     * {
     * "id": 1,
     * "image": "",
     * "name": "zzz",
     * "phone": "8129612721",
     * "role": "edit",
     * "country_id": 1
     * },
     * {
     * "id": 2,
     * "image": "",
     * "name": "zzz",
     * "phone": "0933333333",
     * "role": "edit",
     * "country_id": 1
     * }
     * ]
     *
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function index()
    {
        _can('read', true);
        if (\request()->has('count') && request()->count)
            $admins = Admin::query()->orderByDesc('created_at')->paginate(request()->count);
        else
            $admins = Admin::query()->orderByDesc('created_at')->paginate(12);
        return response()->json(new AdminPaginateCollection($admins));

    }

    /**
     *
     * create one admin
     *
     * @response scenario=success
     *
     * {
     * "id": 1,
     * "image": "",
     * "name": "zzz",
     * "phone": "8129612721",
     * "role": "edit",
     * "country_id": 1
     * }
     * @response status=422 scenario="validation error" {"message": "The selected phone is invalid.","errors": {"phone": ["The selected phone is invalid."]}}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function store(AdminRegisterRequest $request)
    {
        _can('create', true);

        $admin = Admin::query()->create([
            'phone' => $request->phone,
            'name' => $request->name,
            'role' => $request->role,
            'country_id' => $request->country_id,
            'password' => Hash::make($request->password),

        ]);

        if ($request->image) {
            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));

            $admin->image = 'files/' . $fileName;
            $admin->save();

        }

        return response(new AdminResource($admin));
    }


    /**
     *
     * Login Admin
     *
     * Login with phone and password
     * @unauthenticated
     *
     * @response scenario=success
     * token = "TOKEN_EXAMPLE"
     *
     * @response status=422 scenario="validation error" {"message": "The selected phone is invalid.","errors": {"phone": ["The selected phone is invalid."]}}
     *
     */
    public function login(AdminLoginRequest $request)
    {

        $admin = Admin::query()->where('phone', $request->phone)->first();
        if (password_verify($request->password, $admin->password)) {

            $token = $admin->createToken('pizza_panel')->accessToken;
            return response()->json(['token' => $token]);


        } else
            return response()->json(['message' => 'wrong password'], 400);
    }

    /**
     *
     * Show one admin
     *
     *
     * @response scenario=success
     *
     * {
     * "id": 1,
     * "image": "",
     * "name": "zzz",
     * "phone": "8129612721",
     * "role": "edit",
     * "country_id": 1
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

        $admin = Admin::query()->findOrFail($id);
        return response(new AdminResource($admin));

    }

    /**
     * Edit Admin
     *
     * This endpoint Edits one admin
     *
     * @response scenario=success
     *
     * {
     * "id": 1,
     * "image": "",
     * "name": "zzz",
     * "phone": "8129612721",
     * "role": "edit",
     * "country_id": 1
     * }
     * @response status=422 scenario="validation error" {"message": "The selected phone is invalid.","errors": {"phone": ["The selected phone is invalid."]}}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function update(EditAdminRequest $request, $id)
    {
        _can('update', true);

        $admin = Admin::query()->findOrFail($id);

        if ($request->name)
            $admin->name = $request->name;

        if ($request->phone)
            $admin->phone = $request->phone;

        if ($request->country_id)
            $admin->country_id = $request->country_id;

        if ($request->role)
            $admin->role = $request->role;

        if ($request->image) {

            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));

            $admin->image = 'files/' . $fileName;
        }

        $admin->save();

        return response(new AdminResource($admin));
    }


    /**
     * Delete Admin
     *
     * This endpoint Deletes one admin
     * <aside class="success">Send admin's id</aside>
     * @unauthenticated
     *
     *
     * @response scenario=success {"message" : "admin deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        _can('delete', true);

        $admin = Admin::query()->findOrFail($id);
        $admin->delete();
        return response()->json(["message" => 'admin deleted successfully']);
    }
}
