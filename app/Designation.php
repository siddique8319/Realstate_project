<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table="designations";
    protected $primarykey="id";    
    protected $fillable = ['designation'];
}
