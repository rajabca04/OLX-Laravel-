<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Redis\RedisManager;

class ItemController extends Controller
{
    public function index(){
        $data = ['cat'=>Category::all()];
        return view("home",$data);
    }

    public function filter(Request $req,$id){
        return view("filter",["pro"=>Item::Where("Category_id",$id)->paginate(15)]);
    }

    public function search(Request $req){
        if ($req->search  != ""):
            return view("filter",["pro"=>Item::Where("pro_title", "LIKE", "%$req->search%")->paginate()]);
        else:
            return redirect()->back();
        endif;
    }

   public function view($itemId,$catId){
        return view("single",[
            "item"=>Item::find($itemId),
            'pro'=>Item::where("id","!=",$itemId)->where("category_id",$catId)->get()]);
    }

    public function insert(Request $req){

        if($req->method() == "POST"){
            $req->validate([
                'pro_title'=> 'required',
                'price'=>'required|integer',
                'seller_name'=>'required',
                'seller_contact'=>'required',
                'description'=>'required',
                //"category"=>'required',
                "address"=>'required',
                "city"=>'required'
            ]);

            $filename = $req->image->getClientOriginalName();
            $req ->image->move(public_path("products"),$filename);
            $i = new Item();

            $i->pro_title = $req->pro_title;
            $i->price = $req->price;
            $i->seller_name = $req->seller_name;
            $i->seller_contact=$req->seller_contact;
            $i->description=$req->description;
            $i->category_id=$req->category_id;
            $i->address=$req->address;
            $i->city=$req->city;
            $i->image=$filename;
            $i-> save();
            return redirect()->back();
            
        }
        return view('insertItem',[
            'cat'=> Category::all(),
            'main'=> Category::Where("parent_id",0)->get()
           
        ]);

    }

    public function insertCat(Request $req){
        $req->validate([
            'title' => 'required'
        ]);

        $c = new Category();
        $c->title = $req->title;
        $c->parent_id = $req->parent_id;
        $c->save();
        return redirect()->back();
    }

    public function register(Request $request){
        if($request->method()=="POST")
            {
            // $request->validate([
            //     'pro_title' => 'required',
            //     'price' => 'required',
            //     'seller_name' => 'required'
            // ]);
            $reg = new User();
            $reg->name = $request->input('name');
            $reg->email = $request->input('email');
            $reg->password = Hash::make($request->input('password'));
            $reg->save();
            return redirect()->route("login");
        }
        return view("register");
    }

    public function login(Request $request)
    {
        if($request->method() == "POST"){
            $user = User::where("email",$request->email)->first();

            if($user->exists()){
                echo "valid User";
                if(User::where("email",$request->email)->where("password",Hash::check($user->password, $request->password))->exists()){
                    return redirect("insertItem");
                }
            
                else{
                    // echo "password incorrect";
                    $request ->session()->put("login",$request->email);

                    return redirect()->route('home');
                }
            }
            else{
                echo "invalid user not exist in user model";
            }

        }
        return view('home');
    }

    public function logout(Request $req){
        $req->session()->flush();
        return redirect()->route('homepage');


    }

}
