<?php

use App\Models\Kazi;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome', ['kazi' => Kazi::simplePaginate(9)]);
});

Route::post('/kazi', function (Request $request) {
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'salary' => 'required|numeric',
        'user_id' => 'required|string|max:30',
        'description' => 'nullable|string',
    ]);
    Kazi::create($validatedData);
    return redirect('/')->with('success', 'Job created successfully!');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/create', function () {
    return view('create', ['users' => User::all()]);
});
