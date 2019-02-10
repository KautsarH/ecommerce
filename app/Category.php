<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_id','name', 'description', 'image',
    ];
}
