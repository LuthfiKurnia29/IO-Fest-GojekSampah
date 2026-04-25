<?php
namespace App\Services\Interfaces;

interface IUserService{
    public function register(array $data);
    public function login(array $data);
    public function logout();
    public function getCurrentUser();
    public function update(array $data);
    public function delete();
}