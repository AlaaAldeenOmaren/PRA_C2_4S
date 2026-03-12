<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;

class BrandController extends Controller
{
    public function show($brand_id, $brand_slug)
    {

        $brand = Brand::findOrFail($brand_id);
        $manuals = Manual::where('brand_id', $brand_id)->get();
        $popular_manuals = Manual::where('brand_id', $brand_id)
        ->orderBy('visited', 'desc')
        ->limit(5)
        ->get();

        return view('pages/manual_list', [
            "brand" => $brand,
            "manuals" => $manuals,
            "popular_manuals" => $popular_manuals
        ]);

    }
}
