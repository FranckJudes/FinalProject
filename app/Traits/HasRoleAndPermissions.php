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

    public function isAdmin()
    {
        if($this->roles->contains('slug', 'admin')){
            return true;
        }
    }

    public function hasRole($role)
    {        
        if( strpos($role, ',') !== false ){//check if this is an list of roles

            $listOfRoles = explode(',',$role);

            foreach ($listOfRoles as $role) {                    
                if ($this->roles->contains('slug', $role)) {
                    return true;
                }
            }
        }else{                
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }

        return false;
    }

}