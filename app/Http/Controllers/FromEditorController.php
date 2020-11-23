<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\FromEditor;

class FromEditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fromEditor = FromEditor::latest()->first();

        $headerAz = $fromEditor->headerAz;
        $headerRu = $fromEditor->headerRu;
        $headerEn = $fromEditor->headerEn;
        $contentAz = $fromEditor->contentAz;
        $contentRu = $fromEditor->contentRu;
        $contentEn = $fromEditor->contentEn;

        return view('admin_panel/fromEditor', compact(['headerAz', 'headerRu', 'headerEn', 'contentAz', 'contentRu', 'contentEn']));
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
        $fromEditor = FromEditor::find($id);
        $fromEditor->headerAz =  $request->get('headerAz');
        $fromEditor->headerRu =  $request->get('headerRu');
        $fromEditor->headerEn =  $request->get('headerEn');
        $fromEditor->contentAz =  $request->get('contentAz');
        $fromEditor->contentRu =  $request->get('contentRu');
        $fromEditor->contentEn =  $request->get('contentEn');

        $fromEditor->save();

        return redirect('/admin/fromEditor')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }
}