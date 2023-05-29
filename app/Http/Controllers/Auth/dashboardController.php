<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    // View template dashoard
   public function dashboard()
   {
        return view('admin.dashboard');
   }


   // Function Log Out User

   public function logout()
   {
     auth()->guard('utilisateur')->logout();
     return to_route('PageLogin');
   }
}