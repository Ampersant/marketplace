<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $propMessage = "Prop message out here";
        return view('welcome', compact('propMessage'));
    }
}
