<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlatSize extends Model
{
    protected $table="flat_sizes";
    protected $primarykey="id";    
    protected $fillable = ['floor_no','house_no','flat_no','flat_size'];
}
