<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgeController;
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

// Route::prefix('product') -> group(function(){
//     // Route::get('/', function () {
//     //     return view('product.index');
//     // });
//     Route::get('/', [ProductController::class, 'index'])->name('product.index');

//     Route::get('/add', function () {
//         return view('product.add');
//     })->name('add');
//     Route::get('/{id?}', function(string $id = '123'){
//         return view('product.productDetail', ['id' => $id]);
//     });
// });

Route::get('/sinhvien/{name?}/{mssv?}', function($name = 'Đoàn Trung Kiên', $mssv = '024220'){
    return view('sinhvien.info', ['name' => $name, 'mssv' => $mssv]);
});

Route::get('/banco/{n?}', function(int $n = 8){
    return view('banco.table', ['n' => $n]);
});

Route::fallback(function (){
    return view('error.404');
});

Route::get('/signin', [AuthController::class, 'signIn'])->name('signin');
Route::post('/check-signin', [AuthController::class, 'checkSignIn'])->name('check.signin');

Route::get('/age', [AgeController::class, 'index']);
Route::post('/save-age', [AgeController::class, 'save']);

Route::get('/dashboard', function () {
    return "Truy cập thành công";
})->middleware('check.age');

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);