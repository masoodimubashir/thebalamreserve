<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(Request $request)
    {



        $dataValidated = $request->validate([
            'name' => 'required|string',
            'email' => 'email|required|string',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);


        Mail::to('info@thebalamreserve.com')->send(new ContactUs($dataValidated));

        return redirect()->back();

    }
}
