<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table="houses";
    protected $primarykey="id";    
    protected $fillable = ['project_name','house_no'];
}
