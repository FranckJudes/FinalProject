<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles =  Role::orderBy("id","desc")->get();

        return view("admin.Roles.index",compact("roles"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.Roles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        // Au niveau de la validation
        $request->validate([
                'role_name' => 'required',
                'role_slug' => 'required'
             ]);

        $role = new Role;

        $role->name = $request->role_name;
        $role->slug = $request->role_slug;

        $role->save();

        $listeDePermission = explode(',',$request->roles_permission);
        //  dd($listeDePermission); 
        
        foreach ($listeDePermission as $permission) {
            $permissions =  new Permission();
            $permissions->name = $permission;
            $permissions->slug = strtolower(str_replace("","-",$permission));
            $permissions->save();

            $role->permissions()->attach($permissions->id);
            
            $role->save();
    
        }
        

        return redirect('/roles');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view("admin.Roles.index",['role' => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.Roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->name = $request->role_name;
        $role->slug = $request->role_slug;
        $role->save();

       
        $role->permissions()->detach();
        $role->permissions()->delete();
        
        
        $listeDePermission = explode(',',$request->roles_permission);
        //  dd($listeDePermission); 
        
        foreach ($listeDePermission as $permission) {
            $permissions =  new Permission();
            $permissions->name = $permission;
            $permissions->slug = strtolower(str_replace("","-",$permission));
            $permissions->save();

            $role->permissions()->attach($permissions->id);
            
            $role->save();
    
        }
        return redirect('/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->permissions()->delete();
        $role->delete();
        $role->permissions()->detach();
        
        return redirect('/roles');
    }
}