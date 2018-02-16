<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Mail\Order as OrderFeedback;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create(request()->all());

        try {

             $this->sendMail(request()->all());

         } catch (\Exception $e) {
             return back()->withFail('Sending Mail Failed, this is a problem with your internet connection, please try agin later');
         }

         return back()->withSuccess('Your order has been submitted successfully, thanks');
    }

    public function sendMail($data)
    {
        $recepient = ['hackshadetechs@gmail.com'];
        Mail::to($recepient)->send(new OrderFeedback($data));
    }
}
