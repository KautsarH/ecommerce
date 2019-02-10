<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function index(){
        return Customer::all();
    }

    public function create(request $request){
        $customer = new Customer;
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->password = $request->password;
		$customer->fullname = $request->fullname;
		$customer->address = $request->address;
		$customer->city = $request->city;
		$customer->state = $request->state;
		$customer->postalCode = $request->postalCode;
		$customer->country = $request->country;
		$customer->creditCard = $request->creditCard;
		$customer->mobileNum = $request->mobileNum;
        $customer->save();
    
        return "Data inserted";
    }
    
    //to display a specific Customer
    public function view($id){
        
       return Customer::find($id);
    }
    
    //to update a specific Customer
    public function update(request $request,$id){
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
		$fullname = $request->fullname;
		$address = $request->address;
		$city = $request->city;
		$state = $request->state;
		$postalCode = $request->postalCode;
		$country = $request->country;
		$creditCard = $request->creditCard;
		$mobileNum = $request->mobileNum;
    
        $customer = Customer::find($id);
        $customer->username = $username;
        $customer->email = $email;
        $customer->password = $password;
		$customer->fullname = $fullname;
		$customer->address = $address;
		$customer->city = $city;
		$customer->state = $state;
		$customer->postalCode = $postalCode;
		$customer->country = $country;
		$customer->creditCard = $creditCard;
		$customer->mobileNum = $mobileNum;
        $customer->save();
    
        return "Data updated";
    }
    
    //to delete a specific Customer
    public function delete($id){
    
        $customer = Customer::find($id);
        $customer->delete();
       
        return "Data deleted";
    }
}
