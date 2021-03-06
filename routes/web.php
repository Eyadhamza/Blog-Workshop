<?php


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

// routes for home page
Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/{category}', [CategoryController::class, 'show'])
    ->name('categories.show');

// routes for article Resource
Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('/articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');


Route::post('/articles', [ArticleController::class, 'store'])
    ->name('articles.store');

Route::get('/articles/{article}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])
    ->name('articles.edit');

Route::patch('/articles/{article}', [ArticleController::class, 'update'])
    ->name('articles.update');

Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])
    ->name('articles.destroy');

// routes for contact page
Route::get('/contact-us', [ContactController::class, 'display'])
    ->name('contact-us');

Route::post('/contact-us', [ContactController::class, 'store'])
    ->name('contact-us.store');

// routes for about page
Route::get('/contact-us', [\App\Http\Controllers\AboutController::class, 'display'])
    ->name('about');
