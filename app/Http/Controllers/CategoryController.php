<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * @return int
     */
    public function index(Request $request)
    {
        return Category::all();
    }
}
