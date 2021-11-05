<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadImgDrive extends Controller
{
    //
    //$requesst->img
    public function save($img)
    {

        try {
            //code...
            $GoogleDriveStorage = Storage::disk("google");

            $newImageName = 'TVVN'.rand(10,100) . uniqid() . '.' . $img->extension();
            $GoogleDriveStorage->put($newImageName, file_get_contents($img->getRealPath()));

            $fileinfo = collect($GoogleDriveStorage->listContents())
                ->where('type', 'file')
                ->where('name', $newImageName)
                ->first();
                $content=$fileinfo['path'];

                return   'https://docs.google.com/uc?id=' .$content  ;

        } catch (\Throwable $th) {
            //throw $th;
           return 'NULL';
        }
    }
}
