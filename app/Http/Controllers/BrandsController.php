<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands=Brands::latest()->get();
        return view('admin.brands',[
            'brands'=>$brands
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'logo' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('brands', 'public');
        }
        Brands::create($data);

        return redirect()->back()->with('success', "New leading brand have been created.");
    }
}
