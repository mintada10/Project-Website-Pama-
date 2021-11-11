<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    //protected $primarykey = 'id_product';
    protected $fillable = [
        'image',
        'name',
        'price',
        'id_admin',
        'id_pt'
    ]
}
