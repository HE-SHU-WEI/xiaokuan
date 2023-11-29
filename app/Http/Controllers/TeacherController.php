<?php

namespace App\Http\Controllers;

use App\Models\Userlist;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show($id)
    {
        $teacher = Userlist::findOrFail($id);
        return view('teacher.show', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = Userlist::findOrFail($id);
        return view('teacher.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Userlist::findOrFail($id);
        $teacher->name = $request->input('name');
        $teacher->introduction = $request->input('introduction');
        $teacher->background = $request->input('background');

        if ($request->hasFile('photo')) {
            // Handle photo upload
            $photoPath = $request->file('photo')->store('teacher_photos', 'public');
            $teacher->photo = $photoPath;
        }

        $teacher->entry = $request->input('entry');
        $teacher->save();

        return redirect()->route('teacher.show', $teacher->id)->with('success', 'Teacher information updated successfully!');
    }
}
