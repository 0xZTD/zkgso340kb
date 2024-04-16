<?php

namespace Controllers;

use BaseController;
use Models\User;

class UserController extends BaseController
{
    public function index()
    {
        $users = [
            new User('Test', 'email@example.com', '123456'),
            new User('Test', 'email@example.com', '123456'),
            new User('Test', 'email@example.com', '123456'),
            new User('Test', 'email@example.com', '123456'),
            new User('Test', 'email@example.com', '123456'),
            new User('Test', 'email@example.com', '123456'),
            new User('Test', 'email@example.com', '123456'),
            new User('Test', 'email@example.com', '123456'),
            new User('Test', 'email@example.com', '123456'),
        ];
        $this->display('user/index', ['users' => $users]);
    }
}