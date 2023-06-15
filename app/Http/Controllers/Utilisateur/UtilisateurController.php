<?php

namespace App\Http\Controllers\Utilisateur;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return
            view('admin.list-utilisateur', compact('utilisateurs'));
    }

    public function addPage()
    {
        $roles = Role::all();
        // dd($role);
        return 
            view('admin.addUtilisateur',compact('roles'));    
    }
    public function create(Request $request)
    {
        $creditials = $request->validate([
              'name' => 'required',
              'lastname' => 'required',
              'email' => 'required|email',
              'password' => 'required|min:6',
              'confirm_password' => 'required|same:password|min:6'  
        ]);

        Utilisateur::create([
            'name' =>  $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
            
        ]);

        return to_route('list-utilisateur');
    }

    public function allUser()
    {
        $data = DB::table('users')->get();

        return view('Admin.User.listUser',compact('data'));
    }

    public function removeUser($id)
    {
        Utilisateur::find($id)->delete();
        return to_route('list-utilisateur');
    }

    public function updateUser(Request $request,$id)
    {
     $user = Utilisateur::find($id);
     $creditials = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6'  
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'lastname' => $request->lastname,
            'password' => $request->password
        ]);
        return
            to_route('list-utilisateur');
    }

    public function updatePage($id)
    {
        $data = Utilisateur::find($id);    
        return
                view('admin.updateUtilisateur',compact('data'));
    }
    
    
    
    
}