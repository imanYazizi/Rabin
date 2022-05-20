<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminCollection;
use App\Http\Resources\ClientCollection;
use App\Models\Admin;
use App\Models\Client;

/**
 * @group Panel All Users
 *
 */
class UsersController extends Controller
{
    /**
     *
     * Show Users And Admins
     *
     * 
     * @response scenario=success
     * [
    {
    "id": 3,
    "name": null,
    "avatar": null,
    "username": null,
    "country_id": 1,
    "phone": "09358548353",
    "email": "nicolas.eric@example.org",
    "reset_link": null,
    "phone_code": null,
    "email_code": "bdK8ZIhe3j",
    "is_phone_verify": 1,
    "is_email_verify": 0,
    "is_admin": false
    },
    {
    "id": 22,
    "image": "",
    "name": "ziz",
    "country_id": 1,
    "phone": "9358548353",
    "role": "edit",
    "is_admin": true
    },
    {
    "id": 2,
    "name": "zeinab",
    "avatar": "files/1649859720-859727325.png",
    "username": "zizi",
    "country_id": 1,
    "phone": "2",
    "email": "hand.annamarie@example.org",
    "reset_link": "CzUsyVDrqN",
    "phone_code": "huJXcMd7rf",
    "email_code": "EtmzkoYH2R",
    "is_phone_verify": 0,
    "is_email_verify": 0,
    "is_admin": false
    }
    ]
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function index()
    {
        _can('read', true);
//        $clients = Client::all()->makeHidden(['created_at' , 'updated_at' , 'deleted_at']);
        $clients = (new ClientCollection(Client::all()));
        $admins = (new AdminCollection(Admin::all()));

        $admins = $admins->merge($clients);
        return response()->json($admins);

    }
}
