<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function strategy(){
        return view(view: 'front.strategy');
    }
}
