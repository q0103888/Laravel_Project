<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/users',[AdminController::class,"user"]);
// /admin/users.blade.php를 불러오기 위한 Route


Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);
// 유저 정보를 삭제하기 위한 Route
 
Route::get('foodmenu',[AdminController::class,"foodmenu"]);
// admin이 메뉴를 등록할 때 사용하는 것

Route::post('/uploadfood',[AdminController::class,"upload"]);
// admin이 메뉴를 등록하고 그 정보를 업데이트

Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"]);
// 메뉴를 삭제할 때 사용하는 Route

Route::get('/updateview/{id}',[AdminController::class,"updateview"]);
// admin에서 메뉴 수정 버튼을 누르면 수정 페이지로 이동

Route::post('/update/{id}',[AdminController::class,"update"]);
// 수정한 메뉴를 업데이트 하는 것

Route::get('/redirects',[HomeController::class,"redirects"]);
//처음 화면 시작시 유저 구별을위한 Route

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
