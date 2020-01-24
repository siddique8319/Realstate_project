<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectName extends Model
{   protected $table="project_names";
    protected $primarykey="id";    
    protected $fillable = ['name'];
}
