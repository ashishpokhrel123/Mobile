<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    
    protected $table="product";
    protected $primaryKey="productid";
    protected $fillable = [
         'productname', 'model', 'Price', 'description', 'image', 'producttypename'
    ];
}
