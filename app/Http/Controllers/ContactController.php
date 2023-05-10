<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailRealVilla;


class ContactController extends Controller
{
    //

    public function store(Request $request)
    {


        Contact::create([

            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->phone,
            'sujet' => $request->sujet,
            'message' => $request->message

        ]);



        $mailData = [
            'email' => $request->email,
            'sujet' => $request->sujet,
            'message' => $request->message,
            'phone' => $request->phone,
            'name' => $request->name
        ];



        Mail::to('mouhssinetchoubi@gmail.com')->send(new MailRealVilla($mailData));

        //dd("Email is sent successfully.");

        return  back()->with('success', 'Email a envoyé');
    }
}
