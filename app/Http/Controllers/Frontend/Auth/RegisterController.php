<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CustomerStoreRequest;

class RegisterController extends Controller
{
    public function registerPage()
    {
        return view('frontend.pages.auth.register');
    }

    public function loginPage()
    {
        return view('frontend.pages.auth.login');
    }

    public function registerStore(CustomerStoreRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // make a credentials array
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // login attempt if success then redirect home
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            //save session
            $value = User::where('email', $request->email)->first();
            Session::put('user',[
                'email' => $value->email,
                'balance' => $value->balance,
            ]);

            return redirect()->route('customer.dashboard');
        }


    }
    public function loginStore(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:4'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // login attempt if success then redirect dashboard
        if(Auth::attempt($credentials, $request->filled('remember'))){
            $request->session()->regenerate();
            //save session
            $value = User::where('email', $request->email)->first();
            Session::put('user',[
                'email' => $request->email,
                'balance' => $value->balance,
            ]);
            return redirect()->intended('customer/dashboard');
        }

        // return error message
        return back()->withErrors([
            'email' => 'Wrong Credentials found!'
        ])->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect()->route('login.page');
    }

}
