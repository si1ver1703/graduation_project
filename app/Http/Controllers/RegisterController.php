<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{ Auth, Hash };
use App\Models\User;

class RegisterController extends Controller
{
    public function register () {
        return view('register');
    }

    public function register_attempt (Request $request) {
        $validated = $request->validate([
            'email' => 'required|min:4|max:50',
            'password' => 'required|min:4|max:50',
            'password2' => 'required|min:4|max:50',
            'user_name' => 'required|min:2|max:50'
        ]);

        if ( $validated['password'] != $validated['password2'] ) {
            $request->flash();
            return back()->withErrors('Пароли должны совпадать');
        }

        $t_user = User::where('email', $validated['email'])->count();
        if ($t_user > 0) {
            $request->flashExcept('email');
            return back()->withErrors($validated['email'] . ' уже зарегистрирован');
        }

        $user = new User();
        $user->name = $validated['user_name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();

        if( Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']], true) ){
            $request->session()->regenerate();
        }

        return redirect()->route('index');
    }
}
