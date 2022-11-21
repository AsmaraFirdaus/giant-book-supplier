<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        if (!isset($category)) return abort(404);


        return view('category.index', compact('categories', 'category'));
    }
}
