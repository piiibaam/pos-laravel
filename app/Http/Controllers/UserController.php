<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'Administrator'
            ],
            [
                'id' => 2,
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'role' => 'Staff'
            ],
            [
                'id' => 3,
                'name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'role' => 'Staff'
            ],
            [
                'id' => 4,
                'name' => 'Pedro Reyes',
                'email' => 'pedro@gmail.com',
                'role' => 'Manager'
            ],
            [
                'id' => 5,
                'name' => 'Ana Garcia',
                'email' => 'ana@gmail.com',
                'role' => 'Staff'
            ]
        ];

        return view('users', compact('users'));
    }
}