<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal;




Route::get('/', function () {
    return view('index');
});

Route:: get('/contacto', [Principal::class,'contacto']);
Route:: get('/login', [Principal::class, 'login']);

require __DIR__.'/admin/routes.php';