<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Categories;

class CategoryController extends Controller
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
        
        $categories = Categories::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'category_az'=>['required', 'string'],
            'category_ru'=>['required', 'string'],
            'category_en'=>['required', 'string']
        ]);

        $insert['categoryAz'] = $request->get('category_az');
        $insert['categoryRu'] = $request->get('category_ru');
        $insert['categoryEn'] = $request->get('category_en');

        Categories::insert($insert);
        
        return redirect('/admin/categories')->with('success', 'Kateqoriya əlavə edildi!');
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
        $category = Categories::find($id);
        $categories = Categories::orderBy('id', 'desc')->paginate(10);

        return view('admin_panel/editCategory', compact(['category', 'categories']));
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
            'category_az'=>['required', 'string'],
            'category_ru'=>['required', 'string'],
            'category_en'=>['required', 'string']
        ]);

        $category = Categories::find($id);
        $category->categoryAz = $request->get('category_az');
        $category->categoryRu = $request->get('category_ru');
        $category->categoryEn = $request->get('category_en');
        $category->save();

        return redirect('/admin/categories')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();

        return redirect('/admin/categories')->with('success', 'Kateqoriya silindi!');
    }
}
