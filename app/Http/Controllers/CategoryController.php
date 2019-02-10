<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        return Category::all();
    }

    public function create(request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image;
        $category->save();
    
        return "Data inserted";
    }
    
    //to display a specific Category
    public function view($id){
        
       return Category::find($id);
    }
    
    //to update a specific Category
    public function update(request $request,$id){
        $name = $request->name;
        $description = $request->description;
        $image = $request->image;
    
        $category = Category::find($id);
        $category->name = $name;
        $category->description = $description;
        $category->image = $image;
        $category->save();
    
        return "Data updated";
    }
    
    //to delete a specific Category
    public function delete($id){
    
        $category = Category::find($id);
        $category->delete();
       
        return "Data deleted";
    }
}
