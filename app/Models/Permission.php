<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_permissions');
    }

    
    public function utilisateurs() {

    return $this->belongsToMany(Utilisateur::class,'utilisateurs_permissions');
        
    }
}