<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearEntry extends Model
{
    protected $table="year_entries";
    protected $primarykey="id";    
    protected $fillable = ['year','month'];
}
