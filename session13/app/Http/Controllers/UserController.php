<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function home(){
        return view('home');
    }

    public function viewlogin(){
        return view('login');
    }


    public function viewregister(){
        return view('register');
    }


    public function viewchangepassword(){
        return view('changepassword');
    }

    # ===============

    public function login(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
            $remember = false;
        }
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);

    }

    public function register(Request $r){
        $validator = Validator::make($r->all(), [
            'email' => 'required|email|unique:users,email',
            'nama' => 'required',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:password',
            'cover' => 'required|file'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $user = new User();
        $user->name = $r->nama;
        $user->email = $r->email;
        $user->password = bcrypt($r->password);
        $file = $r->file('cover');
        $imageName = time().".".$file->getClientOriginalExtension();
        Storage::putFileAs('public/images',$file, $imageName);
        $user->cover = 'images/'.$imageName;
        $user->save();

        return redirect('home');
    }


    public function logout(Request $r){
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();
        return redirect('home');
    }


    public function changepassword(Request $r){

        $validator = Validator::make($r->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
            'new_password_confirm' => 'required|same:new_password',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        if (Hash::check($r->old_password, Auth::User()->password)) {
        }else{
            return back()->withErrors([
                'old_password' => 'The provided credentials do not match our records.'
            ]);
        }

        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($r->password);
        $user->save();

        return redirect('/home');
    }
}
