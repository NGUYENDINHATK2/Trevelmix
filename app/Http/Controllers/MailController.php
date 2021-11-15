<?php

namespace App\Http\Controllers;

use App\Mail\booktourmailm;
use App\Mail\register;
use App\Models\booktour;
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
    public static function Booktourmail($email,$id_book_tour,$name_tour){
        $details = [

            'title'=>'Mail from Travelvn',
            'body'=>$id_book_tour,
            'description'=>$name_tour

        ];
        Mail::to($email)->send(new booktourmailm($details));
       
    }
}
