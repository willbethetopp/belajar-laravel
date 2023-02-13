<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index", [
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => ["required", "max:100", "unique:users", "regex:/^[\w\s]+$/"],
            "username" => ["required", "min:4", "max:20", "unique:users", "regex:/^[a-zA-Z0-9]+$/"],
            "email" => "required|email:dns|unique:users",
            "password" => ["required", "min:5", "max:255", "regex:/^[\w\d!@#$%^&*]+$/i"],
            "reEnterPassword" => "required|same:password"
        ]);
        
        $validatedData["password"] = Hash::make($validatedData["password"]);

        User::create($validatedData);

        return redirect("/login")->with("success", "Registration successful!");
    }
}