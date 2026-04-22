<?php

namespace App\Http\Controllers;

use App\Models\Brands;
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
        $brands=Brands::latest()->get();
        return view('front.marketing',[
            'brands'=>$brands
        ]);
    }

    public function production(){
        return view('front.production');
    }
    public function productionShow(){
        return view('front.productionShow');
    }

     public function team(){
        return view('front.team');
    }
}
