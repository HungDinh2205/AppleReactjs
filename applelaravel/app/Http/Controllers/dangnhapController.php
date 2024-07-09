<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class dangnhapController extends Controller
{

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password  = $request->input('password');
        // Tìm người dùng trong cơ sở dữ liệu dựa trên tên người dùng
        $user = User::where('username', $username)->first();

        if ($user && $user->password === $password) {
            
            Session::put('role', $user->role);
            Session::put('Keyid', $user->Keyid);
            if ($user->role === 'admin') {
                
                return redirect()->intended('/admin');
            } else {
              
                return redirect()->intended('/apple');
            }
        }

        return back()->withErrors([
            '/' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }

}
