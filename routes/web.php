<?php

use App\Http\Controllers\MemorialController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
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
    return view('index');
})->name('home');
Route::get('/single-memorial', function () {
    return view('memorial-single');
})->name('single-memorial');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('memorial', MemorialController::class);
    Route::get('/fetchMemorials', [MemorialController::class, 'fetchMemorials'])->name('memorial.get');
    Route::post('subscription', [PlanController::class, 'subscription'])->name('subscription.create');
    
});
Route::resource('plan', PlanController::class);

require __DIR__.'/auth.php';
