<?php

namespace App\Services\Implementations;

use App\Services\Interfaces\IUserService;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService implements IUserService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function register(array $data){

    }

    public function login(array $data){
        $user = User::where('email', $data['email'])->first();
        if (!$user || !Hash::check($data['password'], $user->password)) {
            return null;
        }
        $token = $user->createToken('token')->plainTextToken;
        return [
            'user' => $user,
            'token' => $token,
        ];
    }
    public function logout(){
        
    }
    public function getCurrentUser(){
        
    }
    public function update(array $data){
        
    }
    public function delete(){
        
    }
    
}
