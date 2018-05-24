<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['makanan','minuman','harga_makanan','harga_minuman'];
}
