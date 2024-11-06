<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $credentials = $request->validated();
        
        $user = new User();

        $user->setRawAttributes([
            'name'=>$credentials['name'],
            'email'=>$credentials['email'],
            'password'=>Hash::make($credentials['password']),
        ]);
        $user->save();
        Auth::login($user);
        
        return redirect()->route('task.index');
    }
}
