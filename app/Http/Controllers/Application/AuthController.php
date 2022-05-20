<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditClientRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\ClientResource;
use App\Mail\ForgetPassword;
use App\Mail\VerifyEmail;
use App\Models\Client;
use App\Models\Country;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Notifications\SendSMS;


/**
 * @group Users
 *
 * APIs for managing users
 */
class AuthController extends Controller
{
    /**
     *
     * Login
     *
     * Login with email or phone
     * @unauthenticated
     *
     * @response scenario=success
     * token = "TOKEN_EXAMPLE"
     *
     * @response status=403 scenario="Not Verify"   {"message": "your account is not verify , the code has been sent to your phone and your email"}
     * @response status=422 scenario="validation error" {"message": "The selected phone is invalid.","errors": {"phone": ["The selected phone is invalid."]}}
     * @response status=400 scenario="wrong password" {"message": "wrong password"}
     *
     */
    public function login(LoginRequest $request)
    {

        if ($request->phone) {

            $client = Client::query()->where('phone', $request->phone)->firstOrFail();

        } else
            $client = Client::query()->where('email', $request->email)->firstOrFail();

        if (!$client->is_phone_verify && !$client->is_email_verify) {

            if ($client->email) {
                $client->email_code = $this->generateRandomString();
                $client->save();
                Mail::to(["email" => $client->email])->send(new VerifyEmail($client->email_code));

            }

            if ($client->phone) {
                $country = Country::query()->findOrFail($request->country_id);
                $country_code = $country->code;
                $phone = $request->phone;

                $twilioConfig = config('services.twilio');

                $twilio = new \Twilio\Rest\Client(
                    $twilioConfig['twilio_account_sid'], $twilioConfig['twilio_auth_token']);

                if (substr($country_code, 0, 1) != "+") {
                    $country_code = '+' . $country_code;
                }

                $verification = $twilio->verify->v2->services($twilioConfig["twilio_service_sid"])
                    ->verifications
                    ->create($country_code . $phone, "sms");


                $client->phone_code = $verification->sid;
                $client->save();
            }


            return response()->json(['message' => 'your account is not verify , the code has been sent to your phone and your email']);
        }

        if (password_verify($request->password, $client->password)) {

            $token = $client->createToken('pizza_app')->accessToken;
            return response()->json(['token' => $token]);

        } else
            return response()->json(['message' => 'wrong password'], 400);

    }

    /**
     *
     * Register
     *
     * This endpoint creates one user
     * @unauthenticated
     *
     * @response scenario=success
     * token = "TOKEN_EXAMPLE"
     *
     * @response status=422 scenario="validation error" {"message": "The selected country id is invalid. (and 2 more errors)","errors": {"country_id": ["The selected country id is invalid."],"password": ["The password must be at least 8."],"re_try_Password": ["The re try  password and password must match."]}}
     */
    public function store(RegisterRequest $request)
    {

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

        if ($request->email) {

            $client->email_code = $this->generateRandomString();
            $client->save();
            Mail::to(["email" => $client->email])->send(new VerifyEmail($client->email_code));

        }

        if ($request->phone) {
            $country = Country::query()->findOrFail($request->country_id);
            $country_code = $country->code;
            $phone = $request->phone;

            $twilioConfig = config('services.twilio');

            $twilio = new \Twilio\Rest\Client(
                $twilioConfig['twilio_account_sid'], $twilioConfig['twilio_auth_token']);

            if (substr($country_code, 0, 1) != "+") {
                $country_code = '+' . $country_code;
            }

            $verification = $twilio->verify->v2->services($twilioConfig["twilio_service_sid"])
                ->verifications
                ->create($country_code . $phone, "sms");


            $client->phone_code = $verification->sid;
            $client->save();
        }


        return response()->json(['message' => 'verification code sent']);
    }

    /**
     *
     * Edit User
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
     *
     * @response status=422 scenario="validation error" {"message": "The selected country id is invalid. (and 2 more errors)","errors": {"country_id": ["The selected country id is invalid."],"password": ["The password must be at least 8."],"re_try_Password": ["The re try  password and password must match."]}}
     */
    public function update(EditClientRequest $request)
    {
        $client = auth()->guard('api')->user();

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
     * Delete One User
     *
     * This endpoint Deletes one user
     * <aside class="success">Send me the user's id</aside>
     * @unauthenticated
     *
     * @response scenario=success {"message" :"user deleted successfully"}
     *
     * @response status=404 scenario="user not found" {"message": "Not Found!"}
     *
     */
    public function destroy($id)
    {
        $client = Client::query()->findOrFail($id);
        $client->delete();
        return response()->json(['message' => 'user deleted successfully']);


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
