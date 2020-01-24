<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table="staff";
    protected $primarykey="id";    
    protected $fillable = ['type','designation','info'];
}
