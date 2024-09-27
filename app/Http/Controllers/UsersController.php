<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Stancl\Tenancy\Facades\Tenancy;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function create()
    { 
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=> Hash::make($request->password),
        ]);

        return back();
    }
}
