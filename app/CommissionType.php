<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommissionType extends Model
{
    protected $table="commission_types";
    protected $primarykey="id";    
    protected $fillable = ['commission_type'];
}
