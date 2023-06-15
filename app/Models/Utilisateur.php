<?php

namespace App\Models;
use App\Traits\HasRoleAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Authenticatable
{
    use HasFactory,HasRoleAndPermissions;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
    ];

}