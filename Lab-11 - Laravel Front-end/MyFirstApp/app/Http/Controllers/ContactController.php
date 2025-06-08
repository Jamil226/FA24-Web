<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }


    public function submitMessage(Request $request)
    {
        // dd($request);
        // print_r($request);
        // die;

        $request->validate(
            [
                'first_name' => 'required|min:3',
                'last_name' => 'required|min:3',
                'email' => 'required|email',
                'contact_number' => 'required|min:10',
                'message' => 'required|min:20'
            ]
        );

        $FirstName = $request->first_name;
        $LastName = $request->last_name;
        $Email = $request->email;
        $Contact = $request->contact_number;
        $Message = $request->message;
        $IP = $request->ip();
        $Status = 0;

        $contact = new Contact();
        $contact->first_name = $FirstName;
        $contact->last_name = $LastName;
        $contact->email = $Email;
        $contact->contact = $Contact;
        $contact->message = $Message;
        $contact->ip = $IP;
        $contact->status = $Status;
        $contact->save();
        return back()->withSuccess("Thanks for Contacting Us. We'll respond you ASAP!");
    }


}
