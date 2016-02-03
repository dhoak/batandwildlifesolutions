<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Input;

class ContactController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function send(Request $request)
    {
        $body = "New Online Request" . "\n\n";
        $body .= "Name: " . $request->input('name') . "\n";
        $body .= "Phone: " . $request->input('phone') . "\n";
        $body .= "Email: " . $request->input('email') . "\n\n";
        $body .= "Message: \n" . $request->input('message') . "\n";

        Mail::raw($body, function($message)
        {
            $message->to('info@batandwildlifesolutions.com', 'Bat and Wildlife Info');
            $message->subject('New Online Request');
        });

        return $body;
    }
}
