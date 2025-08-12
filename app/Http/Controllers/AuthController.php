<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
       $formData=request()->validate([
            'name'=>['required','max:255','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'username'=>['required','max:255','min:3',Rule::unique('users','username')], // table name, column name
            'password'=>['required','min:8']
        ]);
        User::create($formData);
        return redirect('/');
    }
}
