<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function showloginform()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ]);
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return response()->json([
                'success' => true,
                'redirect_url' => url('/backend/dashboard')
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Session::flash('logout_message', 'Successfully Logout');

        return response()->json(['message' => 'Successfully Logout']);
    }

    public function signup(){
        return view('auth.login');
    }

    public function actionsignup(Request $request){
        
        $validated = $request->validate([
            'email'=>['required','string','email','max:255','unique:users'],
            'password'=>['required','confirmed']
        ]);

        $user= user::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
