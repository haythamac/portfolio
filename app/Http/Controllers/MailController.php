<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $name = $request->name;
        $subject = $request->subject;
        $message = $request->message;
        $sender = $request->sender;
        Mail::to('janssen.uy.pbstc@gmail.com')->send(new ContactMe($name, $subject, $message, $sender));
        
        return redirect()->route('home.index');
    }
}