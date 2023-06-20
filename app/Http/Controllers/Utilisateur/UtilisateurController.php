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

    public function addPage(Request $request)
    {
        if ($request->ajax()) {    
           $roles =  Role::where('id',$request->role_id)->first();
           
           $permissions =  $roles->permissions;

           return $permissions;
        }


        
        $roles = Role::all();
      
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

       
        $utilisateur =  new Utilisateur;

        $utilisateur->name = $request->name;
        $utilisateur->lastName = $request->lastname;
        $utilisateur->email = $request->email;
        $utilisateur->password = Hash::make($request->password);
        
        $utilisateur->save();
         
        if($request->role != null){
            $utilisateur->roles()->attach($request->role);
            $utilisateur->save();
        }

        if($request->permissions != null){
            
           
            foreach($request->permissions as $permission)
            {
              $utilisateur->permissions()->attach($permission);
              $utilisateur->save();
            }
        }
        return to_route('list-utilisateur');
    }

    public function allUser()
    {
        $data = DB::table('users')->get();

        return view('Admin.User.listUser',compact('data'));
    }

    public function delete($id)
    {
        Utilisateur::find($id)->delete();
        return to_route('list-utilisateur');
    }

    public function update(Request $request,$id)
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