<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    // protected $table = 'type_products';
    // protected $primarykey = 'id_pt';
    // protected $fillable = 'name_manu';
    protected $primaryKey =	'id_pt';

    public function product(){
        return $this->hasMany(Product::class,'id_pt');
    }
    
}
