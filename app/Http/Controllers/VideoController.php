<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return Video::all();
    }

    public function video($id)
    {
        return Video::find($id);
    }

    public function store(Request $request)
    {
        
    }
}
