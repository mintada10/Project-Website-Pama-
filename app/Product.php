<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = 'products';
    // protected $primarykey = 'id_product';
    // protected $fillable = [
    //     'image',
    //     'name',
    //     'price',
    //     'id_admin',
    //     'id_pt'];
    protected $primaryKey =	'id_product';

    public function typeproduct(){
        return $this->belongsTo(Type_product::class,'id_pt');
    }
    public function admin(){
        return $this->belongsTo(Admin::class,'id_admin');
    }
}
