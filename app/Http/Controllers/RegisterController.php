<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Role;


class RegisterController extends Controller
{
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'level' => $data['level'],
            'password' => Hash::make($data['password']),
        ]);

        $user->roles()->attach(Role::where('name', 'user')->first());

        return $user;
    }
}
