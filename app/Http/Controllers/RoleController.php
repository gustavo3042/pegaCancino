<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){


        
        $this->middleware('auth');
       

            $this->middleware('can:roles.index')->only('index');
            $this->middleware('can:roles.create')->only('create','store');
            $this->middleware('can:roles.edit')->only('edit','update');
            $this->middleware('can:roles.destroy')->only('destroy');
            
                 
    
        }

    public function index()
    {
        $roles = Role::all();
        return view('roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $permissions = Permission::all();

        return view('roles.create',compact('permisos','permissions'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        $request->validate([
            'name'=>'required']);
            
            $role = Role::create($request->only('name'));
            $role->permissions()->sync($request->permissions);
            return redirect()->route('roles.index',$role)->with('Mensaje','El rol se creo con éxito');
          
                //esta forma es para este caso dado q el laravel q se usa es la version 7 no la 8 pero el spatie si es la version 8
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        
        return view('roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();

        return view('roles.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Role $role)
    {
        $request->validate([

            'name' => 'required'
            
                  ]);
            
            $role->update($request->all());
            
            $role->permissions()->sync($request->permissions);
            
            return redirect()->route('roles.index')->with('Mensaje','El rol se actualizo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('Mensaje','El rol se elimino con éxito');
    }
}
