<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // protected $table = 'admins';
    // //protected $primarykey = 'id_admin';
    // protected $fillable = [
    //     'name',
    //     'password',
    //     'email'];

    protected $primaryKey =	'id_admin';

    public function product(){
        return $this->hasMany(Product::class,'id_admin');
    }
    public function background(){
        return $this->hasMany(Background::class,'id_admin');
    }
    public function content(){
        return $this->hasMany(Content::class,'id_admin');
    }
    public function Homepage(){
        return $this->hasMany(Content::class,'id_admin');
    }
}
