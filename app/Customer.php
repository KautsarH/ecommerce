<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    /*public function orders()
    {
        
        return $this->belongsTo(Order::class,'customer_id');
    }*/

    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'username','email','password','fullname','address','city','state','postalCode','country','creditCard','mobileNum'
    ];
}
