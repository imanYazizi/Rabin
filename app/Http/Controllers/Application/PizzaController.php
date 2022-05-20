<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\PizzaRequest;
use App\Http\Resources\PizzaCollection;
use App\Http\Resources\PizzaResource;
use App\Models\Pizza;
use App\Models\PizzaToSelfmade;
use App\Models\Selfmade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @group Pizza (selfmade)
 *
 * APIs for create selfmade pizza
 */
class PizzaController extends Controller
{

    /**
     * Show All pizzas
     *
     * This endpoint shows all selfmade pizzas of login user
     *
     * @response scenario=success
     * [
     * {
     * "id": 1,
     * "name": "soluta",
     * "price": "5",
     * "selfmades": [
     * {
     * "id": 1,
     * "category": "topping",
     * "image": "http://127.0.0.1:8000/storage/files/1649269045-111627720.png",
     * "name": "oninon",
     * "price": "17",
     * "amount_1x": "2",
     * "amount_2x": "13",
     * "amount_3x": "3"
     * },
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
     * ]
     * }
     * ]
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     */
    public function index()
    {
        $pizzas = Pizza::query()->where('client_id', auth()->guard('api')->user()->id)->get();
        return response(new PizzaCollection($pizzas));
    }


    /**
     * Create selfmade pizza
     *
     * Use this when user makes a selfmade pizza
     * <aside class="success">Send id of selfmade's items in array</aside>
     *
     * @response scenario=success
     * {
     * "id": 2,
     * "name": "exercitationem",
     * "price": 4,
     * "selfmades": [
     * {
     * "id": 1,
     * "category": "topping",
     * "image": "http://127.0.0.1:8000/storage/files/1649269045-111627720.png",
     * "name": "oninon",
     * "price": "17",
     * "amount_1x": "2",
     * "amount_2x": "13",
     * "amount_3x": "3"
     * },
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
     * ]
     * }
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     *
     * * @response status=422 scenario="validation error"
     * {
     * "message": "The selfmades field is required.",
     * "errors": {
     * "selfmades": [
     * "The selfmades field is required."
     * ]
     * }
     * }
     */
    public function store(PizzaRequest $request)
    {

        $pizza = Pizza::query()->create([
            'client_id' => auth()->guard('api')->user()->id,
            'name' => $request->name,
            'price' => $request->price,
        ]);

        if ($request->image) {
            $file = $request->image;
            $fileName = time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            Storage::put('files/' . $fileName, file_get_contents($file));
            $pizza->image = 'files/' . $fileName;
            $pizza->save();

        }
        foreach ($request->selfmades as $selfmade) {
            PizzaToSelfmade::query()->create([
                'pizza_id' => $pizza->id,
                'selfmade_id' => $selfmade->id,
                'amount' => $selfmade->amount,
                'price' => $selfmade->price,
            ]);
            $pizza->price += $selfmade->price;
            $pizza->save();
        }

        return response()->json(new PizzaResource($pizza));
    }

    /**
     * Show One selfmade pizza
     *
     * This endpoint shows One selfmade pizza
     *
     * @response scenario=success
     * [
     * {
     * "id": 1,
     * "name": "soluta",
     * "price": "5",
     * "selfmades": [
     * {
     * "id": 1,
     * "category": "topping",
     * "image": "http://127.0.0.1:8000/storage/files/1649269045-111627720.png",
     * "name": "oninon",
     * "price": "17",
     * "amount_1x": "2",
     * "amount_2x": "13",
     * "amount_3x": "3"
     * },
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
     * ]
     * }
     * ]
     *
     *
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function show($id)
    {
        $pizza = Pizza::query()->findOrFail($id);
        return response(new PizzaResource($pizza));
    }


    /**
     * Delete One selfmade pizza
     *
     * This endpoint deletes One selfmade pizza
     *
     *
     *  @response scenario=success {"message" : "pizza deleted successfully"}
     * @response status=401 scenario="Unauthenticated" {"message": "Unauthenticated."}
     * @response status=404 scenario="not found" {"message": "Not Found!"}
     */
    public function destroy($id)
    {
        $pizza = Pizza::query()->findOrFail($id);
        $pizza->delete();
        return response()->json(["message" => 'pizza deleted successfully']);
    }
}
