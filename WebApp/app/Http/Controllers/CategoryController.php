<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $data = Category::all();
        return  view('category.index', ['arr' => $data]);
    }
}
