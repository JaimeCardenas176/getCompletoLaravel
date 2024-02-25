<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\Cuser;
use App\Http\Controllers\Product;
use App\Http\Controllers\Order;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::get('/users',[UserController::class, 'findAll'] );

//ESTAS SON TODOS LOS ENDPOINTS (FUNCIONES) QUE TE PIDEN EN LA PRUEBA
Route::controller(Cuser::class) -> group(
    function(){
        Route::post('/login', 'login');
        Route::post('/signup', 'signUp');
        Route::post('/forgot', 'forgot');
        Route::post('/user/edit', 'userEdit');
        Route::post('/user/changePassword', 'userChangePassword');
    }
);

Route::controller(Product::class) -> group(
    function(){
        Route::get('/products/get', 'getProducts');
        Route::get('/categories/get', 'getCategories');
        Route::post('/search', 'search');
    }
);

Route::controller(Order::class) -> group(
    function(){
        Route::get('/history/get', 'history');
        Route::post('/setOrder', 'createOrder');
    }
);



