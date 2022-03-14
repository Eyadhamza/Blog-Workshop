<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Kareem';
        return view('welcome',[
            'name' => $name
        ]);
    }
}
