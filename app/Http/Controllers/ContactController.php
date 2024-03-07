<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function index()
    {
        return view("contact");
    }
    public function send(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'object' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        Mail::to('getswail@gmail.com')->send(new ContactFormMail($data));
        return back()->with('success', 'votre message a été envoyé avec succès!');
    }
}
