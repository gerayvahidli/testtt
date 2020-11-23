<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\AboutJournal;
use Image;

class AboutJournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutJournal = AboutJournal::latest()->first();

        $textAreaAz = $aboutJournal->textAreaAz;
        $textAreaRu = $aboutJournal->textAreaRu;
        $textAreaEn = $aboutJournal->textAreaEn;

        return view('admin_panel/aboutJournal', compact(['aboutJournal', 'textAreaAz', 'textAreaRu', 'textAreaEn']));
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
        $request->validate([
            'cover_photo'=>'mimes:jpg,jpeg,png|max:2048'
        ]);

        $aboutJournal = AboutJournal::find($id);
        $aboutJournal->ISSN =  $request->get('ISSN');

        if($request->hasFile('cover_photo')){
            $cover_photo = $request->file('cover_photo');
            $filename = time() . '.' . $cover_photo->getClientOriginalExtension();
            Image::make($cover_photo)->save( public_path('about_journal_photo/' . $filename ) );
            $aboutJournal->cover_photo = 'about_journal_photo/'.$filename;
        }

        $aboutJournal->foundingDateAz =  $request->get('foundingDateAz'); 
        $aboutJournal->founderAz =  $request->get('founderAz');
        $aboutJournal->profileAz =  $request->get('profileAz');
        $aboutJournal->languagesAz =  $request->get('languagesAz');
        $aboutJournal->periodicityAz =  $request->get('periodicityAz');
        $aboutJournal->formatAz =  $request->get('formatAz');
        $aboutJournal->volumeAz =  $request->get('volumeAz');
        $aboutJournal->quantityAz =  $request->get('quantityAz');
        $aboutJournal->typographyAz =  $request->get('typographyAz');
        $aboutJournal->registrationNumAz =  $request->get('registrationNumAz'); 
        $aboutJournal->textAreaAz =  $request->get('textAreaAz'); 

        $aboutJournal->foundingDateRu =  $request->get('foundingDateRu');
        $aboutJournal->founderRu =  $request->get('founderRu');
        $aboutJournal->profileRu =  $request->get('profileRu');
        $aboutJournal->languagesRu =  $request->get('languagesRu');
        $aboutJournal->periodicityRu =  $request->get('periodicityRu');
        $aboutJournal->formatRu =  $request->get('formatRu');
        $aboutJournal->volumeRu =  $request->get('volumeRu');
        $aboutJournal->quantityRu =  $request->get('quantityRu');
        $aboutJournal->typographyRu =  $request->get('typographyRu');
        $aboutJournal->registrationNumRu =  $request->get('registrationNumRu');
        $aboutJournal->textAreaRu =  $request->get('textAreaRu');

        $aboutJournal->foundingDateEn =  $request->get('foundingDateEn');
        $aboutJournal->founderEn =  $request->get('founderEn');
        $aboutJournal->profileEn =  $request->get('profileEn');
        $aboutJournal->languagesEn =  $request->get('languagesEn');
        $aboutJournal->periodicityEn =  $request->get('periodicityEn');
        $aboutJournal->formatEn =  $request->get('formatEn');
        $aboutJournal->volumeEn =  $request->get('volumeEn');
        $aboutJournal->quantityEn =  $request->get('quantityEn');
        $aboutJournal->typographyEn =  $request->get('typographyEn');
        $aboutJournal->registrationNumEn =  $request->get('registrationNumEn');
        $aboutJournal->textAreaEn =  $request->get('textAreaEn');

        $aboutJournal->save();

        return redirect('/admin/aboutJournal')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }
}