<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function categories()
    {
        
        return $this->belongsTo(Category::class);
    }

    protected $primaryKey = 'product_id';
    protected $foreignKey = 'category_id';
    //set the data to be inserted
    protected $fillable = ['product_id','name','description', 'category_id', 'price', 'image','size','colour'];
}
