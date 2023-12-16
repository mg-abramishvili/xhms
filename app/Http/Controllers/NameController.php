<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index()
    {
        return Name::withCount('videos')->orderBy('name')->get();
    }

    public function name($id)
    {
        return Name::withCount('videos')->with('videos.categories')->find($id);
    }
}
