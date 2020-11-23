<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

use App\Models\EditorialCouncil;

class EditorialCouncilController extends Controller
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

        $editorialCouncil = EditorialCouncil::orderBy('id', 'desc')->paginate(10);

    	return view('admin_panel/editorialCouncil', compact('editorialCouncil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editorialCouncil.create');
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
            'nameAz'=>['required', 'string'],
            'nameRu'=>['required', 'string'],
            'nameEn'=>['required', 'string'],
            'titleAz'=>['required', 'string'],
            'titleRu'=>['required', 'string'],
            'titleEn'=>['required', 'string'],
            'editor_photo'=>'mimes:jpg,jpeg,png|max:2048'
        ]);

        if($request->hasFile('editor_photo')){
            $editor_photo = $request->file('editor_photo');
            $filename = time() . '.' . $editor_photo->getClientOriginalExtension();
            Image::make($editor_photo)->save( public_path('editor_photo/' . $filename ) );
            $insert['editor_photo'] = 'editor_photo/'.$filename;
        }

        $insert['nameAz'] = $request->get('nameAz');
        $insert['nameRu'] = $request->get('nameRu');
        $insert['nameEn'] = $request->get('nameEn');
        $insert['titleAz'] = $request->get('titleAz');
        $insert['titleRu'] = $request->get('titleRu');
        $insert['titleEn'] = $request->get('titleEn');

        EditorialCouncil::insert($insert);

        return redirect('/admin/editorialCouncil')->with('success', 'Redaksiya üzvü əlavə edildi!');
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
        $editor = EditorialCouncil::find($id);
        $editorialCouncil = EditorialCouncil::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/editCouncilMember', compact(['editor', 'editorialCouncil']));
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
            'nameAz'=>['required', 'string'],
            'nameRu'=>['required', 'string'],
            'nameEn'=>['required', 'string'],
            'titleAz'=>['required', 'string'],
            'titleRu'=>['required', 'string'],
            'titleEn'=>['required', 'string'],
            'editor_photo'=>'mimes:jpg,jpeg,png|max:2048'
        ]);

        $editorialCouncil = EditorialCouncil::find($id);
        $editorialCouncil->titleAz =  $request->get('titleAz');
        $editorialCouncil->titleRu =  $request->get('titleRu');
        $editorialCouncil->titleEn =  $request->get('titleEn');
        $editorialCouncil->nameAz =  $request->get('nameAz');
        $editorialCouncil->nameRu =  $request->get('nameRu');
        $editorialCouncil->nameEn =  $request->get('nameEn');
        
        if($request->hasFile('editor_photo')){
            $editor_photo = $request->file('editor_photo');
            $filename = time() . '.' . $editor_photo->getClientOriginalExtension();
            Image::make($editor_photo)->save( public_path('editor_photo/' . $filename ) );
            $editorialCouncil->editor_photo = 'editor_photo/'.$filename;
        }

        $editorialCouncil->save();

        return redirect('/admin/editorialCouncil')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editor = EditorialCouncil::find($id);
        $editor->delete();

        return redirect('/admin/editorialCouncil')->with('success', 'Redaksiya üzvü silindi!');
    }
}