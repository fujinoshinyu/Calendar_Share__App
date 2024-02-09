<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DmController;
use App\Http\Controllers\HomeEventController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PostController::class)->middleware(['auth'])->group(function(){ 
    Route::get('/', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show'); 
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete'); 
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

//カレンダー
Route::get('/calendar', [EventController::class, 'show'])->name("show");
Route::post('/calendar/create', [EventController::class, 'create'])->name("create");
Route::post('/calendar/get',  [EventController::class, 'get'])->name("get");
Route::put('/calendar/update', [EventController::class, 'update'])->name("update");
Route::delete('/calendar/delete', [EventController::class, 'delete'])->name("delete");


//homeカレンダー
Route::get('/home_calendar', [HomeEventController::class, 'show'])->name("show_home");
Route::post('/home_calendar/create', [HomeEventController::class, 'create'])->name("create");
Route::post('/home_calendar/get',  [HomeEventController::class, 'get'])->name("get");
Route::put('/home_calendar/update', [HomeEventController::class, 'update'])->name("update");



//DM
Route::controller(DmController::class)->middleware(['auth'])->group(function(){
    Route::get('/dm', 'dm')->name('dm');
    Route::post('/add', 'add')->name('add');
    Route::get('/result/ajax', 'getData');

});


require __DIR__.'/auth.php';
