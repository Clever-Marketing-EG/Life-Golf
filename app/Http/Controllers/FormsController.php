<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

define('MAIL_TO', env('MAIL_RECEIVER', 'tech@clevermarketing-eg.com'));


class FormsController extends Controller
{

    public function contactUs(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|min:3|email|string',
            'body' => 'required|min:3|string',
            'from' => 'required|min:3|string',
            'subject' => 'required|min:3|string'
        ]);

        Mail::to(MAIL_TO)->send(new ContactEmail($data));

        return response()->json([
            'success' => true,
            'data' => "Thanks for contacting us!"
        ]);
    }
}
