<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function index(){
        return view('role.index', [
            'roles' => Role::all()
        ]);
    }

    public function show(Role $role){
        return view('role.show', [
            'role' => $role
        ]);
    }

    public function create(){
        return view('role.create');
    }

    public function store(RoleRequest $request){
        Role::create($request->validated());

        return redirect()->route('role.index')->with('create', 'Role creer avec succes');
    }

    public function edit(Role $role){
        return view('role.edit', [
            'role' => $role
        ]);
    }

    public function update(RoleRequest $request, Role $role){
        $role->update($request->validated());

        return redirect()->route('role.index')->with('update', 'Role mis a jour avec succes');  
    }

    public function destroy(Role $role){
        $role->delete();
        return redirect()->route('role.index')->with('delete', 'Role supprimer avec succes');  
    }
}
