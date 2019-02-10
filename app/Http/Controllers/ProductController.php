<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
     public function index(){
        return Product::all();
    }

    public function create(request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
		$product->price = $request->price;
		$product->image = $request->image;
		$product->size = $request->size;
		$product->colour = $request->colour;
        $product->save();
    
        return "Data inserted";
    }
    
    //to display a specific Product
    public function view($id){
        
       return Product::find($id);
    }
    
    //to update a specific Product
    public function update(request $request,$id){
       	$name = $request->name;
        $description = $request->description;
        $category_id = $request->category_id;
		$price = $request->price;
		$image = $request->image;
		$size = $request->size;
		$colour = $request->colour;
    
        $product = Product::find($id);
       	$product->name = $name;
        $product->description = $description;
        $product->category_id = $category_id;
		$product->price = $price;
		$product->image = $image;
		$product->size = $size;
		$product->colour = $colour;
        $product->save();
    
        return "Data updated";
    }
    
    //to delete a specific Product
    public function delete($id){
    
        $product = Product::find($id);
        $product->delete();
       
        return "Data deleted";
    }
}
