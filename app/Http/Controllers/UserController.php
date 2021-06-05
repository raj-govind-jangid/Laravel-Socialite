<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->pwd])){
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->pwd);
        $user->save();
        return redirect('/');
    }

    public function logingoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function logingoogleredirect(){
        $user = Socialite::driver('google')->user();
        $user = User::firstOrCreate([
            'email' => $user->email
        ],[
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make(Str::random(24)),
        ]);

        Auth::login($user,true);
        return redirect('/');
    }

    public function logingithub(){
        return Socialite::driver('github')->redirect();
    }

    public function logingithubredirect(){
        $user = Socialite::driver('github')->user();
        $user = User::firstOrCreate([
            'email' => $user->email
        ],[
            'name' => $user->nickname,
            'email' => $user->email,
            'password' => Hash::make(Str::random(24)),
        ]);

        Auth::login($user,true);
        return redirect('/');
    }

    public function loginfacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function loginfacebookredirect(){
        $user = Socialite::driver('facebook')->user();
        $user = User::firstOrCreate([
            'email' => $user->email
        ],[
            'name' => $user->nickname,
            'email' => $user->email,
            'password' => Hash::make(Str::random(24)),
        ]);

        Auth::login($user,true);
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
