<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestLogin;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
         //  see view login
        public function pageLogin()
        {
             
                // Utilisateur::create([
                //         'name' => 'Gallagher',
                //         'lastname' => 'jiemounN' ,
                //         'email' => 'test@gmail.com',
                //         'password' => Hash::make('1234')  
                // ]);
                return view('auth.sign-in');
        }


        // Create Login User 
        public function doLogin(RequestLogin $request)

        {
                $credentials =  $request->validated();
     
               if (auth()->guard('utilisateur')->attempt($credentials)) 
               {
                        $request->session()->regenerate();
                        return redirect()->intended('dashboard');
               } 

               // Renvoyer aau login en cas d'erreur avec l'identifiant du email
               return  to_route('PageLogin')->withErrors([
                        'email' => 'Email Invalide',
                        'password' => 'Mot de passe Incorrect'
               ])->onlyInput('email','password');
                
        }

     
}