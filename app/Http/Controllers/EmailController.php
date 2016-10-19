<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use Mail;
use App\Http\Requests\ContactFormRequest;

class EmailController extends Controller
{
	public function send(ContactFormRequest $request)
	{
        $content = $request->input('message');
    	$subject = $request->input('subject');
        $email = $request->input('email');
        $name = $request->input('name');

        Mail::send('send', ['subject' => $subject, 'content' => $content], function ($message)
        {
            $message->from('hackeduser@mail.com', 'Harry Potter')->subject('Hello there!');
            // $message->from($email, $name)->subject($subject);
			$message->to('hackeduser@hackermail.com', 'zyten');  
        });
        
        // return \Redirect::route('contact')
        return Redirect::to('contact')
          ->with('message', 'Thanks for contacting us!');
    }      
}
