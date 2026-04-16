<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:1',
        'program' => 'required|string|max:255',
        'email' => 'required|email',
        'gender' => 'required|in:male,female',
        'hobbies' => 'required|array|min:5',
        'hobbies.*' => 'required|string|max:255',
        'biography' => 'required|string|max:1000',
    ]);

    $profiles = session('profiles', []);
    $profiles[] = $validated;
    session(['profiles' => $profiles]);

    return redirect('/');
});

Route::post('/clear', function () {
    session()->forget('profiles');
    return redirect('/');
});