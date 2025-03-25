<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [PortfolioController::class, 'show'])->name('projects.show');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
