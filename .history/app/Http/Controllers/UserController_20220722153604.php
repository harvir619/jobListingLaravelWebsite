<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request,User $user){
        $formField = $request->validate([
            'name'=>['required',min:3],
            'email'
        ])
    }
}