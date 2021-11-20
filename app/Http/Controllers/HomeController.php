<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function Index()
    {
        return view("home/index");
    }

    public function test($id)
    {
        echo "İd: " , $id;
    }
}
