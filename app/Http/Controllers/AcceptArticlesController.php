<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\AcceptArticles;

class AcceptArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acceptArticles = AcceptArticles::latest()->first();

        $articlesAz = $acceptArticles->articlesAz;
        $articlesRu = $acceptArticles->articlesRu;
        $articlesEn = $acceptArticles->articlesEn;

        return view('admin_panel/acceptArticles', compact(['articlesAz', 'articlesRu', 'articlesEn']));
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
        $articles = AcceptArticles::find($id);
        $articles->articlesAz = $request->get('articlesAz');
        $articles->articlesRu = $request->get('articlesRu');
        $articles->articlesEn = $request->get('articlesEn');

        $articles->save();

        return redirect('/admin/acceptArticles')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }
}