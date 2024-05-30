<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('works.index', compact('works'));
    }

    public function create()
    {
        return view('works.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        Work::create($validatedData);

        return redirect()->route('works.index')
                         ->with('success', 'Work created successfully.');
    }

    public function edit(Work $work)
    {
        return view('works.edit', compact('work'));
    }

    public function update(Request $request, Work $work)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;

            // Delete the old image
            $oldImagePath = public_path('images/' . $work->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $work->update($validatedData);

        return redirect()->route('works.index')
                         ->with('success', 'Work updated successfully');
    }

    public function destroy(Work $work)
    {
        $imagePath = public_path('images/' . $work->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $work->delete();

        return redirect()->route('works.index')
                         ->with('success', 'Work deleted successfully');
    }
}