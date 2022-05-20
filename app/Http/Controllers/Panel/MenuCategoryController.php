<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCategoryRequest;
use App\Http\Requests\SelfmadeCategoryRequest;
use App\Http\Resources\ItemCategoryCollection;
use App\Http\Resources\ItemCategoryResource;
use App\Models\ItemCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @group Panel Menu Category
 *
 */
class MenuCategoryController extends Controller
{
    /**
     *
     * Show All Menu's Category
     *
     *@response scenario=success
     * [
    {
    "id": 1,
    "image": "http://127.0.0.1:8000/storage/image.png",
    "name": "pizza"
    },
    {
    "id": 2,
    "image": "http://127.0.0.1:8000/storage/jlhv",
    "name": "hamburger"
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

        $categories = ItemCategory::all();

        return response()->json(new ItemCategoryCollection($categories));

    }


    /**
     *
     * Create menu category
     *
     * this will create a category in menu
     *
     *@response scenario=success
     *  {
    "id": 1,
    "image": "http://127.0.0.1:8000/storage/image.png",
    "name": "pizza"
    }
     * @response status=422 scenario="validation error"
    {
    "message": "The image field is required.",
    "errors": {
    "image": [
    "The image field is required."
    ]
    }
    }
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     *
     */
    public function store(SelfmadeCategoryRequest $request)
    {

        _can('create', true);

        $file = $request->image;
        $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
        Storage::put('files/' . $fileName, file_get_contents($file));

        $category = ItemCategory::query()->create([
            'image' => 'files/' . $fileName,
            'name' => $request->name,
        ]);

        return response()->json(new ItemCategoryResource($category));
    }

    /**
     *
     * Show one menu's category
     *
     *@response scenario=success
     *  {
    "id": 1,
    "image": "http://127.0.0.1:8000/storage/image.png",
    "name": "pizza"
    }
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function show($id)
    {
        _can('read', true);

        $category = ItemCategory::query()->findOrFail($id);
        return response()->json(new ItemCategoryResource($category));
    }

    /**
     *
     * Edit menu's category
     *
     *
     *@response scenario=success
     *  {
    "id": 1,
    "image": "http://127.0.0.1:8000/storage/image.png",
    "name": "pizza"
    }
     * @response status=422 scenario="validation error"
    {
    "message": "The image field is required.",
    "errors": {
    "image": [
    "The image field is required."
    ]
    }
    }
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     *
     */
    public function update(ItemCategoryRequest $request, $id)
    {
        _can('update', true);

        $category = ItemCategory::query()->findOrFail($id);

        if ($request->image) {
            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));
            $category->image = 'files/' . $fileName;
        }

        if ($request->name)
            $category->name = $request->name;

        $category->save();

        return response()->json(new ItemCategoryResource($category));
    }


    /**
     *
     * Delete menu's category
     *
     *  @response scenario=success {"message" : "menu category deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        _can('delete', true);

        $category = ItemCategory::query()->findOrFail($id);
        $category->delete();
        return response()->json(["message" => 'menu category deleted successfully']);
    }
}
