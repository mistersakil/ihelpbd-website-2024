<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Auth\LoginPage;
use App\Livewire\Frontend\Home\HomePage;
use App\Livewire\Frontend\About\AboutPage;

use App\Http\Middleware\AuthCheckMiddleware;
use App\Livewire\Frontend\Blogs\BlogListPage;
use App\Http\Middleware\AdminLocaleMiddleware;
use App\Livewire\Frontend\Contact\ContactPage;
use App\Livewire\Backend\Sliders\SliderEditPage;
use App\Livewire\Backend\Sliders\SliderListPage;
use App\Livewire\Backend\Dashboard\DashboardPage;
use App\Livewire\Backend\Sliders\SliderCreatePage;
use App\Livewire\Frontend\Products\ProductListPage;
use App\Livewire\Frontend\Solutions\SolutionListPage;

Route::name('web.')->middleware([AdminLocaleMiddleware::class])->group(function () {
    Route::get('/', HomePage::class)->name('home');
    Route::get('/about-us', AboutPage::class)->name('about');
    Route::get('/contact-us', ContactPage::class)->name('contact');
    Route::get('/blogs', BlogListPage::class)->name('blogs');
    Route::get('/products', ProductListPage::class)->name('products');
    Route::get('/solutions', SolutionListPage::class)->name('solutions');
});

$backendMiddleware = [
    AuthCheckMiddleware::class,
    AdminLocaleMiddleware::class
];

## Backend routes
Route::middleware($backendMiddleware)->prefix('admin')->name('admin.')->group(function () {
    //     dump(app()->getLocale());
    // dump(__('slider title required'));
    Route::get('/', DashboardPage::class)->name('dashboard');

    ### Sliders 
    Route::get('/sliders', SliderListPage::class)->name('sliders.list');
    Route::get('/sliders/create', SliderCreatePage::class)->name('sliders.create');
    Route::get('/sliders/edit/{id}', SliderEditPage::class)->name('sliders.edit');

    ### Admin login
    Route::get('/login', LoginPage::class)->name('login')->withoutMiddleware([AuthCheckMiddleware::class]);;
});
