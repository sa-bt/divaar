<?php

namespace Modules\Otp\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Otp\Entities\Otp;

class AuthenticateController extends Controller
{
    public function login()
    {
        SEOMeta::setTitle('Ahmad');
        SEOMeta::setDescription('Seyed ahmad bakhshian');
        return view('otp::login');
    }

    public function requestOtp(Request $request)
    {
        //Receive a phone number
        $phoneNumber = $request->input('phone_number');

        //Create an otp code
        Otp::query()->create([
            "phone_number" => $phoneNumber,
            "code" => random_int(1000000, 9999999)
        ]);

        //Redirect to confirm route
        return true;
    }
}
