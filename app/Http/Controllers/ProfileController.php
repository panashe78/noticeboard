<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
{
    $request->validate([
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7168',
        'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7168',
        'national_id_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7168',
        'national_id' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'phone_number' => 'nullable|string|max:15',
    
    ]);

    $user = Auth::user();

    // Handle profile picture upload
    if ($request->hasFile('profile_photo')) {
        $path = $request->file('profile_photo')->store('profile_photo', 'public');
        $user->profile_photo = $path;
    }

    // Handle cover photo upload
    if ($request->hasFile('cover_photo')) {
        $path = $request->file('cover_photo')->store('cover_photo', 'public');
        $user->cover_photo = $path;
    }

    // Handle national ID upload
    if ($request->hasFile('national_id_photo')) {
        $path = $request->file('national_id_photo')->store('national_id_photo', 'public');
        $user->national_id_photo = $path;
    }

    // Update other user fields
    $user->national_id = $request->input('national_id');
    $user->address = $request->input('address');
    $user->phone_number = $request->input('phone_number');

    $user->save();

    return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
}}

