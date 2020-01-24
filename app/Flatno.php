<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flatno extends Model
{
    protected $table="flatnos";
    protected $primarykey="id";    
    protected $fillable = ['floor_no','house_no','flat_no'];
}
