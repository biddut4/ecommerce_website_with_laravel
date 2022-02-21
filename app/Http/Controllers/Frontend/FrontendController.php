<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class FrontendController extends Controller
{

    public function index(){
        $datas = Banner::where('status', 1)->get();
        return view('frontend.index', compact('datas'));
    }
}
