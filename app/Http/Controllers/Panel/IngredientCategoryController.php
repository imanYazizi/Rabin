<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientCategoryRequest;
use App\Http\Requests\ItemCategoryRequest;
use App\Http\Resources\IngredientCategoryCollection;
use App\Http\Resources\IngredientCategoryResource;
use App\Models\IngredientCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @group Panel Ingredient Category
 *
 */
class IngredientCategoryController extends Controller
{
    /**
     *Show All ingredient's Category
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

        $categories = IngredientCategory::all();

        return response()->json(new IngredientCategoryCollection($categories));
    }

    /**
     *
     * Create ingredient category
     *
     *
     * this will create a category in ingredient
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
    public function store(IngredientCategoryRequest $request)
    {
        _can('create', true);

        $file = $request->image;
        $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
        Storage::put('files/' . $fileName, file_get_contents($file));

        $category = IngredientCategory::query()->create([
            'image' => 'files/' . $fileName,
            'name' => $request->name,
        ]);

        return response()->json(new IngredientCategoryResource($category));
    }

    /**
     *
     * Show one ingredient's category
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

        $category = IngredientCategory::query()->findOrFail($id);
        return response()->json(new IngredientCategoryResource($category));
    }

    /**
     *
     * Edit ingredient's category
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
    public function update(ItemCategoryRequest $request, $id)
    {
        _can('update', true);

        $category = IngredientCategory::query()->findOrFail($id);

        if ($request->image) {
            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));
            $category->image = 'files/' . $fileName;
        }

        if ($request->name)
            $category->name = $request->name;

        $category->save();

        return response()->json(new IngredientCategoryResource($category));
    }

    /**
     *
     * Delete ingredient's category
     *
     *  @response scenario=success {"message" : "ingredient category deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        _can('delete', true);

        $category = IngredientCategory::query()->findOrFail($id);
        $category->delete();
        return response()->json(["message" => 'ingredient category deleted successfully']);
    }
}
