<?php

use App\Livewire\About\AboutPage;
use App\Livewire\Contact\ContactPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Frontend\Home\HomePage;
use App\Livewire\Frontend\Blogs\BlogListPage;

Route::name('web.')->group(function () {
    Route::get('/', HomePage::class)->name('home');
    Route::get('/about-us', AboutPage::class)->name('about');
    Route::get('/contact-us', ContactPage::class)->name('contact');
    Route::get('/blogs', BlogListPage::class)->name('blogs');
    Route::get('/products', AboutPage::class)->name('products');
    Route::get('/solutions', AboutPage::class)->name('solutions');
});