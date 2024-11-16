<?php

use App\Livewire\Login\LoginComponent;
use Illuminate\Support\Facades\Route;

Route::get("/auth/login/client", LoginComponent::class)->name("login");

