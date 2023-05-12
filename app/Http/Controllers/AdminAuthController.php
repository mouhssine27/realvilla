<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\User;
use App\Models\Agency;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminAuthController extends Controller
{


    public function showAdminLoginForm()
    {
        return view('auth.loginadmin', ['url' => route('admin.login-view'), 'title' => 'Admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        $AnnonceSelect = Annonce::select()->get();
        $user  = User::select()->get();
        $agency  = Agency::select()->get();


        if (Auth::guard('admin')->attempt($request->only(['email', 'password']), $request->get('remember'))) {

            return view('AdminDachbouard', compact('AnnonceSelect', 'user', 'agency'));
        }

        return back()->withInput($request->only('email', 'remember'));
    }


    public function Logout()
    {
        Session::flush();



        Auth::guard('admin')->logout();

        return view('auth.loginadmin');
    }

    public function dashboard()
    {

        $AnnonceSelect = Annonce::select()->get();
        $user  = User::select()->get();
        $agency  = Agency::select()->get();

        return view('AdminDachbouard', compact('AnnonceSelect', 'user', 'agency'));
    }
}
