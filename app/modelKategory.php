<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelKategory extends Model
{
    protected $table = 'kategory';
     protected $fillable = [
 
        'nama_kategory',
        'remarks'
    ];
}
