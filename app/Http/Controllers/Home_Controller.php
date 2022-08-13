<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_Controller extends Controller
{
    public function Home() {
        return view('welcome');
    }


}