<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $fillable = ['nama'];
    public $timestamps = true;
}
