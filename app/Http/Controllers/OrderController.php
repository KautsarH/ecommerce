<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Customer;

class OrderController extends Controller
{
    //
    public function index()
    {
    	return Order::all();
    }

    public function create(request $request){
    	$order = new Order;
    	$customer = new Customer;
    	$order->customer_id = $request->customer_id;//$customer->customer_id;
        $order->payment_id=$request->payment_id;
    	$order->order_date = date("Y-m-d");
    	$order->quantity = $request->quantity;
    	$order->delivery_date = $request->delivery_date;
    	$order->address = $request->address; //$customer->address;
    	$order->status = $request->status;
    	$order->subtotal = $request->subtotal;
    	$order->total_price = $request->total_price;
    	$order->save();

    	return "data inserted";
    }

    public function view($id){
    	return Order::find($id);

    } 

    public function update(request $request,$id){
    	
    	$quantity = $request->quantity;
        $payment_id= $request->payment_id;
    	$delivery_date = $request->delivery_date;
    	$address = $request->address; 
    	$status = $request->status;
    	$subtotal = $request->subtotal;
    	$total_price = $request->total_price;

    	$order = Order::find($id);
    	$order->quantity = $quantity;
    	$order->delivery_date = $delivery_date;
    	$order->address = $address; 
    	$order->status = $status;
    	$order->subtotal = $subtotal;
    	$order->total_price = $total_price;
    	$order->save();
    
        return "Data updated";
    }

    //to delete a specific Customer
    public function delete($id){
    
        $order = Order::find($id);
        $order->delete();
       
        return "Data deleted";
    }
}
