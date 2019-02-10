<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $primaryKey = 'payment_id';
    protected $foreignKey = 'customer_id';
    //set the data to be inserted
    protected $fillable = ['payment_id','customer_id','payment_data', 'amount'];
}
