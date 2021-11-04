<?php

namespace App\Http\Controllers;

use App\Mail\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public static function sendEmail($email){
        $details = [

            'title'=>'Mail from GUN',
        ];
        Mail::to($email)->send(new register($details));
       
    }
}
