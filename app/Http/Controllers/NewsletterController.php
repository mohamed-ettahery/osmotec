<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    function store(Request $request)
    {
        $request->validate(["email" => "required|email"]);
        Newsletter::create($request->all());
        return redirect()->back()->with("success", "Merci de votre abonnement");
    }
}
