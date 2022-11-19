<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function registerUser(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $data = new Users();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Hash::make($req->password);
        $data->save();
        return view('login');

    }
    public function loginUser(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = Users::where('email','=',$req->email)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                return view('welcome');
            }
            else {
                return back()->with('fail','password not matched');
            }
        }
        else {
            return back()->with('fail','unable to singnup');
        }
    }   
}
