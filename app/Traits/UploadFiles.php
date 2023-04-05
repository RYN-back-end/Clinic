<?php
//
//namespace App\Traits;
//
//use Buglinjo\LaravelWebp\Webp;
//use Illuminate\Support\Facades\File;
//
//Trait  UploadFiles
//{
//    function saveFile($file,$folder,$compress = 'yes',$quality_ratio = 70){
//
//        // to save photos
//        if ($compress == 'yes' || $compress == null){
//            $webp = Webp::make($file);
//            $file_name = $folder.'/'.rand('1','9999').time().'.png';
//            File::ensureDirectoryExists($folder);
//            $webp->save(public_path($file_name),$quality_ratio);
//        }
//
//        // to save other files
//        else{
//            $file_extension = $file -> getClientOriginalExtension();
//            $file_name =  $folder.'/'.rand('1','9999').time().'.'.$file_extension;
//            $file -> move($folder,$file_name);
//        }
//        return $folder.'/'.$file_name;
//    }
//}
