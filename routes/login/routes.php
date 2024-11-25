<?php

use App\Livewire\Login\LoginComponent;
use Illuminate\Support\Facades\Route;


Route::get("/login/index/", LoginComponent::class)->name("login");
