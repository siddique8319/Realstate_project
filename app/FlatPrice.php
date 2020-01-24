<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlatPrice extends Model
{
    protected $table="flat_prices";
    protected $primarykey="id";    
    protected $fillable = ['floor_no','house_no','flat_no','flat_price'];
}
