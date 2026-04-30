<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $userServices;
    public function __construct(IUserService $userService)
    {
        $this->userServices = $userService;
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $data = $request->all();
        $result = $this->userServices->login($data);
        if ($result['user'] != null) {
            // cookie(
            //     $result['user'],
            //     120,
            //     '/',
            //     null,
            //     false,
            //     false
            // );
            Auth::login($result['user']);
            // if ($result['user']->role != 'user') {
            // redirect dashboard
            return redirect()->route('order-pengambilan');
            // } else {
            //     // redirect landing page
            //     return redirect()->route('landing-page');
            // }
        } else {
            // return response()->json([
            //     'message' => 'Logout failed',
            // ], 401);
            return redirect()->route('login')->with('error', 'Login failed');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'email'        => 'required|email',
            'mathcaptcha'  => 'required|mathcaptcha',
        ]);

        if ($validator->fails()) {
            app('mathcaptcha')->reset();

            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        app('mathcaptcha')->reset();

        // proses simpan data...
    }

    public function lupaPassword()
    {
        return view('auth.lupa-password');
    }

    public function lupaPasswordProcess(Request $request)
    {
        return view('auth.email-terkirim-sukses');
    }

    public function gantiPassword()
    {
        return view('auth.ganti-password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
