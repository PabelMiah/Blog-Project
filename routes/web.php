<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AboutController;


// landing Page
Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/blog-post/{id}',[PageController::class,'blogPost'])->name('blog-post');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/about',[PageController::class,'about'])->name('about');

// Backend
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::group(['middleware'=>['auth:sanctum', config('jetstream.auth_session'), 'verified']], function (){
    //Category Module
    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::post('/new-category',[CategoryController::class,'newCategory'])->name('new-category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}/{title}', [CategoryController::class,'editCategory'])->name('edit-category');
    Route::post('/update-category/{id}',[CategoryController::class,'updateCategory'])->name('update-category');
    Route::get('delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete-category');
    //Blog Module
    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
    Route::post('/new-blog', [BlogController::class, 'newBlog'])->name('new-blog');
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog');
    Route::get('/edit-blog/{id}/{title}', [BlogController::class, 'editBlog'])->name('edit-blog');
    Route::post('/update-blog/{id}', [BlogController::class, 'updateBlog'])->name('update-blog');
    Route::get('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog');
    //Contact Module
    Route::get('/add-contact', [ContactController::class, 'addContact'])->name('add-contact');
    Route::post('/new-contact', [ContactController::class, 'newContact'])->name('new-contact');
    Route::get('/manage-contact', [ContactController::class, 'manageContact'])->name('manage-contact');
    Route::get('/edit-contact/{id}', [ContactController::class, 'editContact'])->name('edit-contact');
    Route::post('/update-contact/{id}', [ContactController::class, 'updateContact'])->name('update-contact');
    Route::get('/delete-contact/{id}', [ContactController::class,'deleteContact'])->name('delete-contact');
    //About Module
    Route::get('/add-about', [AboutController::class, 'addAbout'])->name('add-about');
    Route::post('/new-about', [AboutController::class, 'newAbout'])->name('new-about');
    Route::get('/manage-about', [AboutController::class, 'manageAbout'])->name('manage-about');
    Route::get('/edit-about/{id}', [AboutController::class, 'editAbout'])->name('edit-about');
    Route::post('/update-about/{id}', [AboutController::class, 'updateAbout'])->name('update-about');
    Route::get('/delete-about/{id}', [AboutController::class,'deleteAbout'])->name('delete-about');

});



