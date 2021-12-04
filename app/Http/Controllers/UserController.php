<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        $users = User::latest()->paginate(20);
        return view('users.index',[
        'users'=> $users,
        'pagname' => 'Usuarios'
        ]);
    }

    public function create()
    {
        return view('users.add');
    }

    public function store(Request $request)
    {
        User::create([
            'nombre'=>$request->nombre,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'email_verified_at'=>$request->email_verified_at,
            'password'=>$request->password,
            'remember_token'=>$request->remember_token,
        ]);
        return redirect('/user')->with('alertMesage', 'El usuario se ha agregado exitosamente!');
    }

    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function delete(User $user){
        $user->delete();
        return redirect('/user')->with('dangerMesage', 'El usuario se ha eliminado exitosamente!');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect('/user')->with('alertMesage', 'El usuario se ha actualizado exitosamente!');
    }

    public function destroy($id)
    {
        //
    }
}
