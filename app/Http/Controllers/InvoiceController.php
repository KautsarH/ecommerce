<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;

class InvoiceController extends Controller
{
    //
    public function index(){
        return Invoice::all();
    }

    public function create(request $request){
        $invoice = new Invoice;
        $invoice->customer_id = $request->customer_id;
        $invoice->invoice_date = date("Y-m-d");
        $invoice->save();
    
        return "Data inserted";
    }
    
    //to display a specific Invoice
    public function view($id){
        
       return Invoice::find($id);
    }
    
    //to update a specific Invoice
    public function update(request $request,$id){
        $customer_id = $request->customer_id;
    
        $invoice = Invoice::find($id);
        $invoice->customer_id = $customer_id;
        $invoice->save();
    
        return "Data updated";
    }
    
    //to delete a specific Invoice
    public function delete($id){
    
        $invoice = Invoice::find($id);
        $invoice->delete();
       
        return "Data deleted";
    }
}
