<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

use App\Models\Exhibitions;

class ExhibitionController extends Controller
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
        
        $exhibitions = Exhibitions::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/exhibitions', compact('exhibitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exhibitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'exhibition_url'=>['required', 'string'],
            'image_url'=>'mimes:jpg,jpeg,png|max:2048'
        ]);

        $insert['exhibition_url'] = $request->get('exhibition_url');
        
        if($request->hasFile('image_url')){
            $image_url = $request->file('image_url');
            $filename = time() . '.' . $image_url->getClientOriginalExtension();
            Image::make($image_url)->save( public_path('image_url/' . $filename ) );
            $insert['image_url'] = 'image_url/'.$filename;
        }

        Exhibitions::insert($insert);
        
        return redirect('/admin/exhibitions')->with('success', 'Sərgi əlavə edildi!');
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
        $exhibition = Exhibitions::find($id);
        $exhibitions = Exhibitions::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/editExhibition', compact(['exhibition', 'exhibitions']));
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
            'exhibition_url'=>['required', 'string'],
            'image_url'=>'mimes:jpg,jpeg,png|max:2048'
        ]);

        $exhibition = Exhibitions::find($id);
        $exhibition->exhibition_url = $request->get('exhibition_url');
        
        if($request->hasFile('image_url')){
            $image_url = $request->file('image_url');
            $filename = time() . '.' . $image_url->getClientOriginalExtension();
            Image::make($image_url)->save( public_path('image_url/' . $filename ) );
            $journal->image_url = 'image_url/'.$filename;
        }

        $exhibition->save();

        return redirect('/admin/exhibitions')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exhibition = Exhibitions::find($id);
        $exhibition->delete();

        return redirect('/admin/exhibitions')->with('success', 'Sərgi silindi!');
    }
}
