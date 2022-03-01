<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'Hello World';
})->name('home');

Route::get('/categories', function () {
    return 'Hello World';
})->name('categories.index');

Route::get('/categories/{category}', function () {
    return 'Hello World';
})->name('categories.show');

Route::get('/articles', function () {
    return 'Hello World';
})->name('articles.index');

Route::get('/articles/create', function () {
    return 'Hello World';
})->name('articles.create');


Route::post('/articles', function () {
    return 'Hello World';
})->name('articles.store');

Route::get('/articles/{article}', function () {
    return 'Hello World';
})->name('articles.show');

Route::post('/articles/{article}/comments', function () {
    return 'Hello World';
})->name('comments.store');

Route::get('/articles/{article}/edit', function () {
    return 'Hello World';
})->name('articles.edit');

Route::patch('/articles/{article}', function () {
    return 'Hello World';
})->name('articles.update');

Route::delete('/articles/{article}', function () {
    return 'Hello World';
})->name('articles.destroy');


Route::get('/contact-us/show', function () {
    return 'Hello World';
})->name('contact-us.show');

Route::post('/contact-us', function () {
    return 'Hello World';
})->name('contact-us.store');

Route::post('/newsletter-subscribe', function () {
    return 'Hello World';
})->name('subscribe');


