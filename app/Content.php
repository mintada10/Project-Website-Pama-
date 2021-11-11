<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    //protected $primarykey = 'id_content';
    protected $fillable = [
        'image',
        'id_admin'
    ]
}
