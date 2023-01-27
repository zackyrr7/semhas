<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

use Illuminate\Support\Facades\Hash;


class AdminAuthController extends Controller
{
    public function getLogin(){
        return view('admin.login');
    }
 
    public function postLogin(Request $request)
    {
        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
 
        // if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
        //     $user = auth()->guard('admin')->user();
        //     if($user->is_admin == 1){
        //         return redirect()->route('adminDashboard')->with('success','You are Logged in sucessfully.');
        //     }
        // }else {
        //     // return back()->with('error','Whoops! invalid email and password.');
        //     return redirect()->route('admin.dashboard')->with('success','You are Logged in sucessfully.');
        // }


        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
 
        // if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
        //     $user = auth()->guard('admin')->user();
        //     if($user->is_admin == 1){
        //         return redirect()->route('admin.dashboard')->with('success','You are Logged in sucessfully.');
        //     }
        // }else {
        //     return back()->with('error','Whoops! invalid email and password.');
        // }

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = auth()->guard('admin')->user();

            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withError('Credentials doesn\'t match.');
        }


        // $email = $request->email;
        // $password = $request->password;

        

        // $data = Admin::where('email',$email)->first();
        // if($data){ //apakah email tersebut ada atau tidak
        //     if(Hash::check($password,$data->password)){
        //         Session::put('name',$data->name);
        //         Session::put('email',$data->email);
        //         Session::put('login',TRUE);
        //         return redirect('admin.dashboard');
        //     }
        //     else{
        //         return redirect('admin.login')->with('alert','Password atau Email, Salah !');
        //     }
        // }
       
    }
    public function getRegister(){
        return view('admin.register');
    }
 
    public function adminLogout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('adminLogin'));
    }
    // public function destroy(Request $request)
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }
}
