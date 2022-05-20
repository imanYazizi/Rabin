<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\CurrentPasswordRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
/**
 * @group Password
 *
 * APIs for  Password
 */
class ChangePasswordController extends Controller
{
    /**
     *
     * Current password
     *
     * Check if current password is correct
     * <aside class="success">if password is correct this will send you a link that you should use in change_password</aside>
     *
     * @response scenario=success{"reset_link": "WbEITkE4xx"}
     *
     * @response status=400 scenario="wrong password" {"message": "wrong password"}
     */
    public function current(CurrentPasswordRequest $request)
    {
        $client = Client::query()->findOrFail(auth()->guard('api')->user()->id);

        if(password_verify($request->current_password, $client->password)){
            $client->reset_link = $this->generateRandomString();
            $client->save();
            return response()->json(['reset_link' => $client->reset_link]);
        } else
            return response()->json(['message' => 'wrong password'], 400);
    }

    /**
     *
     * Change Password
     *
     * send reset link with new password and confirm password
     *
     * @response scenario=success { "message" : "password changed successfully" }

     * @response status=404 scenario="user not found (wrong reset link)" user not found (wrong reset link)

     * @response status=422 scenario="validation error"
     * {
    "message": "The new password must be at least 8. (and 1 more error)",
    "errors": {
    "new_password": [
    "The new password must be at least 8."
    ],
    "confirm_password": [
    "The confirm password and password must match."
    ]
    }
    }
     */
    public function change_password(PasswordRequest $request, $reset_link)
    {
        $client = Client::query()->where('reset_link', $request->reset_link)->first();

        if ($client) {
            $client->password = Hash::make($request->password);
            $client->reset_link = null;
            $client->save();
        } else {
            return response('user not found (wrong reset link)', 404);
        }

        return response()->json(['message' => 'password changed successfully']);

    }

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
