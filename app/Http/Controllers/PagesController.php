<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('patients.register');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function list()
    {
        return view('list');
    }

      public function turn()
    {
        return view('listTurns');
    }
}
