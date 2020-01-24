<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionSubMenu extends Model
{
    
    protected $table="permission_sub_menus";
    protected $primarykey="id";    
    protected $fillable = ['menu','user_role','sub_menu','url'];
}
