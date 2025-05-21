<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
  public function index()
  {
    $majors = Major::all();
    return view('majors.index', compact('majors'));
  }

  public function create()
  {
    return view('majors.create');
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'code' => 'required|unique:majors',
      'name' => 'required',
      'description' => 'nullable|string|max:255'
    ]);

    Major::create([
      'code' => $validated['code'],
      'name' => $validated['name'],
      'description' => $validated['description']
    ]);

    return redirect()->route('majors.index')->with('success', 'Major created!');
  }

  public function show(Major $major)
  {
    return view('majors.show', compact('major'));
  }

  public function edit(Major $major)
  {
    return view('majors.update', compact('major'));
  }

  public function update(Request $request, Major $major)
  {
    $request->validate(['name' => 'required|string|max:255']);
    $major->update($request->only('name'));

    return redirect()->route('majors.index')->with('success', 'Major updated!');
  }

  public function destroy(Major $major)
  {
    $major->delete();
    return redirect()->route('majors.index')->with('success', 'Major deleted!');
  }
}
