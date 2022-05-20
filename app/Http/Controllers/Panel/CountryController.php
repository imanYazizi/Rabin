<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;
use function response;

/**
 * @group Panel Country
 *
 * APIs for managing Countries
 */
class CountryController extends Controller
{

    /**
     *
     * Show All Countries
     *
     * This endpoint shows all countries
     * @unauthenticated
     *
     *
     * @response scenario=success [
    {
    "id": 1,
    "image": "http://127.0.0.1:8000/storage/gvjgvgv",
    "code": "1",
    "name": "canada"
    },
    {
    "id": 2,
    "image": "http://127.0.0.1:8000/storage/iji",
    "code": "1",
    "name": "USA"
    }
    ]
     *
     *
     *
     */
    public function index()
    {
        $countries = Country::all();
        return response()->json(new CountryCollection($countries));
    }


    /**
     *
     * Create One Country
     *
     * This endpoint creates one Country
     *
     *
     *
     * @response scenario=success {
    "id": 3,
    "image": "http://127.0.0.1:8000/storage/files/1649160294-516619164.png",
    "code": "49",
    "name": "germany"
    }
     *
     * @response status=422 scenario="validation error" {
    "message": "The image field is required.",
    "errors": {
    "image": [
    "The image field is required."
    ]
    }
    }
     */
    public function store(CountryRequest $request)
    {
        $file = $request->image;
        $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
        Storage::put('files/' . $fileName, file_get_contents($file));

        $country = Country::query()->create([
            'name' => $request->name,
            'code' => $request->code,
            'image' => 'files/' . $fileName
        ]);

        return response()->json(new CountryResource($country));
    }


}
