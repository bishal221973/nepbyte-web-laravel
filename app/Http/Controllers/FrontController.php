<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function strategy()
    {
        return view(view: 'front.strategy');
    }

    public function development()
    {
        return view(view: 'front.development');
    }

    public function brand()
    {
        return view(view: 'front.brand');
    }

    public function ai()
    {
        return view(view: 'front.ai');
    }
}
