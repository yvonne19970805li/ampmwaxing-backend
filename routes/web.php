<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//後面放的是控制器不是函式，建議寫法會將邏輯彙整直接放在控制器內，以便維護，控制器也可以單獨測試或是重用
Route::get('/', [BlogController::class, 'indexPage']);

Route::group(['prefix' => 'user'], function(){
    //使用者驗證同樣的網址導向可以寫在一起
    Route::group(['prpefix'=>'auth'],function(){
        Route::get('/sign-up',[BlogController::class, 'signUpPage']);
        Route::post('/sign-up', [BlogController::class, 'signUpProcess']);
        Route::get('/sign-in', [BlogController::class, 'signInPage']);
        Route::post('/sign-in', [BlogController::class, 'signInProcess']);
        Route::get('/sign-out', [BlogController::class, 'signOut']);
    });
});

?>