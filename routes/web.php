<?php

use App\Livewire\Customer;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/customer', Customer::class);
