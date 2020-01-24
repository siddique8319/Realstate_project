<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FixSallary extends Model
{
    protected $table="fix_sallaries";
    protected $primarykey="id";    
    protected $fillable = ['sallary','info'];
}
