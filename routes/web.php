<?php

use App\Livewire\MainPageComponent;
use App\Livewire\PortfolioComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', MainPageComponent::class)->name('main-page');
Route::get('/portfolio', PortfolioComponent::class)->name('portfolio');
Route::get('/o-mnie', AboutMeComponent::class)->name('about-me');
