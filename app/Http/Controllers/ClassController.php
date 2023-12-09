<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classlist;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Classlist::all();
        return view('class.index', compact('classes'));
    }
}
