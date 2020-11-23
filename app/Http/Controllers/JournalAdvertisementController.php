<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\JournalAdvertisement;

class JournalAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journalAdvertisement = JournalAdvertisement::latest()->first();

        $advertisementAz = $journalAdvertisement->advertisementAz;
        $advertisementRu = $journalAdvertisement->advertisementRu;
        $advertisementEn = $journalAdvertisement->advertisementEn;

        return view('admin_panel/journalAdvertisement', compact(['advertisementAz', 'advertisementRu', 'advertisementEn']));
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
        $advertisement = JournalAdvertisement::find($id);
        $advertisement->advertisementAz = $request->get('advertisementAz');
        $advertisement->advertisementRu = $request->get('advertisementRu');
        $advertisement->advertisementEn = $request->get('advertisementEn');

        $advertisement->save();

        return redirect('/admin/journalAdvertisement')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }
}