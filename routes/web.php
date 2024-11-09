<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal;




Route::get('/', function () {
    return view('index');
});

require __DIR__.'/admin/routes.php';
require __DIR__.'/login/routes.php';
