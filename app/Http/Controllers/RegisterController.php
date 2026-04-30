<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\IUserService;
class RegisterController extends Controller
{
    protected $userServices;
    public function __construct(IUserService $userService) {
        $this->userServices = $userService;
    }
    //
    public function register(Request $request){
        $data = $request->all();
        $result = $this->userServices->register($data);
        if($result['user'] != null){
            return response()->json([
                'message' => 'Register success',
                'user' => $result['user'],
            ], 200);
        }else{
            return response()->json([
                'message' => 'Register failed',
            ], 401);
        }
    }
}
