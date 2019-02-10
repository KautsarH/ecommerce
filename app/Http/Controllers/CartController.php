<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    //
    public function index(){
        return Cart::all();
    }

    public function create(request $request){
        $cart = new Cart;
        $cart->order_id = $request->order_id;
        $cart->product_id = $request->product_id;
        $cart->order_num = $request->order_num;
        $cart->quantity = $request->quantity;
        $cart->price = $request->price;
        $cart->total_price = $request->total_price;
        $cart->save();
    
        return "Data inserted";
    }
    
    //to display a specific Cart
    public function view($id){
        
        return Cart::find($id);
    }
    
    //to update a specific Cart
    public function update(request $request,$id){

        $order_id = $request->order_id;
        $product_id = $request->product_id;
        $order_num = $request->order_num;
        $quantity = $request->quantity;
        $price = $request->price;
        $total_price = $request->total_price;

    	$cart = Cart::find($id);
        $cart->order_id = $order_id;
        $cart->product_id = $product_id;
        $cart->order_num = $order_num;
        $cart->quantity = $quantity;
        $cart->price = $price;
        $cart->total_price = $total_price;
        $cart->save();

        return "Data updated";
    }
    
    //to delete a specific Category
    public function delete($id){
    
        $cart = Cart::find($id);
        $cart->delete();
       
        return "Data deleted";
    }
}
