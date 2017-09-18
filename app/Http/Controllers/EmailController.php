<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        Mail::to(env('EMAIL_ADDRESS'))->send(new ContactMail($request->all()));
        return back();
    }
}
