<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function welcome(){

        return view ('welcome');
    }

    function blog(){

        return view ('blog');
    }

    function login(){

        return view ('backend.auth.login');
    }
}
