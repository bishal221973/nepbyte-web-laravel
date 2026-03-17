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

    public function printDesign()
    {
        return view(view: 'front.printDesign');
    }

    public function marketing()
    {
        return view(view: 'front.marketing');
    }
}
