<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;
use App\Http\Requests\LandingEditRequest;
use App\Http\Requests\LandingRequest;
use App\Http\Resources\ContentResource;
use App\Http\Resources\LandingCollection;
use App\Http\Resources\LandingResource;
use App\Models\Content;
use App\Models\Landing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @group Landing
 *
 */
class LandingController extends Controller
{
    /**
     *
     * Show All landings
     *@response scenario=success
     * [{
    "id": 3,
    "type": "text",
    "key": "about_title",
    "value": "about us"
    } , {
    "id": 4,
    "type": "text",
    "key": "about_title",
    "value": "about us"
    }]
     */
    public function index()
    {
        _can('read', true);

        $landings = Landing::all();

        return response()->json(new LandingCollection($landings));
    }

    /**
     *
     * create one landing
     *
     * @response scenario=success
     * {
    "id": 3,
    "type": "text",
    "key": "about_title",
    "value": "about us"
    }
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function store(LandingRequest $request)
    {
        _can('create', true);

        $landing = Landing::query()->create([
            'content_id' => $request->content_id,
            'key' => $request->key,
            'type' => $request->type,
        ]);

        if ($landing->type == 'image') {
            $file = $request->value;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));

            $landing->value = 'files/' . $fileName;
            $landing->save();
        } else {
            $landing->value = $request->value;
            $landing->save();
        }

        return response()->json(new LandingResource($landing));

    }

    /**
     *
     * show one landing
     *
     *@response scenario=success
     * {
    "id": 3,
    "type": "text",
    "key": "about_title",
    "value": "about us"
    }
     *
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function show($id)
    {
        _can('read', true);

        $landing = Landing::query()->findOrFail($id);
        return response()->json(new LandingResource($landing));
    }

    /**
     *
     * edit one landing
     *
     *  @response scenario=success
     * {
    "id": 3,
    "type": "text",
    "key": "about_title",
    "value": "about us"
    }
     *
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     *
     */
    public function update(LandingEditRequest $request, $id)
    {
        _can('update', true);

        $landing = Landing::query()->findOrFail($id);

        if ($request->key)
            $landing->key = $request->key;

        if ($request->value) {
            if ($landing->type == 'image') {
                $file = $request->value;
                $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
                Storage::put('files/' . $fileName, file_get_contents($file));

                $landing->value = 'files/' . $fileName;
            } else
                $landing->value = $request->value;

        }

        $landing->save();
        return response()->json(new LandingResource($landing));

    }

    /**
     *
     * delete one landing
     *
     *  @response scenario=success {"message" : "landing deleted successfully"}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     *
     */
    public function destroy($id)
    {
        _can('delete', true);

        $landing = Landing::query()->findOrFail($id);
        $landing->delete();

        return response()->json(["message" => 'landing deleted successfully']);
    }


}
