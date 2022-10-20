<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'msg'=> $request->msg
        ];
//mailing to the admin
        Mail::to('mbabaziheavens123@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully!');
    }
}
