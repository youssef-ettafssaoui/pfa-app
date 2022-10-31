<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }

    public function send_mail(Request $request)
    {
        $this->validate($request, [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255']
        ]);

        $contact = [
            'fullname' => $request['fullname'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'subject' => $request['subject'],
            'message' => $request['message'],
            'screenshot' => $request->file('screenshot')->store('contact', 'public')
        ];

        Mail::to('receipent@domain.com')->send(new ContactFormMail($contact));

        return redirect()->route('contact')->with('status', ' Your Mail has been received');
    }
}