<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function createUser(Request $request){
       $User=new User;
       $User->name = $request->name;
       $User->email = $request->email;
       $User->login = $request->login;
       $User->password = $request->password;
       $User->phone = $request->phone;
       $user->save();
       return response()->json($user);
    }
}
