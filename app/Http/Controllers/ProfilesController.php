<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('index', compact('profiles'));
    }

    public function store(Request $request)
    {
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

        Profile::create($validated);
        return redirect('/');
    }

    public function clear()
    {
        Profile::truncate();
        return redirect('/');
    }
}
