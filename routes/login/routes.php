<?php

use App\Livewire\Login\LoginComponent;
use Illuminate\Support\Facades\Route;

Route::get("/auth/login", LoginComponent::class)->name("login");
