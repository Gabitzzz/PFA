<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        ];
        

        Mail::to('laraveltest59@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Mesajul dvs. a fost trimis!');
    }
}
