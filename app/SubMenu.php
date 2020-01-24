<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $table="sub_menus";
    protected $primarykey="id";    
    protected $fillable = ['sub_menu'];
}
