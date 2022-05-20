<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentCollection;
use App\Http\Requests\ContentEditRequest;
use App\Http\Requests\ContentRequest;
use App\Http\Resources\ContentResource;
use App\Models\Content;
use Illuminate\Http\Request;

/**
 * @group Panel Content
 *
 */

class ContentController extends Controller
{
    /**
     * Show all content
     *
     *@response scenario=success
     * [
     * {
     * "id": 1,
     * "title": "about us",
     * "description": "hello , this is our website"
     * },
     * {
     * "id": 2,
     * "title": "about us",
     * "description": "hello , this is our website"
     * }
     * ]
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     */
    public function index()
    {
        _can('read', true);
        $contents = Content::all();
        return response()->json(new ContentCollection($contents));
    }

    /**
     *
     * create one content
     *
     *
     *
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "title": "about us",
     * "description": "hello , this is our website"
     * }
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function store(ContentRequest $request)
    {
        _can('create', true);

        $content = Content::query()->create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return response()->json(new ContentResource($content));
    }

    /**
     *Show one content
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "title": "about us",
     * "description": "hello , this is our website"
     * }
     *
     * @response status=422 scenario="validation error" {"message": "The selected title is invalid.","errors": {"phone": ["The selected title is invalid."]}}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     */
    public function show($id)
    {
        _can('read', true);

        $content = Content::query()->findOrFail($id);
        return response()->json(new ContentResource($content));

    }

    /**
     * edit one content
     *
     *
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "title": "about us",
     * "description": "hello , this is our website"
     * }
     *
     * @response status=422 scenario="validation error" {"message": "The selected title is invalid.","errors": {"phone": ["The selected title is invalid."]}}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     */
    public function update(ContentEditRequest $request, $id)
    {
        _can('update', true);

        $content = Content::query()->findOrFail($id);

        if ($request->title)
            $content->title = $request->title;

        if ($request->description)
            $content->description = $request->description;

        $content->save();
        return response()->json(new ContentResource($content));

    }

    /**
     * delete one content
     *
     *  @response scenario=success {"message" : "content deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        _can('delete', true);

        $content = Content::query()->findOrFail($id);
        $content->delete();

        return response()->json(["message" => 'content deleted successfully']);
    }
}
