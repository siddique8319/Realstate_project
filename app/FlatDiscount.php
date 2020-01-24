<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlatDiscount extends Model
{
    protected $table="flat_discounts";
    protected $primarykey="id";    
    protected $fillable = ['title','image'];
}
