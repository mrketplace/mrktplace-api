<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Register new user in the storage
     ** request: POST
     ** route: /register
     */
    public function register(Request $request)
    {
        try {
            // Catch already existing emails
            if (User::where(['email' => $request->email])->first()) {
                return response([
                    'state' => 'EMAIL_EXISTS',
                    'msg' => "L'adresse email saisie existe déjà. Veuillez en choisir une autre.",
                ]);
            }
            // Data validation
            $data = $request->validate([
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'tel' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed'
            ]);
            // Password hashing
            $data['password'] = bcrypt($data['password']);
            // User registration
            $user = User::create($data);
            $token = $user->createToken('API Token')->accessToken;
            return response([
                'state' => 'SUCCESS',
                'user' => $user,
                'token' => $token
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }

    /**
     * Handle user login request
     ** request: POST
     ** route: /login
     */
    public function login(Request $request)
    {
        try {
            // Data validation
            $data = $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);
            // Case: Authentication failed
            if (!auth()->attempt($data)) {
                return response([
                    'state' => 'AUTH_FAILED',
                    'msg' => 'Identifiants incorrects. Veuillez réessayer.',
                ]);
            }
            // Case: Authentication successful
            $user = auth()->user();
            $token = $user->createToken('API Token')->accessToken;
            // Note: Old tokens isn't deleted when a new login request is handled
            // Is it an issue ?
            return response([
                'state' => 'SUCCESS',
                'user' => $user,
                'token' => $token,
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }
}
