<?php

namespace App\Http\Controllers\Log;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PrefixUser;
use Validator;

class Login extends Controller
{
    public function Register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user' => 'required|unique:posts|max:255',
            'password' => 'required'
        ]);

        return dd($validator);

    }

    public function Start(Request $request)
    {
        return $request;
    }
}
