<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Message;

class FormController extends Controller
{
    public function message(Request $request){

    	$this->validate($request, [
    		'email' => 'required',
    		'body' => 'required'
    		]);

    	$email = $request['email'];
    	$body = $request['body'];

    	$data = [
    		'email' => $email,
    		'body' => $body
    	];

    	\Mail::send('emails.message',$data, function($message) use($data){
    		$message->from($data['email']);
    		$message->to('biuro@alibre.pl');
    	});

    	return redirect('/kontakt')->with('message', 'Wiadomość pomyślnie wysłana');
    }
}
