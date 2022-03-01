<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {

        return view('categories.index');
    }
    public function show($id)
    {
        return view('categories.show');
    }

}
