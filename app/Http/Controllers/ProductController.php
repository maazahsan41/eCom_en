<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;
class ProductController extends Controller
{
    function index(){
        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function details($id){
        $detail_data=product::find($id);
        return view('detail',['product'=>$detail_data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new cart();            
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');


        }else{
           return redirect('/login');
        }
    }
    function cartItem(){
        $userId=Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();

    }
}
