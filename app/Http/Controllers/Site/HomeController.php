<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $services = Service::latest()->get();
        return view('Site/index',compact('services'));
    }
}
