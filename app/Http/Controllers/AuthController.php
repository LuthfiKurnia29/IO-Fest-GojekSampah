<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IUserService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $userServices;
    public function __construct(IUserService $userService) {
        $this->userServices = $userService;
    }
    //

    public function login(){
        return view('auth.login');
    }
    public function loginProcess(Request $request){
        $data = $request->all();
        $result = $this->userServices->login($data);
        if($result['user'] != null && $result['token'] != null){
            return response()->json([
                'message' => 'Login success',
                'user' => $result['user'],
                'token' => $result['token'],
            ], 200);
        }else{
            return response()->json([
                'message' => 'Login failed',
            ], 401);
        }
    }
}
