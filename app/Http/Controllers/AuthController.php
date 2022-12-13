<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use factory;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    // public function login(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|numeric',
    //         'password' => 'required|string|min:6'
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(), 422);
    //     }
    //     if (!$token = auth()->attempt($validator->validate())) {
    //         return response()->json(['error' => 'Unauthorized'], 401);
    //     }
    //     return $this->CreateNewToken($token);
    // }
    // public function CreateNewToken($token)
    // {
    //     return response()->json([
    //         'acces_token' => $token,
    //         'token_type' => 'bearer',
    //         //error tapi jalan
    //         'expires_in' => auth('api')->factory()->getTTL() * 60,
    //         'user' => auth()->user()
    //     ]);
    // }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        $token = auth()->guard('api')->attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = auth()->guard('api')->user();
        return response()->json(
            [
                'status' => 'success',
                'token' => $token,
                'type' => 'bearer',
                'id' => auth()->guard('api')->user()->id,
                'nama' => auth()->guard('api')->user()->name,
                'hp' => auth()->guard('api')->user()->email,

            ]
        );
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|max:255|unique:users',
                'password' => 'required|string|min:6',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);


            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',


            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "something went really wrong"
            ], 500);
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => auth()->guard('api')->user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
    public function profile()
    {
        return response()->json(auth()->user());
    }
}
