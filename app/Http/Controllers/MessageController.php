<?php

namespace App\Http\Controllers;

use App\Mail\FromUserToTis;
use App\Mail\SendMessage;
use App\Models\Contact;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::first();
        return view('user.contact',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send_message(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'email|required',
            'phone' => 'required|digits_between:0,10',
            'subject' => 'required',
            'message' => 'required',
        ]);

        //save message to database
        $message = new Messages;
        $message -> full_name = $request -> full_name;
        $message -> email = $request -> email;
        $message -> phone = $request -> phone;
        $message -> subject = $request -> subject;
        $message -> content = $request -> message;
        $message -> save();

        //send mail
        \Mail::to('garay.vahidli@socar.az')->send(new SendMessage($message));

        return redirect()->to(url()->previous() . '#message');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
