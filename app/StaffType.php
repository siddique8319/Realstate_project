<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffType extends Model
{
    protected $table="staff_types";
    protected $primarykey="id";    
    protected $fillable = ['type'];
}
