<?php

namespace App\Http\Controllers;

use App\Models\BrandingService;
use App\Models\BrandPortfolio;
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
        $brandServices = BrandingService::where('is_parent', true)->where('status', true)->orderBy('position', 'asc')->get();
        $brandPortfolios = BrandPortfolio::with('service')->where('status', true)->latest()->get();
        return view('front.brand', [
            'brandServices' => $brandServices,
            'brandPortfolios'=>$brandPortfolios
        ]);
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
        $brands = Brands::latest()->get();
        return view('front.marketing', [
            'brands' => $brands
        ]);
    }

    public function production()
    {
        return view('front.production');
    }
    public function productionShow()
    {
        return view('front.productionShow');
    }

    public function team()
    {
        return view('front.team');
    }
}
