<?php

use App\Http\Controllers\Application\AddressController;
use App\Http\Controllers\Application\AuthController;
use App\Http\Controllers\Application\CartController;
use App\Http\Controllers\Application\ChangePasswordController;
use App\Http\Controllers\Application\FavoriteController;
use App\Http\Controllers\Application\ForgetPasswordController;
use App\Http\Controllers\Application\ItemCategoryController;
use App\Http\Controllers\Application\ItemController;
use App\Http\Controllers\Application\OrderController;
use App\Http\Controllers\Application\PizzaController;
use App\Http\Controllers\Application\SelfMadeController;
use App\Http\Controllers\Application\VerifyController;
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Panel\AdminController;
use App\Http\Controllers\Panel\ClientController;
use App\Http\Controllers\Panel\ContentController;
use App\Http\Controllers\Panel\CountryController;
use App\Http\Controllers\Panel\IngredientCategoryController;
use App\Http\Controllers\Panel\IngredientController;
use App\Http\Controllers\Panel\MenuController;
use App\Http\Controllers\Panel\SellController;
use App\Http\Controllers\Panel\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['throttle:200,1'])->group(function () {

    Route::post('/login', [AuthController::class, 'login'])->middleware(['throttle:3,1']);
    Route::post('/register', [AuthController::class, 'store']);
    Route::post('/change_password/{reset_link}', [ChangePasswordController::class, 'change_password'])->name('forget_code');
    Route::post('/forget_password', [ForgetPasswordController::class, 'send_link']);
    Route::post('/verify_phone', [VerifyController::class, 'phone_code'])->name('verify_phone');
    Route::get('/verify_email/{code}', [VerifyController::class, 'email_code'])->name('verify_email');



    Route::middleware(['auth:api'])->group(function () {
        Route::apiResource('/address', AddressController::class);
        Route::post('/edit_user', [AuthController::class, 'update']);
        Route::apiResource('/menu', ItemController::class);
        Route::apiResource('/menu_category', ItemCategoryController::class);
        Route::get('/special_items', [ItemController::class , 'special']);
        Route::apiResource('/selfmade', SelfMadeController::class);
        Route::apiResource('/pizza', PizzaController::class);
        Route::apiResource('/favorite', FavoriteController::class);
        Route::apiResource('/cart', CartController::class);
        Route::get('/active_order', [OrderController::class, 'active_order']);
        Route::apiResource('/order', OrderController::class);
        Route::post('/current_password', [ChangePasswordController::class, 'current']);

    });


//panel

    Route::post('/admin/login', [AdminController::class, 'login'])->middleware(['throttle:3,1']);
    Route::get('/all_country', [CountryController::class, 'index']);

    Route::middleware(['auth:admins'])->group(function () {
        Route::group(['prefix' => 'panel'], function () {

            Route::apiResource('/landing', LandingController::class);
            Route::apiResource('/content', ContentController::class);

            Route::apiResource('/users', UsersController::class);
            Route::apiResource('/admin', AdminController::class);
            Route::apiResource('/country', CountryController::class, ['except' => ['index']]);
            Route::apiResource('/sell', SellController::class);
            Route::apiResource('/orders', \App\Http\Controllers\Panel\OrderController::class);
            Route::apiResource('/ingredient', IngredientController::class);
            Route::apiResource('/ingredient_category', IngredientCategoryController::class);
            Route::post('/item_ingredient', [IngredientController::class , 'add_to_item']);
            Route::apiResource('/menus', MenuController::class);
            Route::apiResource('/menu_category', \App\Http\Controllers\Panel\MenuCategoryController::class);
            Route::apiResource('/selfmades', \App\Http\Controllers\Panel\SelfmadeController::class);
            Route::apiResource('/selfmade_category', \App\Http\Controllers\Panel\SelfmadeCategoryController::class);
            Route::apiResource('/client', ClientController::class);
        });
    });

});
