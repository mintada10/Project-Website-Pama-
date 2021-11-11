<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = 'homepages';
    //protected $primarykey = 'id_homepage';
    protected $fillable = [
        'information_test',
        'recommended_product',
        'product_name',
        'image_bg',
        'price',
        'id_admin'
    ]
}
