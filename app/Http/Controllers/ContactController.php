<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Contact;
use App\Models\Messages;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::latest()->first();
        $messages = Messages::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/contact', compact(['messages', 'contacts']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Messages::find($id);
        $messages = Messages::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/readMessage', compact(['message', 'messages']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        // $request->validate([
        //     'addressAz'=>['required', 'string'],
        //     'addressRu'=>['required', 'string'],
        //     'addressEn'=>['required', 'string'],
        //     'phonesAz'=>['required', 'string'],
        //     'phonesRu'=>['required', 'string'],
        //     'phonesEn'=>['required', 'string'],
        //     'emailAz'=>['required', 'string'],
        //     'emailRu'=>['required', 'string'],
        //     'emailEn'=>['required', 'string']
        // ]);

        $contacts = Contact::find($id);

        $contacts->addressAz =  $request->get('addressAz');
        $contacts->addressRu =  $request->get('addressRu');
        $contacts->addressEn =  $request->get('addressEn');
        $contacts->phonesAz =  $request->get('phonesAz');
        $contacts->phonesRu =  $request->get('phonesRu');
        $contacts->phonesEn =  $request->get('phonesEn');
        $contacts->emailAz =  $request->get('emailAz');
        $contacts->emailRu =  $request->get('emailRu');
        $contacts->emailEn =  $request->get('emailEn');

        $contacts->save();

        return redirect('/admin/contact')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }
}