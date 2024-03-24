<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('index');
});

*/

// routes/web.php

use App\Models\Product;

Route::get('/products', function () {
    $products = DB::table('product')->get();
    return view('db', compact('products'));
});
Route::get('/indexx', function () {
    $indexx = DB::table('product')->get();
    return view('db', compact('indexx'));
});



Route::view("/", "index");
//Route::view("/db", "db");
Route::view("/index1","index1");
Route::view("/fzb","fzb");
Route::view("/indexx","indexx");