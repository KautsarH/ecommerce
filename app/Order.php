<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function customers()
    {
        
        return $this->belongsTo(Customer::class,'customer_id');
    }
     public function payments()
    {
        
        return $this->belongsTo(Payment::class,'payment_id');
    }

    protected $primaryKey = 'order_id';
    //protected $foreignKey = 'customer_id','payment_id';
    //set the data to be inserted
    protected $fillable = ['order_id','customer_id','payment_id', 'order_date', 'quantity', 'delivery_date','address','status','subtotal','total_price'];

    
}
