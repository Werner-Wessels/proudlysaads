<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailSellerController extends Controller
{
    public function email(Request $request, $email)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required'
        ]);

        Mail::send('mail.newMessage', array(
            'name' => $request->get('name'),
            'mail' => $request->get('email'),
            'contactNumber' => $request->get('number'),
            'messages' => $request->get('message'),
        ), function($message) use ($email, $request){
            $message->from($request->email);
            $message->to($email)->subject('Someone on Proudly SA Ads would like to get in touch.');
        });

        return back()->with('success', 'We have received your message and we have sent it to the seller.');
    }
}
