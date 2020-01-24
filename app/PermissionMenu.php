<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionMenu extends Model
{
    
    protected $table="permission_menus";
    protected $primarykey="id";    
    protected $fillable = ['menu','user_role'];
}
