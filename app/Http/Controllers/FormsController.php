<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Mail\OrderMail;

define('MAIL_TO', env('MAIL_RECEIVER', 'tech@clevermarketing-eg.com'));
define('MAIL_FROM', env('MAIL_FROM', 'info@life-golf.com'));


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


    public function customize(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|min:3|email|string',
            'from' => 'required|min:3|string',
            'subject' => 'required|min:3|string',
            'data' => 'required|array|min:1',
            'data.*' => 'required|distinct|string'
        ]);

        dd($data);

        // Mail:to(MAIL_TO)->send(new )
    }


    public function order(Request $request)
    {
        $data = $request->validate([
            'product' => 'required|string|min:3',
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:7',
            'additional_information' => 'string|min:3'
        ]);

        Mail::to(MAIL_TO)->send(new OrderMail($data));

        return response()->json([
            'success' => true,
            'data' => "Thanks for contacting us!"
        ]);
    }
}
