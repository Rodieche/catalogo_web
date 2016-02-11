<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;                                     // PAGINATE
use Laracasts\Flash\Flash;                  // FLASH MESSAGE
use App\Http\Requests\UserRequestCreate;
use App\Http\Requests\UserRequestUpdate;


class UsersController extends Controller
{
    public function index(){

        $users = User::orderBy('id','ASC')->paginate(10);
        return view('admin.users.index')->with('users', $users);

    }

    public function create(){

    	return view('admin.users.create');
    
    }

    public function store(UserRequestCreate $request){

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->type = $request->type;
        $user->save();

        Flash::success('El usuario ' .$user->name . ' se ha registrado de forma exitosa');
        
        return view('welcome');
    }

    public function show($id){

    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    public function update(UserRequestUpdate $request, $id){

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        
        $user->save();

        Flash::success('Los cambios en el usuario ' .$user->id . ' se han registrado con exito');

        $users = User::orderBy('id','ASC')->paginate(10);
        return view('admin.users.index')->with('users', $users);

    }

    public function destroy($id){

        $user = User::find($id);
        $user->delete();

        Flash::warning('El usuario ' .$user->name . ' ha sido eliminado de forma exitosa');
        
        $users = User::orderBy('id','ASC')->paginate(10);
        return view('admin.users.index')->with('users', $users);

    }
}
