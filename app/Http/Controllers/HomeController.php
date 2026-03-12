<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::all()->sortBy('name');

        $handleidingen = DB::table('manuals')
            ->join('brands', 'manuals.brand_id', '=', 'brands.id')
            ->select('brands.name as brand_name', 'manuals.name as manual_name', 'manuals.visited')
            ->orderBy('manuals.visited', 'desc')
            ->limit(10)
            ->get();

        $name = 'Alaa Aldeen';
        $age = 20;
        $array = ['een', 'twee', 'drie'];

        return view('pages.homepage', compact('brands', 'handleidingen', 'name', 'age', 'array'));
    }
}
