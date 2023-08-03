<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Builder;

class UserController extends Controller
{

    public function GetUsers(Request $request){
        $users = User::where('name',
            $request->alfabet?'like':'<>',
            $request->alfabet?"$request->alfabet%":""
        )->paginate(2);
        $users->appends([
           'alfabet'=> $request->alfabet
        ]);
        return view('users.list-user',compact('users'));
    }

}
