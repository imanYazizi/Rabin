<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCategoryRequest;
use App\Http\Requests\SelfmadeCategoryRequest;
use App\Http\Resources\SelfMadeCategoryCollection;
use App\Http\Resources\selfmadeCategoryEdit;
use App\Http\Resources\SelfMadeCategoryResource;
use App\Models\SelfmadeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


/**
 * @group Panel Selfmade Category
 *
 */
class SelfmadeCategoryController extends Controller
{
    /**
     *
     * Show All Selfmade's Category
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
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function index()
    {
        _can('read', true);

        $categories = SelfmadeCategory::all();

        return response()->json(new SelfMadeCategoryCollection($categories));

    }

    /**
     *
     * Create selfmade category
     *
     *
     * this will create a category in selfmade
     *
     * @response scenario=success
     *{
    "id": 2,
    "image": "http://127.0.0.1:8000/storage/files/1649266284-1299351634.png",
    "name": "topping"
    }
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     */
    public function store(SelfmadeCategoryRequest $request)
    {

        _can('create', true);

        $file = $request->image;
        $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
        Storage::put('files/' . $fileName, file_get_contents($file));

        $category = SelfmadeCategory::query()->create([
            'image' => 'files/' . $fileName,
            'name' => $request->name,
        ]);

        if ($request->type){
            $category->type = $request->type;
            $category->save();
        }

        return response()->json(new SelfMadeCategoryResource($category));
    }

    /**
     *
     * Show one selfmade's category
     *
     * @response scenario=success
     * {
    "id": 1,
    "image": "http://127.0.0.1:8000/storage/files/1649266130-257876169.png",
    "name": "topping"
    }
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function show($id)
    {
        _can('read', true);

        $category = SelfmadeCategory::query()->findOrFail($id);
        return response()->json(new SelfMadeCategoryResource($category));
    }

    /**
     *
     * Edit selfmade's category
     *
     *
     * @response scenario=success
     * {
    "id": 1,
    "image": "http://127.0.0.1:8000/storage/files/1649266130-257876169.png",
    "name": "topping"
    }
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function update(selfmadeCategoryEdit $request, $id)
    {
        _can('update', true);

        $category = SelfmadeCategory::query()->findOrFail($id);

        if ($request->image) {
            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));
            $category->image = 'files/' . $fileName;
        }

        if ($request->name)
            $category->name = $request->name;

        if ($request->type)
            $category->type = $request->type;

        $category->save();

        return response()->json(new SelfMadeCategoryResource($category));
    }

    /**
     *
     * Delete selfmade's category
     *
     *  @response scenario=success {"message" : "selfmade category deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        _can('delete', true);

        $category = SelfmadeCategory::query()->findOrFail($id);
        $category->delete();
        return response()->json(["message" => 'selfmade category deleted successfully']);
    }
}
