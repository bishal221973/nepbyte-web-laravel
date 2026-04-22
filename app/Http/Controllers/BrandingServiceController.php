<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandingServiceController extends Controller
{
    public function index(){
        return view('admin/brands/service');
    }
}
