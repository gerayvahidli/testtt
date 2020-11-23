<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Articles;
use App\Models\Journals;
use App\Models\Categories;

class ArticleController extends Controller
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

        $journals = Journals::all()->reverse()->values();
        $articles = Articles::orderBy('id', 'desc')->paginate(10);
        $categories = Categories::all();

        return view('admin_panel/articles', compact(['journals', 'articles', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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
            'journal_id'=>['required', 'integer'],
            'page_num'=>['required', 'string'],
            'UOT_code'=>['required', 'string'],
            'DOI_code'=>['required', 'string'],
            'category_id'=>['required', 'integer'], 
            'titleAz'=>['required', 'string'],
            'titleRu'=>['required', 'string'],
            'titleEn'=>['required', 'string'],
            'keywordsAz'=>['required', 'string'],
            'keywordsRu'=>['required', 'string'],
            'keywordsEn'=>['required', 'string'],
            'abstractAz'=>['required', 'string'],
            'abstractRu'=>['required', 'string'],
            'abstractEn'=>['required', 'string'],
            'referencesAz'=>['required', 'string'],
            'referencesRu'=>['required', 'string'],
            'referencesEn'=>['required', 'string'],
            'authorsAz'=>['required', 'string'],
            'authorsRu'=>['required', 'string'],
            'authorsEn'=>['required', 'string']
        ]);
 

           $insert['journal_id'] = $request->get('journal_id');
           $insert['page_num'] = $request->get('page_num');
           $insert['UOT_code'] = $request->get('UOT_code');
           $insert['DOI_code'] = $request->get('DOI_code');
           $insert['category_id'] = $request->get('category_id');
           $insert['titleAz'] = $request->get('titleAz');
           $insert['titleRu'] = $request->get('titleRu');
           $insert['titleEn'] = $request->get('titleEn');
           $insert['keywordsAz'] = $request->get('keywordsAz');
           $insert['keywordsRu'] = $request->get('keywordsRu');
           $insert['keywordsEn'] = $request->get('keywordsEn');
           $insert['abstractAz'] = $request->get('abstractAz');
           $insert['abstractRu'] = $request->get('abstractRu');
           $insert['abstractEn'] = $request->get('abstractEn');
           $insert['referencesAz'] = $request->get('referencesAz');
           $insert['referencesRu'] = $request->get('referencesRu');
           $insert['referencesEn'] = $request->get('referencesEn');
           $insert['authorsAz'] = $request->get('authorsAz')[0];
           $insert['authorsRu'] = $request->get('authorsRu')[0];
           $insert['authorsEn'] = $request->get('authorsEn')[0];

           Articles::insert($request->all());

           return redirect('/admin/articles')->with('success', 'Məqalə əlavə edildi!');
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        $article = Articles::find($id);

        is_null($article )? abort(404) : '';

        //adapt to localization. f.ex : keywordsAz
        $keywords_column_name = "keywords".app()->getLocale();

        $keywords_str = $article -> $keywords_column_name;
        $keywords = explode(',', $keywords_str);

        return view('user.journal.article',compact('article','keywords'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journals = Journals::all()->reverse()->values();
        $categories = Categories::all();

        $article = Articles::find($id);
        $articles = Articles::orderBy('id', 'desc')->paginate(10);

        $authorsAz = json_decode($article->authorsAz);
        $authorsRu = json_decode($article->authorsRu);
        $authorsEn = json_decode($article->authorsEn);

        var_dump($authorsAz);

        return view('admin_panel/editArticle', compact(['journals', 'categories', 'article', 'articles', 'authorsAz', 'authorsRu', 'authorsEn']));
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
            'journal_id'=>['required', 'integer'],
            'page_num'=>['required', 'string'],
            'UOT_code'=>['required', 'string'],
            'DOI_code'=>['required', 'string'],
            'category_id'=>['required', 'integer'], 
            'titleAz'=>['required', 'string'],
            'titleRu'=>['required', 'string'],
            'titleEn'=>['required', 'string'],
            'keywordsAz'=>['required', 'string'],
            'keywordsRu'=>['required', 'string'],
            'keywordsEn'=>['required', 'string'],
            'abstractAz'=>['required', 'string'],
            'abstractRu'=>['required', 'string'],
            'abstractEn'=>['required', 'string'],
            'referencesAz'=>['required', 'string'],
            'referencesRu'=>['required', 'string'],
            'referencesEn'=>['required', 'string'],
            'authorsAz'=>['required', 'string'],
            'authorsRu'=>['required', 'string'],
            'authorsEn'=>['required', 'string']
        ]);

        $article = Articles::find($id);
        $article->journal_id =  $request->get('journal_id');
        $article->page_num =  $request->get('page_num');
        $article->UOT_code =  $request->get('UOT_code');
        $article->DOI_code =  $request->get('DOI_code');
        $article->category_id =  $request->get('category_id');
        $article->titleAz =  $request->get('titleAz');
        $article->titleRu =  $request->get('titleRu');
        $article->titleEn =  $request->get('titleEn');
        $article->keywordsAz =  $request->get('keywordsAz');
        $article->keywordsRu =  $request->get('keywordsRu');
        $article->keywordsEn =  $request->get('keywordsEn');
        $article->abstractAz =  $request->get('abstractAz');
        $article->abstractRu =  $request->get('abstractRu');
        $article->abstractEn =  $request->get('abstractEn');
        $article->referencesAz =  $request->get('referencesAz');
        $article->referencesRu =  $request->get('referencesRu');
        $article->referencesEn =  $request->get('referencesEn');
        $article->authorsAz =  $request->get('authorsAz');
        $article->authorsRu =  $request->get('authorsRu');
        $article->authorsEn =  $request->get('authorsEn');

        $article->save();

        return redirect('/admin/articles')->with('success', 'Dəyişikliklər yadda saxlandı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::find($id);
        $article->delete();

        return redirect('/admin/articles')->with('success', 'Məqalə silindi!');
    }
}
