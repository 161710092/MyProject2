<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $fillable = ['logo', 'name'];
    public $timestamps = true;
}
