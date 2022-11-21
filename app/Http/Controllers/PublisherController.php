<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('publisher.index', compact('categories', 'publishers'));
    }

    public function detail($id)
    {
        $categories = Category::all();
        $publisher = Publisher::find($id);
        if (!isset($publisher)) return abort(404);

        return view('publisher.detail', compact('categories', 'publisher'));
    }
}
