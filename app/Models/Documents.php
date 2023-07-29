<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images()
    {
        return 
            $this->hasMany(Images::class);  
    }

    public function pdf()
    {
        return 
            $this->hasOne(Pdf::class);  
    }

   
    // public function utilisateur()
    // {
    //     return $this->belongsTo(Utilisateur::class);
    // }
    
}