<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendPhoneRequest;
use App\Http\Requests\VerifyPhoneRequest;
use App\Models\Client;
use App\Models\Country;
use Illuminate\Http\Request;

/**
 * @group Verify
 *
 * APIs for Verification
 */
class VerifyController extends Controller
{
    /**
     *
     * Send phone's verify code
     *
     * send phone code
     * @unauthenticated
     *
     * @response scenario=success {"message": "verification code sent"}
     *
     */
    public function send_phone_code(SendPhoneRequest $request)
    {

        $phone = $request->phone;
        $client = Client::query()->where('phone', $request->phone)->firstOrCreate();
        if ($client->is_phone_verify)
            return response()->json(['message' => 'the phone number has already been verified'], 400);

        $country = Country::query()->findOrFail($client->country_id);
        $country_code = $country->code;

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

        return response()->json(['message' => 'verification code sent']);

    }

    /**
     *
     * Verify Phone
     *
     * Verify phone
     * @unauthenticated
     *
     * @response scenario=success
     * phone verified successfully
     *
     * @response status=400 scenario="Not Correct"  The code is not correct
     */
    public function phone_code(VerifyPhoneRequest $request)
    {
        $twilioConfig = config('services.twilio');

        $twilio = new \Twilio\Rest\Client($twilioConfig['twilio_account_sid'], $twilioConfig['twilio_auth_token']);

        $phone = $request->phone;
        $client = Client::query()->where('phone', $request->phone)->firstOrCreate();
        $country = Country::query()->findOrFail($client->country_id);
        $country_code = $country->code;

        if (substr($country_code, 0, 1) != "+") {
            $country_code = '+' . $country_code;
        }
//die(json_encode($request->code));
        $verification_check = $twilio->verify->v2->services($twilioConfig["twilio_service_sid"])
            ->verificationChecks
            ->create($request->code,
                ["to" => $country_code . $phone]
            );

        if ($verification_check->status === "approved") {
            $client->is_phone_verify = true;
            $client->save();
            return response()->json(["message" => 'phone verified successfully']);

        }

        return response()->json(["message" => "The code is not correct"], 400);

        /* $client = Client::query()->where('phone_code', $code)->first();

         if ($client)
         {
             $client->is_phone_verify = true;
             $client->phone_code = null;
             $client->save();
             return response()->json(["message" => 'phone verified successfully']);
         }

         return response()->json(["message" => "The code is not correct"], 400);*/

    }

    /**
     *
     * Verify email
     *
     * Verify email
     * @unauthenticated
     *
     * @response scenario=success email verified successfully
     *
     * @response status=400 scenario="Not Correct"  The code is not correct
     */
    public function email_code(Request $request, $code)
    {

        $client = Client::query()->where('email_code', $code)->first();

        if ($client) {
            $client->is_email_verify = true;
            $client->email_code = null;
            $client->save();
            return response()->json(["message" => 'email verified successfully']);
        }

        return response()->json(["message" => "The code is not correct"], 400);

    }
}
