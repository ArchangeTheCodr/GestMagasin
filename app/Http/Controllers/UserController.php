<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Role;
class UserController extends Controller
{
    Public function index(){
        return view('User.index', [
            'users' => User::all()
        ]);
    }

    public function create(){
        return view('User.create',[
            'roles' => Role::all()
        ]);
    }

    public function store(UserRequest $request){
        $user = User::create($request->validated());
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('user.index')->with('create', 'Utilisateur creer avec succes');
    }

    public function edit(User $user){
        return view('User.edit', compact('user'), [
            'roles' => Role::all()
        ]);
    }
    
    public function update(User $user, UserRequest $request){
        $user->update($request->validated());
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('user.index')->with('update', 'Informations utilisateur mis a jour avec succes');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('delete', 'Utilisateur supprimer avec succes');

    }

}
