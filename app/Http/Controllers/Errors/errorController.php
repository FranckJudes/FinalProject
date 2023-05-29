<?php

namespace App\Http\Controllers\Errors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}