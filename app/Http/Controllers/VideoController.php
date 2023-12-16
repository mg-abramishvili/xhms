<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return Video::with('categories', 'names')->get();
    }

    public function video($id)
    {
        return Video::with('categories', 'names')->find($id);
    }

    public function store(Request $request)
    {

    }
}
