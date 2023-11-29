<?php

// app/Http/Controllers/ManagerController.php

namespace App\Http\Controllers;

use App\Models\Classlist;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.index');
    }

    public function uploadYoutubeLink(Request $request)
    {
        $request->validate([
            'youtube_link' => 'required|url',
        ]);

        $class = new Classlist();
        $class->link = $request->input('youtube_link');
        $class->save();

        return redirect()->route('manager.index')->with('success', 'YouTube link uploaded successfully!');
    }
}
