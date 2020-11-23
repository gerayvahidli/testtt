<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

use App\Models\Journals;

class JournalController extends Controller
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

        $journals = Journals::orderBy('id', 'desc')->paginate(10);

    	return view('admin_panel/journals', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journals.create');
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
            'year'=>['required', 'string', 'max:4'],
            'month'=>['required', 'array'],
            'cover_photo'=>'mimes:jpg,jpeg,png|max:2048',
            'pdf_file'=>'mimes:pdf'
        ]);

        if($request->hasFile('cover_photo')){
            $cover_photo = $request->file('cover_photo');
            $filename = time() . '.' . $cover_photo->getClientOriginalExtension();
            Image::make($cover_photo)->save( public_path('cover_photo/' . $filename ) );
            $insert['cover_photo'] = 'cover_photo/'.$filename;
        }

        if($request->hasFile('pdf_file')){
            $pdf_file = $request->file('pdf_file');
            $filename = time() . '.' . $pdf_file->getClientOriginalExtension();
            $pdf_file->move('pdf_file/', $filename);
            $insert['pdf_file'] = 'pdf_file/'.$filename;
        }

        $insert['year'] = $request->get('year');
        $insert['month'] = json_encode($request->get('month'));

        Journals::insert($insert);

        return redirect('/admin/journals')->with('success', 'Jurnal əlavə edildi!');
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
        $journal = Journals::find($id);
        $journals = Journals::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/editJournal', compact(['journal', 'journals']));
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
            'year'=>['required', 'string', 'max:4'],
            'month'=>['required', 'array'],
            'cover_photo'=>'mimes:jpg,jpeg,png|max:2048',
            'pdf_file'=>'mimes:pdf'
        ]);

        $journal = Journals::find($id);
        $journal->year =  $request->get('year');
        $journal->month = $request->get('month');
        
        if($request->hasFile('cover_photo')){
            $cover_photo = $request->file('cover_photo');
            $filename = time() . '.' . $cover_photo->getClientOriginalExtension();
            Image::make($cover_photo)->save( public_path('cover_photo/' . $filename ) );
            $journal->cover_photo = 'cover_photo/'.$filename;
        }

        if($request->hasFile('pdf_file')){
            $pdf_file = $request->file('pdf_file');
            $filename = time() . '.' . $pdf_file->getClientOriginalExtension();
            $pdf_file->move('pdf_file/', $filename);
            $journal->pdf_file = 'pdf_file/'.$filename;
        }

        $journal->save();

        return redirect('/admin/journals')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journal = Journals::find($id);
        $journal->delete();

        return redirect('/admin/journals')->with('success', 'Jurnal silindi!');
    }


    public function number($id = null){
        $journal = Journals::find($id);

        is_null($journal )? abort(404) : '';

        $articles = $journal -> articles() -> paginate(15);

        return view('user.journal.number',compact('journal','articles'));
    }

    public function archive($year = null,$month = null)
    {
        is_null($year) ? $year = now()->year : '';
        $journals = Journals::where('year',$year) -> orderByDesc('month') -> paginate(12);
        return view('user.journal.archive',compact('journals'));
    }

    public function archive_month($month = null)
    {
        !is_null($month) ? $journals = Journals::where('month', 'LIKE', '%'.$month.'%') -> orderByDesc('year') -> paginate(12) : abort('404');

        return view('user.journal.archive',compact('journals'));
    }
}