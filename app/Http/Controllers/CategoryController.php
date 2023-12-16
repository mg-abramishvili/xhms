<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::withCount('videos')->orderBy('name')->get();
    }

    public function category($slug)
    {
        return Category::where('slug', $slug)->withCount('videos')->with('videos.names')->first();
    }
}
