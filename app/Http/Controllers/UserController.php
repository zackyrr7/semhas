<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\all;

class UserController extends Controller
{


    public function indexUser()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function detailUser($id)
    {
        $user = User::find($id);
        return view('user.detail_user',compact('user'));
    }
    public function formUbahBAckend($id)
    {
        $user = User::find($id);
        return view('user.formubah_user',compact('user'));
    }
    public function ubahBackend(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email= $request->email;
        $user->save();
        return redirect()->route('admin.user.detail',['id'=>$user->id]);
    }

    public function hapusBackend($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.dashboard');
    }
    
    public function formTambahBackend()
    {
        return view('user.form_tambah_user');
        
    }

    public function tambahBackend(Request $request)
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

            return redirect()->route('admin.dashboard');
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

    public function user()
    {
        return User::all();
    }
    

}

