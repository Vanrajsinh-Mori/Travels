<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\register;
use App\Models\User;
use App\Models\citys;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class logincontroller extends Controller
{

    public function registerview()
    {
        $citys = Citys::all();
        $data = compact('citys');
        return view('register')->with($data);
    }

    public function register(Request $request)
    { 
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:users', 
        'phonenumber' => 'required',
        'gender' => 'required',
        'password' => 'required',
        'cpassword' => 'required|same:password',
    ]);

    if ($validator->fails()) {
        return redirect('register')
            ->withErrors($validator)
            ->withInput();
    }
        $register = new User();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->mobile = $request->phonenumber;
        $register->gender = $request->gender;
        $register->password = Hash::make($request->password);
        $register->save();

        session()->flash('register', 'register successfull');
        return redirect('login');
    }
    public function loginview()
    {
        $citys = Citys::all();
        $data = compact('citys');
        return view('login')->with($data);
    }
    public function login(request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email',
            'password' => 'required'
        ]); 
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = User::find(Auth::user()->id);
            $alert = ['success' => 'Your Successfully Logedin'];
        $request->session()->flash('alert', $alert);
            // session()->flash('login', 'login successfull');
            return redirect('/');
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors(['email' => 'Invalid Email or Password']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $alert = ['success' => 'Your Successfully Logedout'];
        $request->session()->flash('alert', $alert);
        return redirect('/');
    }

}
