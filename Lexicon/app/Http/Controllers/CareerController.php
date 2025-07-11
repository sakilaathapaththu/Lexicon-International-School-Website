<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{
   public function index()
    {
        $careers = Career::latest()->with('admin')->get();
        return view('admin.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'job_type' => 'required|in:Full-time,Part-time,Contract',
            'email' => 'required|email',
            'contact_no' => 'required|string|min:10',
            'deadline' => 'required|date|after:today',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:4048',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = 'storage/' . $request->file('image')->store('career_images', 'public');
        }

        Career::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'job_type' => $request->job_type,
            'email' => $request->email,
            'contact_no' => $request->contact_no,
            'deadline' => $request->deadline,
            'image' => $imagePath,
            'posted_by' => Auth::guard('admin')->id(),
        ]);
        return redirect()->route('careers.index')->with('success', 'Career post added.');
    }

    public function destroy(Career $career)
    {
        $career->delete();
        return back()->with('success', 'Career post deleted.');
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'job_type' => 'required|in:Full-time,Part-time,Contract',
            'email' => 'required|email',
            'contact_no' => 'required|string|min:10',
            'deadline' => 'required|date|after:today',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:4048',
        ]);

        // ✅ Handle optional image update
        if ($request->hasFile('image')) {
            $imagePath = 'storage/' . $request->file('image')->store('career_images', 'public');
            $career->image = $imagePath;
        }

        // ✅ Update all other fields
        $career->title = $request->title;
        $career->description = $request->description;
        $career->location = $request->location;
        $career->job_type = $request->job_type;
        $career->email = $request->email;
        $career->contact_no = $request->contact_no;
        $career->deadline = $request->deadline;

        $career->save();

        return redirect()->route('careers.index')->with('success', 'Career updated successfully.');
    }


}
