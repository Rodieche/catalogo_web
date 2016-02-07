<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index(){

        $users = User::orderBy('id','ASC')->paginate(10);
        return view('admin.users.index')->with('users', $users);

    }

    public function create(){

    	return view('admin.users.create');
    
    }

    public function store(Request $request){

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->type = $request->type;
        $user->save();
        dd('Usuario Creado con Exito!');
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
