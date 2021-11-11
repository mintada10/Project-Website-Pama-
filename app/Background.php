<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $table = 'backgrounds';
    //protected $primarykey = 'id_bg';
    protected $fillable = [
        'image',
        'id_admin',
        'status'
    ]
}
