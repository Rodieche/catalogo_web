<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;                                     // PAGINATE
use Laracasts\Flash\Flash;                  // FLASH MESSAGE

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

        Flash::success('El usuario ' .$user->name . ' se ha registrado de forma exitosa');
        return view('welcome');
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

        $user = User::find($id);
        $user->delete();

        Flash::warning('El usuario ' .$user->name . ' ha sido eliminado de forma exitosa');
        return view('welcome');

    }
}
