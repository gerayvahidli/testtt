<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Founders;

class FoundersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $founders = Founders::latest()->first();

        $foundersAz = $founders->foundersAz;
        $foundersRu = $founders->foundersRu;
        $foundersEn = $founders->foundersEn;

        return view('admin_panel/founders', compact(['foundersAz', 'foundersRu', 'foundersEn']));
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
        $founders = Founders::find($id);
        $founders->foundersAz = $request->get('foundersAz');
        $founders->foundersRu = $request->get('foundersRu');
        $founders->foundersEn = $request->get('foundersEn');

        $founders->save();

        return redirect('/admin/founders')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }
}