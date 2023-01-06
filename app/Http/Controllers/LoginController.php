<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Auth;
use Validator;
Use App\Models\Role;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        //dd($request->all())
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/berandaadmin')->with('admin','');
        }
        return redirect('login')->with('danger', "Login Gagal!! Email atau Password Salah!!");
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }

    public function registrasi(){
        return view('pengguna.register');
    }


    public function postregister(request $request ){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('$request->password'),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/')->with('success', "Berhasil Registrasi!!");
    }
}
