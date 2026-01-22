<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/sinhvien/{name?}/{mssv?}', function($name = 'Đoàn Trung Kiên', $mssv = '024220'){
    return view('sinhvien.info', ['name' => $name, 'mssv' => $mssv]);
});

Route::get('/banco/{n?}', function(int $n = 8){
    return view('banco.table', ['n' => $n]);
});

Route::fallback(function (){
    return view('error.404');
});