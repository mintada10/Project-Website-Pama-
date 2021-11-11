<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    protected $table = 'type_products';
    //protected $primarykey = 'id_pt';
    protected $fillable = 'name_manu';
}
