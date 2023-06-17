<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

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
            return "hello";
        }else{
           return redirect('/login');
        }
    }
}
