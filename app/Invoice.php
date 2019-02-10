<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $primaryKey = 'invoice_id';
    protected $foreignKey = 'customer_id';
    //set the data to be inserted
    protected $fillable = ['invoice_id','customer_id','invoice_date'];
}
