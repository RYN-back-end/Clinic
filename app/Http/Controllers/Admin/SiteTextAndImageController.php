<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteTextAndImage;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;

class SiteTextAndImageController extends Controller
{
    use UploadFiles;

    public function update(request $request){
        $data = $request->validate([
            'qualification_desc'   =>'required|max:255',
            'qualification_image'  =>'nullable'
        ]);
        if($request->has('qualification_image'))
            $data['qualification_image'] = $this->saveFile($request->qualification_image,'assets/uploads/sections_images','yes',70);

        SiteTextAndImage::first()->update($data);
        toastr()->success('Section Updated Successfully');
        return redirect()->back();
    }
}
