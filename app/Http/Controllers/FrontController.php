<?php

namespace App\Http\Controllers;

use App\Models\BrandCategory;
use App\Models\BrandingService;
use App\Models\BrandPortfolio;
use App\Models\Brands;
use App\Models\ContentCategory;
use App\Models\ContentImage;
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
        $brandPortfolios = BrandPortfolio::with('category')->where('status', true)->latest()->get();
        $brandCategories = BrandCategory::where('status', true)->latest()->get();
        return view('front.brand', [
            'brandServices' => $brandServices,
            'brandPortfolios' => $brandPortfolios,
            'brandCategories' => $brandCategories
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
        $contentCategories = ContentCategory::orderBy('position', 'asc')->where('status', true)->get();
        $brands = Brands::latest()->get();
        return view('front.production', [
            'contentCategories' => $contentCategories,
            'brands' => $brands
        ]);
    }
    public function productionShow(ContentCategory $contentCategory)
    {
        return view('front.productionShow', [
            'contentCategory' => $contentCategory->load('contentImages')
        ]);
    }

    public function team()
    {
        return view('front.team');
    }
}
