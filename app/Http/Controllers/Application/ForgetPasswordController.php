<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\CurrentPasswordRequest;
use App\Http\Requests\ForgetPasswordRequest;
use App\Mail\ForgetPassword;
use App\Models\Client;
use App\Notifications\SendSMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
/**
 * @group Password
 *
 * APIs for  Password
 */
class ForgetPasswordController extends Controller
{
    /**
     *
     * Forget password
     *
     * send link for forget password
     *
     * @response scenario=success {"message" :'reset link sent successfully'}
     *
     * @response status=422 scenario="validation error"
     * {
    "message": "The selected email is invalid.",
    "errors": {
    "email": [
    "The selected email is invalid."
    ]
    }
    }
     */
    public function send_link(ForgetPasswordRequest $request)
    {
        if ($request->phone) {
            $client = Client::query()->where('phone', $request->phone)->firstOrCreate();

            $reset_link = $this->generateRandomString();
            $client->reset_link = $reset_link;
            $client->save();

            $message = 'click here to reset your password : ' . PHP_EOL . route('forget_code', $reset_link);

            $client->notify(new SendSMS($client->phone, $message, true));
            return response()->json(["message" =>'reset link sent successfully']);

        }
        if ($request->email) {
            $client = Client::query()->where('email', $request->email)->firstOrCreate();
            $reset_link = $this->generateRandomString();
            $client->reset_link = $reset_link;
            $client->save();

            Mail::to(["email" => $client->email])->send(new ForgetPassword($reset_link));

            return response()->json(["message" =>'reset link sent successfully']);

        }

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
