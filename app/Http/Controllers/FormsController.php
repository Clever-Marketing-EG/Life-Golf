<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Mail\OrderMail;
use App\Mail\CustomizeMail;



class FormsController extends Controller
{

    public function contactUs(Request $request): JsonResponse
    {
        $data = $request->validate([
            'email' => 'required|min:3|email|string',
            'body' => 'required|min:3|string',
            'from' => 'required|min:3|string',
            'subject' => 'required|min:3|string',
            'phone' => 'required|numeric|min:7'
        ]);

        Mail::to(MAIL_TO)->send(new ContactEmail($data));

        return response()->json([
            'success' => true,
            'data' => "Thanks for contacting us!"
        ]);
    }


    public function customize(Request $request): JsonResponse
    {
        $data = $request->validate([
            'first_name' => 'required|min:3|string',
            'last_name' => 'required|min:3|string',
            'email' => 'required|email|min:3|string',
            'phone' => 'required|numeric|min:3',
            'cart' => 'required|string|min:3',
            'seats' => 'required|integer|min:2',
            'color' => 'required|string|min:3',
            'speed' => 'required|integer|min:10',
            'type' => 'required|string|min:3'
        ]);


        Mail::to(MAIL_TO)->send(new CustomizeMail($data));

        return response()->json([
            'success' => true,
            'data' => "Thanks you! One of our team will contact you soon!"
        ]);
    }


    public function order(Request $request): JsonResponse
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
            'data' => "Thank You! One of our team will contact you soon!"
        ]);
    }
}
