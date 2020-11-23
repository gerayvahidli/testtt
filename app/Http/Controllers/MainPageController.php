<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

use App\Models\MainPage;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(!Auth::check()){
        //     return redirect('login');
        // }

        $mainPage = MainPage::orderBy('id', 'desc')->paginate(10);

    	return view('admin_panel/mainPage', compact('mainPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mainPage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $insert['titleAz'] = $request->get('titleAz');
            $insert['titleRu'] = $request->get('titleRu');
            $insert['titleEn'] = $request->get('titleEn');
            $insert['contentAz'] = $request->get('contentAz');
            $insert['contentRu'] = $request->get('contentRu');
            $insert['contentEn'] = $request->get('contentEn');

            MainPage::insert($insert);

            return redirect('/admin/mainPage')->with('success', 'Bölmə əlavə edildi!');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mainPageBlock = MainPage::find($id);
        $mainPage = MainPage::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/editMainPage', compact(['mainPageBlock', 'mainPage']));
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
        $mainPage = MainPage::find($id);

        $mainPage->titleAz =  $request->get('titleAz');
        $mainPage->titleRu =  $request->get('titleRu');
        $mainPage->titleEn =  $request->get('titleEn');
        $mainPage->contentAz =  $request->get('contentAz');
        $mainPage->contentRu =  $request->get('contentRu');
        $mainPage->contentEn =  $request->get('contentEn');
        
        $mainPage->save();

        return redirect('/admin/mainPage')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mainPage = MainPage::find($id);
        $mainPage->delete();

        return redirect('/admin/mainPage')->with('success', 'Bölmə silindi!');
    }
}