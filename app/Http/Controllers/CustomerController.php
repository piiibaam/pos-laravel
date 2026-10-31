<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'id' => 2,
                'name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'id' => 3,
                'name' => 'Pedro Reyes',
                'email' => 'pedro@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'id' => 4,
                'name' => 'Ana Garcia',
                'email' => 'ana@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'id' => 5,
                'name' => 'Carlos Mendoza',
                'email' => 'carlos@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', compact('customers'));
    }
}