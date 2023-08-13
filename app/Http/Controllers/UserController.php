<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function newUser(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'email'=> ['required', 'email', Rule::unique('users','email')],
            'password'=> 'required',
        ]);

        $data['password'] = Hash::make($data['password']) ;
        $user = User::create($data);
        auth()->login($user);  
        
        return redirect('/connect')->with('success', "User Registered good ! ");
    }

    public function login(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);


        if(Auth::attempt($data)){
            return redirect('./')->with('success', "utilisateur connecté");
        } else {
            return redirect('./')->with('success', "utilisateur NON connecté");
        }

    }

    public function logout(){
        auth()->logout();
        return redirect('./')->with('success', "utilisateur déconnecté");
    }
}
