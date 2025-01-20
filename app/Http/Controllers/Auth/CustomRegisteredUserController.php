<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomRegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register'); // Your registration view
    }

    public function store(Request $request)
    {
        

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        return redirect()->route('dashboard');
    }
}
