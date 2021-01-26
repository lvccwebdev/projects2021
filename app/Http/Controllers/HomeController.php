<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Foo';
    }

    public function doubleNumber($number = 0)
    {
        return $number * 2;
    }

    public function greet($name)
    {
        $age = 100;
        // return view('greeting', [
        //     'name' => $name
        // ]);
        return view('greeting', compact('name', 'age'));
    }
}
