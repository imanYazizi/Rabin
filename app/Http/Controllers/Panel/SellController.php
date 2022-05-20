<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemResource;
use App\Http\Resources\OrderGroupedCollection;
use App\Http\Resources\SelfMadeResource;
use App\Models\Cart;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group panel Sell
 *
 */
class SellController extends Controller
{

    /**
     *
     * Sell
     *
     * show sell records
     *
     * @response scenario=success
     * {
    "day_of_week_number": [
    {
    "Saturday": {
    "sells": 1
    }
    },
    {
    "Thursday": {
    "sells": 2
    }
    }
    ],
    "most_sell_of_week": {
    "amount": 225,
    "day": "Saturday"
    },
    "least_sell_of_week": {
    "amount": 30,
    "day": "Thursday"
    },
    "most_item_sell": {
    "item": {
    "id": 1,
    "category": "pizza",
    "image": "http://127.0.0.1:8000/storage/",
    "available": true,
    "name": "peperroni",
    "price": "25",
    "description": "so good"
    },
    "count": 9
    },
    "least_item_sell": {
    "item": {
    "id": 2,
    "category": "pizza",
    "image": "http://127.0.0.1:8000/storage/",
    "available": true,
    "name": "sesar",
    "price": "5",
    "description": "very bad"
    },
    "count": 6
    },
    "most_3_item_sell": [
    {
    "item": {
    "id": 1,
    "category": "pizza",
    "image": "http://127.0.0.1:8000/storage/",
    "available": true,
    "name": "peperroni",
    "price": "25",
    "description": "so good"
    },
    "count": 9
    },
    {
    "item": {
    "id": 2,
    "category": "pizza",
    "image": "http://127.0.0.1:8000/storage/",
    "available": true,
    "name": "sesar",
    "price": "5",
    "description": "very bad"
    },
    "count": 6
    }
    ]
    }
     */
    public function index()
    {
        _can('read', true);

        $orders = Order::query()->where('created_at', '>', Carbon::now()->subDays(7))
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as sells'))->groupBy('date')
            ->get();

        $carts = Cart::query()->where('created_at', '>', Carbon::now()->subDays(7))
            ->get()->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('Y-m-d'); // grouping by years
            });

        $carts1 = Cart::query()->where('created_at', '>', Carbon::now()->subDays(7))
            ->get()->groupBy(function ($date) {
                return $date->itemable_id;
            })->map(function ($group) {
                return [
                    'item' => $group->first()["itemable_type"] == "App\Models\Item" ? new ItemResource($group->first()['itemable']) : new SelfMadeResource($group->first()['itemable']),
                    'count' => $group->sum('count'),
                ];
            });

        $most_item_sell = $carts1->sortByDesc('count');
        $most_3_item_sell = $carts1->sortByDesc('count');
        $least_item_sell = $carts1->sortBy('count');


        if($carts1->count() == 0){
            $most_item_sell = [];
            $least_item_sell = [];

        } else {
            $most_item_sell = $most_item_sell->first();
            $most_3_item_sell = $most_3_item_sell->take(3)->values();
            $least_item_sell = $least_item_sell->first();
        }

        $max = 0;
        $days = '';
        foreach ($carts as $key => $cart) {
            $sum = 0;
            foreach ($cart as $or) {
                $sum += (float) $or->amount;
            }
            if($sum > $max){
                $max = $sum;
                $days = Carbon::createFromFormat('Y-m-d',$key)->englishDayOfWeek;
            }
        }

        $min = PHP_INT_MAX;
        $min_days = '';
        foreach ($carts as $key => $cart) {
            $sum = 0;
            foreach ($cart as $or) {
                $sum += (float) $or->amount;
            }
            if($sum < $min){
                $min = $sum;
                $min_days = Carbon::createFromFormat('Y-m-d',$key)->englishDayOfWeek;
            }
        }

        return response()->json([
            'day_of_week_number' => new OrderGroupedCollection($orders),
            'most_sell_of_week' => [
                'amount' => $max,
                'day' => $days
            ],
            'least_sell_of_week' => [
                'amount' => $min,
                'day' => $min_days
            ],
            'most_item_sell' => $most_item_sell,
            'least_item_sell' => $least_item_sell,
            'most_3_item_sell' => $most_3_item_sell
        ]);
    }


}
