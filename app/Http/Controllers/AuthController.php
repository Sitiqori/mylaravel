<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
 
            // return redirect()->intended('dashboard');
            if(Auth::user()->status != 'active'){
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet');
                return redirect('/login');
            }

            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('dashboard');
            };

            if(Auth::user()->role_id == 2){
                return redirect('profile');
            };
            // return redirect();
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'Login Invalid');
        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
