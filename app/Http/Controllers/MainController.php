<?php

namespace App\Http\Controllers;

use App\Models\AboutJournal;
use App\Models\AcceptArticles;
use App\Models\Articles;
use App\Models\Contact;
use App\Models\EditorialBoard;
use App\Models\EditorialCouncil;
use App\Models\Founders;
use App\Models\FromEditor;
use App\Models\Journals;
use App\Models\JournalAdvertisement;
use App\Models\JournalSubscribe;
use App\Models\MainPage;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function main_page()
    {
        $about_journal = AboutJournal::first();
        $last_number = Journals::orderBy('created_at') -> get() -> last();
        $main_page = MainPage::all();
        return view('user.home',compact('about_journal','last_number','main_page'));
    }

    public function editorial_staff()
    {
        $editors = EditorialBoard::all();
        return view('user.editorial-staff',compact('editors'));
    }

    public function editorial_council()
    {
        $editors = EditorialCouncil::all();
        return view('user.editorial-council',compact('editors'));
    }

    public function founders()
    {
        $founder = Founders::first();
        return view('user.founders',compact('founder'));
    }


    public function from_editor_in_chief()
    {
        $from_editor = FromEditor::first();
        return view('user.from_editor_in_chief',compact('from_editor'));
    }


    public function search(Request $request)
    {
//        $request -> validate([
//            'q' => 'required'
//        ]);
//        return $request;
        $q = $request -> q;

        $title = "title".app() -> getLocale();
        $keywords = "keywords".app() -> getLocale();
        $abstract = "abstract".app() -> getLocale();
        $references = "references".app() -> getLocale();

        $articles = Articles::with('journal')
            -> where($title,'LIKE','%'.$q.'%')
            ->orWhere($keywords,'LIKE','%'.$q.'%')
            ->orWhere($abstract,'LIKE','%'.$q.'%')
            ->orWhere($references,'LIKE','%'.$q.'%')
            ->orderBy('category_id') -> with('category') -> paginate(15);

        return view('user.search.search',compact('articles'));
    }



    public function about_journal()
    {
        $about_journal = AboutJournal::first();
        return view('user.about-journal',compact('about_journal'));
    }

    public function advertisement()
    {
        $about_journal = AboutJournal::first();
        $advertisement = JournalAdvertisement::first();
        return view('user.advertisement',compact('about_journal','advertisement'));
    }

    public function subscribe()
    {
        $about_journal = AboutJournal::first();
        $subscribe = JournalSubscribe::first();
        return view('user.subscribe',compact('about_journal','subscribe'));
    }

    public function article_acceptance()
    {
        $about_journal = AboutJournal::first();
        $article = AcceptArticles::first();
        return view('user.article_acceptance',compact('about_journal','article'));
    }

}
