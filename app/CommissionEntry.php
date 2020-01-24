<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommissionEntry extends Model
{
    protected $table="commission_entries";
    protected $primarykey="id";    
    protected $fillable = ['commission_type','com'];
}
