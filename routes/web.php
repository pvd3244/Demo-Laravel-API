<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

use App\Http\Controllers\AccountsController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function(){
    return view('home');
});
Route::post('/home', [
    ProductsController::class,
    'getData'
]);
Route::put('/home', function(){
    return 'Day la phuong thuc Put';
});
// Route::get('/rdr', function(){
//     return redirect('/home');
// });

Route::get('/product', [
    ProductsController::class, 'index'
]);

Route::get('/product/{name}/{id}', [
    ProductsController::class, 'detail'
])->where([
    'name' => '[a-zA-Z0-9]+',
    'id' => '[0-9]+'
]);//Bieu thuc chinh quy

Route::get('/account', [
    AccountsController::class,
    'index'
]);
