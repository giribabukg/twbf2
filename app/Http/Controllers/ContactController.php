<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactemail(Request $aReq)
    {
        $message = $aReq -> message;
        $adminname = 'Admin';
        $mailfrom = 'dikshainfotech16@gmail.com';
        Mail::to($aReq -> email)->send(new Contact($message,$adminname,$mailfrom));
        return view('fronthome');
    }
}
