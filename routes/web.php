<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
//     return 'Hello, world!';
// });

// Route::get('/', [WelcomeController::class,'index']);

Route::get('users/{id}/friends', function ($id) {
    return $id;
});

// Route::get('members/{id}', [MemberController::class,'show'])->name('members.show');

Route::prefix('dashboard')->group(function () {

    Route::get('/', function () {
        return '대쉬보드 인덱스';
    });

    Route::get('users', function () {
        return '대쉬보드 유저스 처리 로직';
    });
    
});

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/', 'welcome',['User'=>'Michel']);

Route::get('/', [TaskController::class, 'index']);
