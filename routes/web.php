<?php

use App\Models\Kazi;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome', ['kazi' => Kazi::simplePaginate(9)]);
});
