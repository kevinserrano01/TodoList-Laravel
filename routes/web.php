<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', [TaskController::class, 'index']);

Route::post('/', function () {
    print_r($_POST);
});