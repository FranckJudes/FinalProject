<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestLogin;
use App\Models\Documents;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Node\Block\Document;

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

        public function pageRegister()
                {
                
                        // Utilisateur::create([
                        //         'name' => 'Gallagher',
                        //         'lastname' => 'jiemounN' ,
                        //         'email' => 'test@gmail.com',
                        //         'password' => Hash::make('1234')  
                        // ]);
                        return view('auth.sign-up');
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
                if (auth()->guard('student')->attempt($credentials)) {
                         

                        $documents = Documents::all();
                        $request->session()->regenerate();

                        return redirect()->route('dashboardStudent');
                        // return redirect()->v('dashboardStudent');
                }

               // Renvoyer aau login en cas d'erreur avec l'identifiant du email
               return  to_route('PageLogin')->withErrors([
                        'email' => 'Email Invalide',
                        'password' => 'Mot de passe Incorrect'
               ])->onlyInput('email','password');
                
        }

     
}