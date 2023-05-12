<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\User;
use App\Models\Agency;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


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
            // return redirect()->intended('/admin/dashboard')->with([
            //     'AnnonceSelect' => $AnnonceSelect,
            //     'user' => $user,
            //     'agency' => $agency
            // ]);

            return view('AdminDachbouard', compact('AnnonceSelect', 'user', 'agency'));
        }

        return back()->withInput($request->only('email', 'remember'));
    }


    public function Logout()
    {
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
