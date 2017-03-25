<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Validator;
use Form;
use Session;
use Redirect;

class ContactController extends Controller
{

    /**
     * Show the application contact page.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Get results from form and put it into a email.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'service' => 'required',
            'contact_message' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['service'] = $request->service;
        $data['contact_message'] = $request->message;

        Mail::send('emails.contact', $data, function($message) use ($data)
        {
            $message->from($data['email'], "DoggoFood Support");
            $message->to('support@doggofood.nl', "DoggoFood Support");
            $message->subject("DoggoFood Support | ".$data['subject']);
        });

        Session::flash('success', 'Bedankt voor uw email. We nemen zo spoedig mogelijk contact met u op.');

        return Redirect::to('/contact');
    }
}
