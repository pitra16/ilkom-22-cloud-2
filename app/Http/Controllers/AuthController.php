<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showloginform()
    {
        return view('auth.login');
    }

    public function loginSiluman(Request $request)
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
           $users = User::all();
           return response()->json([
               'success' => true,
               'message' => $users
           ]);
       } else {
           return response()->json([
               'success' => false,
               'message' => 'Invalid email or password.',
           ]);
       }
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

    public function vulnerableLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $user = DB::select($query);

        return response()->json([
            'query' => $query,
            'result' => $user,
        ]);
    }
}
