<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function doubleNumber($number = 0)
    {
        return $number * 2;
    }

    public function greet($name)
    {
        $age = 100;
        // return view('greeting', [
        //     'name' => $name,
        //     'age' => $age
        // ]);
        return view('greeting', compact('name', 'age'));
    }
}
