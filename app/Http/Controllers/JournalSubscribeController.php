<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\JournalSubscribe;

class JournalSubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journalSubscribe = JournalSubscribe::latest()->first();

        $subscribeAz = $journalSubscribe->subscribeAz;
        $subscribeRu = $journalSubscribe->subscribeRu;
        $subscribeEn = $journalSubscribe->subscribeEn;

        return view('admin_panel/journalSubscribe', compact(['subscribeAz', 'subscribeRu', 'subscribeEn']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $subscribe = JournalSubscribe::find($id);
        $subscribe->subscribeAz = $request->get('subscribeAz');
        $subscribe->subscribeRu = $request->get('subscribeRu');
        $subscribe->subscribeEn = $request->get('subscribeEn');

        $subscribe->save();

        return redirect('/admin/journalSubscribe')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }
}