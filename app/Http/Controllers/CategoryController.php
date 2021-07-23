<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        $data = Category::all();
        return view("home", ["data" => $data]);
  }
}
