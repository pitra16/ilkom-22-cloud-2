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
use Illuminate\Validation\ValidationException;


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

    public function actionsignup(Request $request)
    {
        try {
            $validated = $request->validate([
                'fullname' => ['required', 'string', 'max:255'], // Added fullname validation
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'min:8', 'confirmed'], // Added min length and confirmed for cpassword
            ]);

            User::create([
                'name' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json(['success' => true, 'message' => 'Registrasi berhasil! Silakan login.']);

        } catch (ValidationException $e) {
            // Handle validation errors specifically
            return response()->json([
                'success' => false,
                'message' => 'Registrasi gagal. Harap periksa kembali isian Anda.',
                'errors' => $e->errors()
            ], 422); // Use 422 Unprocessable Entity for validation errors
        } catch (\Exception $e) {
            // Handle any other general exceptions
            \Log::error('Registration error: ' . $e->getMessage()); // Log the error for debugging
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan server saat registrasi. Silakan coba lagi nanti.'], 500);
        }
    }
}
