<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (Auth::user()->user_type==='manager'){
        return view('dashboard');
    }else if(Auth::user()->user_type==='user'){
        return view('user_dashboard');
    }else{
        abort(404);
    }
})->middleware(['auth'])->name('dashboard');
Route::resource('tasks', \App\Http\Controllers\TaskController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
