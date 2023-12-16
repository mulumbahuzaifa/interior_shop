<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\BlogDetailsComponent;
use App\Http\Livewire\BlogsComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\ProductsComponent;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\ServicesComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class);
Route::get('/about-us', AboutComponent::class)->name('about');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/blogs', BlogsComponent::class)->name('blogs');
Route::get('/products', ProductsComponent::class)->name('products');

Route::get('/services-details', ServiceDetailsComponent::class)->name('service.detail');
Route::get('/products-details', ProductDetailsComponent::class)->name('product.detail');
Route::get('/blogs-details', BlogDetailsComponent::class)->name('blog.detail');
