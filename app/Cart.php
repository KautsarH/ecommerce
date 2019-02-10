<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $primaryKey = 'cart_id';
    //protected $foreignKey = 'order_id','product_id';
    //set the data to be inserted
    protected $fillable = ['cart_id','order_id','product_id', 'order_num', 'quantity', 'price','total_price'];
}
