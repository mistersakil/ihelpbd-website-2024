<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Frontend\Home\HomePage;
use App\Livewire\Frontend\About\AboutPage;
use App\Livewire\Frontend\Blogs\BlogListPage;
use App\Livewire\Frontend\Contact\ContactPage;
use App\Livewire\Frontend\Products\ProductListPage;
use App\Livewire\Frontend\Solutions\SolutionListPage;

Route::name('web.')->group(function () {
    Route::get('/', HomePage::class)->name('home');
    Route::get('/about-us', AboutPage::class)->name('about');
    Route::get('/contact-us', ContactPage::class)->name('contact');
    Route::get('/blogs', BlogListPage::class)->name('blogs');
    Route::get('/products', ProductListPage::class)->name('products');
    Route::get('/solutions', SolutionListPage::class)->name('solutions');
});
