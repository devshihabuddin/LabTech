<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\CEOtalk;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $abouts = About::all();
        $ceotalks = CEOtalk::all();
        return view('main-frontend.pages.company',compact('abouts','ceotalks'));
    }
}
