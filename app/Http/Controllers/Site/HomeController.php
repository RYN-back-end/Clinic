<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use App\Models\Qualification;
use App\Models\Service;
use App\Models\SiteTextAndImage;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use ResponseTrait;
    public function index(){
        $services = Service::latest()->limit(6)->get();
        $qualifications = Qualification::latest()->limit(6)->get();
        $siteInfo = SiteTextAndImage::first();
        return view('Site/index',compact('services','qualifications','siteInfo'));
    }



    public function contactPage(){
        return view('Site/contact');
    }


    public function aboutPage(){
        return view('Site/about');
    }

    public function postContactUs(ContactUsRequest $request){
        $validatedData = $request->validated();
        ContactUs::create($validatedData);
        return $this->addResponse();
    }
}
