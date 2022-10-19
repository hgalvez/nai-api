<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string'
        ]);
            
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' =>bcrypt($fields['password'])
        ]);
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response =[
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();
        return [
            'message' => 'Logged out'
        ];
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
            //check user
        $user = User::where('email', $fields['email'])->first();        
        if (!$user || !Hash::check($fields['password'], $user->password))
            {
                return response([
                'message' => 'Invalid credentials'
                ], 401);
            }

        $token = $user->createToken('myapptoken')->plainTextToken;
        $response =[
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }


}
