<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\SelfmadeEditRequest;
use App\Http\Requests\SelfmadeRequest;
use App\Http\Resources\SelfMadeCategoryResource;
use App\Http\Resources\SelfMadeCollection;
use App\Http\Resources\SelfmadePaginateCollection;
use App\Http\Resources\SelfMadeResource;
use App\Models\Pizza;
use App\Models\Selfmade;
use App\Models\SelfmadeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @group Panel Selfmade
 *
 */
class SelfmadeController extends Controller
{
    /**
     *
     * Show All selfmades
     *
     *
     *
     *
     * to get items of a category use :
     * <aside class="success">{url}/api/panel/selfmades?category_id=1</aside>
     * @queryParam category_id to show selfmades of a category .
     * @queryParam count to show last N selfmades  .
     *
     * @response scenario=success
     * [
     * {
     * "category": {
     * "id": 1,
     * "image": "https://rabin.karo.studio/storage/files/1649935818-609770772.png",
     * "name": "test"
     * },
     * "items": []
     * },
     * {
     * "category": {
     * "id": 2,
     * "image": "https://rabin.karo.studio/storage/files/1649938458-516340118.png",
     * "name": "Proteins"
     * },
     * "items": [
     * {
     * "id": 9,
     * "category": "Proteins",
     * "image": "https://rabin.karo.studio/storage/files/1649939385-1614994750.png",
     * "name": "Turkey",
     * "price": "5",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 10,
     * "category": "Proteins",
     * "image": "https://rabin.karo.studio/storage/files/1649939399-1584526436.png",
     * "name": "Peperoni",
     * "price": "4",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 11,
     * "category": "Proteins",
     * "image": "https://rabin.karo.studio/storage/files/1649939421-1942282979.png",
     * "name": "Ham Pork",
     * "price": "9",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 12,
     * "category": "Proteins",
     * "image": "https://rabin.karo.studio/storage/files/1649939443-849350251.png",
     * "name": "Bacon",
     * "price": "2",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 13,
     * "category": "Proteins",
     * "image": "https://rabin.karo.studio/storage/files/1649939458-751912540.png",
     * "name": "Shrimp",
     * "price": "5",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * }
     * ]
     * },
     * {
     * "category": {
     * "id": 4,
     * "image": "https://rabin.karo.studio/storage/files/1649938489-1442248704.png",
     * "name": "Toppings"
     * },
     * "items": [
     * {
     * "id": 4,
     * "category": "Toppings",
     * "image": "https://rabin.karo.studio/storage/files/1649939063-1911919153.png",
     * "name": "Onion",
     * "price": "2",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 5,
     * "category": "Toppings",
     * "image": "https://rabin.karo.studio/storage/files/1649939087-657905889.png",
     * "name": "Bell peper",
     * "price": "5",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 6,
     * "category": "Toppings",
     * "image": "https://rabin.karo.studio/storage/files/1649939106-723479123.png",
     * "name": "Tomato",
     * "price": "3",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 7,
     * "category": "Toppings",
     * "image": "https://rabin.karo.studio/storage/files/1649939124-1682604317.png",
     * "name": "Mushrooms",
     * "price": "2",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 8,
     * "category": "Toppings",
     * "image": "https://rabin.karo.studio/storage/files/1649939144-1955042652.png",
     * "name": "Chili peper",
     * "price": "1",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * }
     * ]
     * },
     * {
     * "category": {
     * "id": 5,
     * "image": "https://rabin.karo.studio/storage/files/1649938513-578878224.png",
     * "name": "Base"
     * },
     * "items": [
     * {
     * "id": 1,
     * "category": "Base",
     * "image": "https://rabin.karo.studio/storage/files/1649938722-155651557.png",
     * "name": "mini",
     * "price": "1",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 2,
     * "category": "Base",
     * "image": "https://rabin.karo.studio/storage/files/1649938810-1674898215.png",
     * "name": "medium",
     * "price": "2",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 3,
     * "category": "Base",
     * "image": "https://rabin.karo.studio/storage/files/1649938829-1462934484.png",
     * "name": "Big",
     * "price": "3",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * }
     * ]
     * },
     * {
     * "category": {
     * "id": 6,
     * "image": "https://rabin.karo.studio/storage/files/1649938525-886795885.png",
     * "name": "sauce"
     * },
     * "items": [
     * {
     * "id": 14,
     * "category": "sauce",
     * "image": "https://rabin.karo.studio/storage/files/1649940048-459027458.png",
     * "name": "Ketchub",
     * "price": "1",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 15,
     * "category": "sauce",
     * "image": "https://rabin.karo.studio/storage/files/1649940064-2042544871.png",
     * "name": "Hot chili",
     * "price": "2",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 16,
     * "category": "sauce",
     * "image": "https://rabin.karo.studio/storage/files/1649940080-1194826427.png",
     * "name": "Garlic",
     * "price": "3",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 17,
     * "category": "sauce",
     * "image": "https://rabin.karo.studio/storage/files/1649940103-397906002.png",
     * "name": "Pesto",
     * "price": "2",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 18,
     * "category": "sauce",
     * "image": "https://rabin.karo.studio/storage/files/1649940160-1695644124.png",
     * "name": "BBQ",
     * "price": "1",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * }
     * ]
     * },
     * {
     * "category": {
     * "id": 7,
     * "image": "https://rabin.karo.studio/storage/files/1649938535-938803222.png",
     * "name": "Cheese"
     * },
     * "items": [
     * {
     * "id": 19,
     * "category": "Cheese",
     * "image": "https://rabin.karo.studio/storage/files/1649940331-995937756.png",
     * "name": "Gouda",
     * "price": "3",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 20,
     * "category": "Cheese",
     * "image": "https://rabin.karo.studio/storage/files/1649940345-418905076.png",
     * "name": "Cheddar",
     * "price": "4",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * },
     * {
     * "id": 21,
     * "category": "Cheese",
     * "image": "https://rabin.karo.studio/storage/files/1649940379-1221406781.png",
     * "name": "Mozzarella",
     * "price": "2",
     * "amount_1x": "15",
     * "amount_2x": "17",
     * "amount_3x": "10"
     * }
     * ]
     * }
     * ]
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     */
    public function index()
    {
        _can('read', true);
        $main_array = [];

        if (\request()->has('count') && request()->count){
            $selfmades = Selfmade::query()->orderByDesc('created_at')->paginate(\request()->count);
            return response()->json(new SelfmadePaginateCollection($selfmades));

        }
        if (\request()->has('category_id') && request()->category_id){
            $category = SelfmadeCategory::query()->findOrFail(request()->category_id);
                $main_array[] = [
                    'category' => new SelfMadeCategoryResource($category),
                    'items' => new SelfMadeCollection($category->selfmades)
                ];
        }

        else {
            $categories = SelfmadeCategory::all();
            foreach ($categories as $category) {
                $main_array[] = [
                    'category' => new SelfMadeCategoryResource($category),
                    'items' => new SelfMadeCollection($category->selfmades)
                ];
            }
        }
        return response()->json($main_array);
    }


    /**
     *
     * Create one selfmade
     *
     *
     * this will create a selfmade
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "category": "topping",
     * "image": "http://127.0.0.1:8000/storage/files/1649269072-916395255.png",
     * "name": "oninon",
     * "price": "17",
     * "amount_1x": "2",
     * "amount_2x": "13",
     * "amount_3x": "3"
     * }
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     */
    public function store(SelfmadeRequest $request)
    {
        _can('create', true);

        $file = $request->image;
        $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
        Storage::put('files/' . $fileName, file_get_contents($file));

        $selfmade = Selfmade::query()->create([
            'name' => $request->name,
            'price' => $request->price,
            'amount_1x' => $request->amount_1x,
            'amount_2x' => $request->amount_2x,
            'amount_3x' => $request->amount_3x,
            'selfmade_category_id' => $request->selfmade_category_id,
            'image' => 'files/' . $fileName
        ]);


        return response()->json(new SelfMadeResource($selfmade));


    }

    /**
     *
     * Show one self made
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "category": "topping",
     * "image": "http://127.0.0.1:8000/storage/files/1649269072-916395255.png",
     * "name": "oninon",
     * "price": "17",
     * "amount_1x": "2",
     * "amount_2x": "13",
     * "amount_3x": "3"
     * }
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function show($id)
    {
        _can('read', true);

        $selfmade = Selfmade::query()->findOrFail($id);
        return response()->json(new SelfMadeResource($selfmade));

    }

    /**
     *
     * Edit self made
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "category": "topping",
     * "image": "http://127.0.0.1:8000/storage/files/1649269072-916395255.png",
     * "name": "oninon",
     * "price": "17",
     * "amount_1x": "2",
     * "amount_2x": "13",
     * "amount_3x": "3"
     * }
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function update(SelfmadeEditRequest $request, $id)
    {
        _can('update', true);

        $selfmade = Selfmade::query()->findOrFail($id);
        if ($request->name)
            $selfmade->name = $request->name;

        if ($request->price)
            $selfmade->price = $request->price;

        if ($request->amount_1x)
            $selfmade->amount_1x = $request->amount_1x;

        if ($request->amount_2x)
            $selfmade->amount_2x = $request->amount_2x;

        if ($request->amount_3x)
            $selfmade->amount_3x = $request->amount_3x;

        if ($request->selfmade_category_id)
            $selfmade->selfmade_category_id = $request->selfmade_category_id;


        if ($request->image) {
            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));
            $selfmade->image = 'files/' . $fileName;
        }
        $selfmade->save();

        return response()->json(new SelfMadeResource($selfmade));
    }

    /**
     *
     * Delete one self made
     *
     * @response scenario=success {"message" : "selfmade deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=403 scenario="not allowed" {"message": "Not Allowed."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        _can('delete', true);

        $selfmade = Selfmade::query()->findOrFail($id);
        $selfmade->delete();
        return response()->json(["message" => 'selfmade deleted successfully']);
    }

}
