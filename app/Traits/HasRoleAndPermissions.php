<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;
trait HasRoleAndPermissions
{
    
    /**
     * @return mixed
     */

    public function roles()
    {
        return $this->belongsToMany(Role::class,'utilisateurs_roles');   
    }

    /**
     * @return mixed
     */

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'utilisateurs_permissions');
    }
    
}