<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return "I'm OK";
});


Route::get('post',[PostController::class,'index'])->name('post.index');
Route::post('postcreate',[PostController::class,'store'])->name('post.store');
Route::get('post/create',[PostController::class,'create'])->name('post.create');
Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::put('postupdate/{id}',[PostController::class,'update'])->name('post.update');
Route::delete('postdelete/{id}',[PostController::class,'destroy'])->name('post.delete');
// Route::get('post/show/{id}',[PostController::class,'show'])->name('post.show');


// Route::resource('posts',"PostController");

