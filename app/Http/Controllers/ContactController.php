<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Validator;
use Redirect;

class ContactController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
{
return view('contact');
}

public function create()
{
return view('contact');
}

public function store(Request $request)
{
$data['name'] = $request->name;
$data['email'] = $request->email;
$data['subject'] = $request->subject;
$data['service'] = $request->service;
$data['message'] = $request->message;

Mail::send('emails.contact', $data, function($message) use ($data)
{
$message->from('thijs1assmann@gmail.com', "DoggoFood Support");
$message->to('thijs1assmann@gmail.com', "DoggoFood Support");
$message->subject("DoggoFood Support | ".$data['subject']);
});

return Redirect::to('/contact');

}
}