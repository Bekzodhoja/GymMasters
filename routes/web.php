<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainersController;

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



Route::get('/dashboard', function () {
    return view('admin.pages.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/bloge',[PageController::class,'bloge'])->name('bloge');
Route::get('/classes',[PageController::class,'classes'])->name('classes');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/detail',[PageController::class,'detail'])->name('detail');
Route::get('/team',[PageController::class,'team'])->name('team');
Route::get('/testimoniol',[PageController::class,'testimoniol'])->name('testimoniol');


//Blog Contoller

Route::resource('blog',BlogController::class);
Route::resource('train',TrainersController::class);
Route::resource('classe',ClassesController::class);
