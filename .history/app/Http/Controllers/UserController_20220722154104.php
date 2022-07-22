<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request,User $user){
        $formField = $request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','confirmed','min:6'],
        ]);

        //Has Password b-crypt
        $formField['password']= bcrypt($formField['password']);

        //Create User
        $user = User::create()
    }
}