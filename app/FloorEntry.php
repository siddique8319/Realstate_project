<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FloorEntry extends Model
{
   
    protected $table="floor_entries";
    protected $primarykey="id";    
    protected $fillable = ['floor_no','house_no'];
}
