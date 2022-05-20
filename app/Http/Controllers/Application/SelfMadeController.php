<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Resources\SelfMadeCategoryCollection;
use App\Http\Resources\SelfMadeCollection;
use App\Http\Resources\SelfMadeResource;
use App\Models\Selfmade;
use App\Models\SelfmadeCategory;
use Illuminate\Http\Request;

/**
 * @group Self made
 *
 * APIs for Self made
 */
class SelfMadeController extends Controller
{

    /**
     * Show all self made's categoty
     *
     * This endpoint Shows all self made's categoty with image like cheese
     *
     *
     * @response scenario=success
     * [
    {
    "id": 1,
    "image": "http://127.0.0.1:8000/storage/files/1649266130-257876169.png",
    "name": "topping"
    },
    {
    "id": 2,
    "image": "http://127.0.0.1:8000/storage/files/1649266284-1299351634.png",
    "name": "topping"
    },
    {
    "id": 3,
    "image": "http://127.0.0.1:8000/storage/files/1649266590-1689863156.png",
    "name": "topping"
    }
    ]
     *
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function index()
    {
        $selfmades = SelfmadeCategory::all();
        return response()->json(new SelfMadeCategoryCollection($selfmades));
    }



    /**
     * Show self mades of a category
     *
     * This endpoint sends you self mades of the specific category.
     * <aside class="success">Send category's id.</aside>
     *
     *
     * @response scenario=success
     *
    [
    {
    "id": 1,
    "category": "topping",
    "image": "http://127.0.0.1:8000/storage/files/1649269045-111627720.png",
    "name": "oninon",
    "price": "17",
    "amount_1x": "2",
    "amount_2x": "13",
    "amount_3x": "3"
    },
    {
    "id": 2,
    "category": "topping",
    "image": "http://127.0.0.1:8000/storage/files/1649269072-916395255.png",
    "name": "oninon",
    "price": "17",
    "amount_1x": "2",
    "amount_2x": "13",
    "amount_3x": "3"
    }
    ]
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function show($id)
    {
        $selfmade = Selfmade::query()->where('selfmade_category_id' , $id)->get();
        return response()->json(new SelfMadeCollection($selfmade));

    }


}
