<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Exception;


class ApiController extends Controller
{
    public function show(){
        $users=  User::all();
        return response()->json([
            'Total Users' => count($users),
            'data' => $users,
            'status' => 'true'
        ]);
    }
   
    public function login(Request $request): JsonResponse
    {
        try {
            // Validate the request
            $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required|string|max:255'
            ]);
            
            // Find user by email
            $user = User::where('email', $request->email)->first();
            
            // If the user does not exist or the password doesn't match
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'message' => 'Invalid email or password',
                ], 400);
            }
    
            // Create a token for the user
            $token = $user->createToken($user->name . 'Auth.Token')->plainTextToken;
    
            // Return the success response
            return response()->json([
                'message' => 'Login successful',
                'token_type' => 'Bearer',
                'token' => $token,
                'user' => $user
            ], 200);
        } catch (Exception $e) {
            // Handle unexpected errors
            return response()->json([
                'message' => 'An error occurred during login',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function register(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|unique:users,email|max:255',
                'password' => 'required|string|max:255'
            ]);

            // Create a new user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Create a token for the user
            $token = $user->createToken($user->name . 'Auth.Token')->plainTextToken;

            // Return a success response
            return response()->json([
                'message' => 'Registration successful',
                'token_type' => 'Bearer',
                'token' => $token
            ], 200);
        } catch (Exception $e) {
            // Handle unexpected errors
            return response()->json([
                'message' => 'An error occurred during registration',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function update( Request $request ,$id)
    {
        $user = User::find($id);
        if ($user == null) {
            return response()->json([
            'message' =>' user not found',
           'status' => false
            ],200);
        }
           $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
    'email' => 'required|email',
           ]);
            if($validator->fails()){
                return response()->json([
               
                'message' => 'plz check the error',
                'error ' =>$validator->error,
                'status' => false
                ],200);
            }

            $user->name = $request->name;
            $user->email =$request->email;
            $user->save();
 return response()->json([
    'message' => 'add successfully',
    'data' => $user,
    'status' => true
 ],200);
        }
    }

