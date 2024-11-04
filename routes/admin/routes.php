<?php

use App\Livewire\Admin\DashboardComponent;
use Illuminate\Support\Facades\Route;

Route::get("/admin", DashboardComponent::class)->name("dashboard.admin");