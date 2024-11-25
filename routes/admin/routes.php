<?php
use App\Livewire\User\UserComponent;
use App\Livewire\Admin\DashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\admin\middleware;
Route::middleware(middleware::class)->group(function(){
Route::get("/admin", DashboardComponent::class)->name("dashboard.admin");
Route::get("/utilizadores",UserComponent::class)->name("admin.users");
});

