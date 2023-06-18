<?php

namespace App\Http\Controllers\Errors;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class errorController extends Controller
{
    public function index()
    {
       
        return view("errors.404");
    }

    public function page500()
    {
        return view("errors.500");
    }

    public function page403()
    {
        return view("errors.403");
    }
}