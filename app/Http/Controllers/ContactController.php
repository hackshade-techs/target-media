<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\Contact as ContactFeedback;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Contact::create(request()->all());


      try {

           $this->sendMail(request()->all());

       } catch (\Exception $e) {
           return back()->withFail('Sending Mail Failed, this is a problem with your internet connection, please try agin later');
       }

       return back()->withSuccess('Your feedback has been submitted successfully, thanks');

    }

    public function sendMail($data)
    {
        $recepient = ['hackshadetechs@gmail.com'];
        Mail::to($recepient)->send(new ContactFeedback($data));
    }


}
