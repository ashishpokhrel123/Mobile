<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producttypes extends Model
{
    protected $table="producttypes";
    protected $primaryKey="producttypeid";
     protected $fillable = [
        'producttypename',
    ];

}
