<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table="discounts";
    protected $primarykey="id";    
    protected $fillable = ['floor_no','house_no','flat_no','discount','start_date','end_date'];
}
