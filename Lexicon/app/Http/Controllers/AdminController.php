<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function settings()
    {
        $admin = Auth::guard('admin')->user();
        $admins = Admin::all(); // For list
        return view('admin.settings', compact('admin', 'admins'));
    }

    public function updateSelf(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        $request->validate([
            'fullName' => 'required|string|max:255',
            'password' => 'nullable|string|min:6|confirmed',
            'profileImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $admin->fullName = $request->fullName;

        if ($request->hasFile('profileImage')) {
            $profileImage = 'storage/' . $request->file('profileImage')->store('profile_images', 'public');
        }


        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return back()->with('success', 'Profile updated successfully.');
    }

    public function index()
    {
        return Admin::all(); // For API/table if needed
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|confirmed',
            'fullName' => 'required|string|max:255',
            'profileImage' => 'nullable|image|max:2048',
            'role' => 'required|in:superadmin,editor',
            'phone' => 'nullable',
        ]);

        $profileImage = null;
        if ($request->hasFile('profileImage')) {
            $profileImage = "/storage/" . $request->file('profileImage')->store('profile_images', 'public');
        }

        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fullName' => $request->fullName,
            'profileImage' => $profileImage,
            'role' => $request->role,
            'phone' => $request->phone,
            'status' => true
        ]);

        return back()->with('success', 'New admin created.');
    }
}
