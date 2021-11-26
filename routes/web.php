<?php

use App\Http\Controllers\HomeController;
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
*/

// Route::get('/', function () {
//     return view('welcome');
// }); 기존은 이게 있어서 바로 welcome페이지로 이동하지만 home을 띄어야하기 때문에 삭제


Route::get('/',[HomeController::class,"index"]);
// home.blade.php를 불러오기 위한 Route

Route::get('/redirects',[HomeController::class,"redirects"]);
//처음 화면 시작시 유저 구별을위한 Route

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
