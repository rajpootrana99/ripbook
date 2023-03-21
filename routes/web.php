<?php

use App\Http\Controllers\MemorialController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\TearfulTributeController;
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
Route::get('memorial/{memorial}', [MemorialController::class, 'show'])->name('memorial.show');
Route::resource('/tearfulTribute', TearfulTributeController::class);
Route::get('fetchTearfulTributes/{memorial}', [TearfulTributeController::class, 'fetchTearfulTributes']);
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('memorial', MemorialController::class)->except(['show']);;
    Route::get('/fetchMemorials', [MemorialController::class, 'fetchMemorials'])->name('memorial.get');
    Route::post('subscription', [PlanController::class, 'subscription'])->name('subscription.create');
    Route::post('/addGallery', [MemorialController::class, 'addGallery']);
    Route::post('updateUser', [ProfileController::class, 'update']);
    Route::resource('notice', NoticeController::class);
});
Route::resource('plan', PlanController::class);

require __DIR__ . '/auth.php';
