<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncentiveEntry extends Model
{
    protected $table="incentive_entries";
    protected $primarykey="id";    
    protected $fillable = ['incentive'];
}
