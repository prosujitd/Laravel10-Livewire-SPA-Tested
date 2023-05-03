<?php

use Illuminate\Support\Facades\Route;


Route::get('/about',\App\Http\Livewire\About::class);
Route::get('/contact',\App\Http\Livewire\Contact::class);

Route::get('/dashboard',\App\Http\Livewire\Dashboard::class);

