<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    //
    public function index(){
        return Payment::all();
    }

    public function create(request $request){
        $payment = new Payment;
        $payment->customer_id = $request->customer_id;
        $payment->payment_data = $request->payment_data;
        $payment->amount = $request->amount;
        $payment->save();
    
        return "Data inserted";
    }
    
    //to display a specific Payment
    public function view($id){
        
       return Payment::find($id);
    }
    
    //to update a specific Payment
    public function update(request $request,$id){
        $customer_id = $request->customer_id;
    	$payment_data = $request->payment_data;
        $amount = $request->amount;

        $payment = Payment::find($id);
        $payment->customer_id = $customer_id;
        $payment->payment_data = $payment_data;
        $payment->amount = $amount;
        $payment->save();
    
        return "Data updated";
    }
    
    //to delete a specific Payment
    public function delete($id){
    
        $payment = Payment::find($id);
        $payment->delete();
       
        return "Data deleted";
    }
}
