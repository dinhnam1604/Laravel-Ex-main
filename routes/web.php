<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/test', function () {
    return response()->json("Hello World");
});

Route::prefix('product') -> group(function(){
    Route::get('/', function () {
        return view('product.index');
    });
    Route::get('/add', function () {
        return view('product.add');
    })->name('add');
    Route::get('/{id?}', function(string $id = '123'){
        return view('product.productDetail', ['id' => $id]);
    });
});

Route::get('/sinhvien/{name?}/{mssv?}', function($name = 'Đinh Phương Nam', $mssv = '024820'){
    return view('sinhvien.info', ['name' => $name, 'mssv' => $mssv]);
});

Route::get('/banco/{n?}', function(int $n = 8){
    return view('banco.table', ['n' => $n]);
});

Route::get('/age', function () {
    return view('age');
})->name('age');

Route::post('/age', [AgeController::class, 'age'])->name('age.submit');

Route::fallback(function (){
    return view('error.404');
});

Route::get('/access-denied', function () {
    return view('access-denied');
})->name('access.denied');