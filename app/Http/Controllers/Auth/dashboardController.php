<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use App\Models\Role;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    // View template dashoard
   public function dashboard()
   {
        $countUtilisateur =  Utilisateur::count();
        $countRole =  Role::count();
        $countDocuments =  Documents::count();
        
        return view('admin.dashboard',compact('countUtilisateur','countRole','countDocuments'));
   }


   // Function Log Out User

   public function logout()
   {
     auth()->guard('utilisateur')->logout();
     return to_route('PageLogin');
   }
}