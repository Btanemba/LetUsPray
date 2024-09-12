<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function show()
    {
        return view("contact");
    }

    public function send()
    {
        //Validate the input
        $data = request()->validate([
            'fname'=>'required|min:3',
            'lname'=>'required|min:3',
            'subject' => 'required|string|max:255',
            'email'=>'required|email',
            'message'=>'required|min:5',
        ]);

        //The email address to receive.
        Mail::to('anembaben@gmail.com')->send(new ContactUs($data));

        // dd('sent');

        //redirect back to the contact page
        return redirect()->back()->with('success','Message Sent Successfully');



    }
}
