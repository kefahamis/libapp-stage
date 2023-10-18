<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function learn(){
        return view('learn');
    }
    public function download(){
        return view('download');
    }
}
