<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class ItemController extends Controller
{
    // public function FatchItem(){
    //     $data = DB::table('items')->Wherebetween("id",[1,30])->get();
    //     return view("Item",["data"=>$data]);
    // }


    public function index(){
        return view("home",["cat"=>Category::limit(15)->get(),
        "pro"=>Item::paginate(12)]);
    }
}
