<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\blog;
use App\Models\brands;
use App\Models\offer;
use App\Models\partner;
use App\Models\service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allDataIndex()
    {
        $services = service::paginate(3);
        $blogs = blog::paginate(3);
        $aboutUsData = aboutUs::paginate(1);
        $offers = offer::paginate(5);
        $brands = brands::paginate(3);
        $partners = partner::all();

        return view('index', compact('services', 'blogs', 'aboutUsData', 'offers', 'brands', 'partners'));
    }
}
