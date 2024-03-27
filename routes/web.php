<?php

use App\Livewire\About\AboutPage;
use App\Livewire\Frontend\Home\HomePage;
use Illuminate\Support\Facades\Route;

Route::name('web.')->group(function () {
    Route::get('/', HomePage::class)->name('home');
    Route::get('/about', AboutPage::class)->name('about');
    Route::get('/contact', AboutPage::class)->name('contact');
    Route::get('/blogs', AboutPage::class)->name('blogs');
    Route::get('/products', AboutPage::class)->name('products');
    Route::get('/solutions', AboutPage::class)->name('solutions');
});