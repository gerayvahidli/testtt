<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

use App\Models\EditorialBoard;

class EditorialBoardController extends Controller
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

        $editorialBoard = EditorialBoard::orderBy('id', 'desc')->paginate(10);

    	return view('admin_panel/editorialBoard', compact('editorialBoard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editorialBoard.create');
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
                // 'titleAz'=>['required', 'string'],
                // 'titleRu'=>['required', 'string'],
                // 'titleEn'=>['required', 'string'],
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

            EditorialBoard::insert($insert);

            return redirect('/admin/editorialBoard')->with('success', 'Redaksiya üzvü əlavə edildi!');
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
        $editor = EditorialBoard::find($id);
        $editorialBoard = EditorialBoard::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/editBoardMember', compact(['editor', 'editorialBoard']));
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
            // 'titleAz'=>['required', 'string'],
            // 'titleRu'=>['required', 'string'],
            // 'titleEn'=>['required', 'string'],
            'editor_photo'=>'mimes:jpg,jpeg,png|max:2048'
        ]);

        $editorialBoard = EditorialBoard::find($id);
        $editorialBoard->titleAz =  $request->get('titleAz');
        $editorialBoard->titleRu =  $request->get('titleRu');
        $editorialBoard->titleEn =  $request->get('titleEn');
        $editorialBoard->nameAz =  $request->get('nameAz');
        $editorialBoard->nameRu =  $request->get('nameRu');
        $editorialBoard->nameEn =  $request->get('nameEn');
        
        if($request->hasFile('editor_photo')){
            $editor_photo = $request->file('editor_photo');
            $filename = time() . '.' . $editor_photo->getClientOriginalExtension();
            Image::make($editor_photo)->save( public_path('editor_photo/' . $filename ) );
            $editorialBoard->editor_photo = 'editor_photo/'.$filename;
        }

        $editorialBoard->save();

        return redirect('/admin/editorialBoard')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editor = EditorialBoard::find($id);
        $editor->delete();

        return redirect('/admin/editorialBoard')->with('success', 'Redaksiya üzvü silindi!');
    }
}