<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        return view('modules.products.index');
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('modules.products.create', compact('categories'));
    }
}
