<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

use App\Models\Links;

class LinkController extends Controller
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
        
        $links = Links::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/links', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('links.create');
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
            'link_url'=>['required', 'string'],
            'image_url'=>'mimes:jpg,jpeg,png|max:2048'
        ]);

        $insert['link_url'] = $request->get('link_url');
        
        if($request->hasFile('image_url')){
            $image_url = $request->file('image_url');
            $filename = time() . '.' . $image_url->getClientOriginalExtension();
            Image::make($image_url)->save( public_path('image_url/' . $filename ) );
            $insert['image_url'] = 'image_url/'.$filename;
        }

        Links::insert($insert);
        
        return redirect('/admin/links')->with('success', 'Link əlavə edildi!');
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
        $link = Links::find($id);
        $links = Links::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/editLink', compact(['link', 'links']));
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
            'link_url'=>['required', 'string'],
            'image_url'=>'mimes:jpg,jpeg,png|max:2048'
        ]);

        $link = Links::find($id);
        $link->link_url = $request->get('link_url');
        
        if($request->hasFile('image_url')){
            $image_url = $request->file('image_url');
            $filename = time() . '.' . $image_url->getClientOriginalExtension();
            Image::make($image_url)->save( public_path('image_url/' . $filename ) );
            $journal->image_url = 'image_url/'.$filename;
        }

        $link->save();

        return redirect('/admin/links')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Links::find($id);
        $link->delete();

        return redirect('/admin/links')->with('success', 'Link silindi!');
    }
}
