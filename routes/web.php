<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutJournalController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FromEditorController;
use App\Http\Controllers\FoundersController;
use App\Http\Controllers\JournalAdvertisementController;
use App\Http\Controllers\JournalSubscribeController;
use App\Http\Controllers\AcceptArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditorialBoardController;
use App\Http\Controllers\EditorialCouncilController;


/////

use App\Models\AboutJournal; 
use App\Models\Journals;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

// Route::group(['prefix' => 'admin'], function() {
//     Route::auth();
// });

Route::prefix('admin')->namespace('Admin')->group(static function() {

    Route::middleware('auth')->group(static function () {
        //...

        Route::resource('/', '\App\Http\Controllers\MainPageController');

        Route::resource('journals', '\App\Http\Controllers\JournalController');
        Route::resource('categories', '\App\Http\Controllers\CategoryController');
        Route::resource('articles', '\App\Http\Controllers\ArticleController');
        Route::resource('founders', '\App\Http\Controllers\FoundersController');
        Route::resource('fromEditor', '\App\Http\Controllers\FromEditorController');
        Route::resource('aboutJournal', '\App\Http\Controllers\AboutJournalController');
        Route::resource('journalAdvertisement', '\App\Http\Controllers\JournalAdvertisementController');
        Route::resource('journalSubscribe', '\App\Http\Controllers\JournalSubscribeController');
        Route::resource('acceptArticles', '\App\Http\Controllers\AcceptArticlesController');
        Route::resource('contact', '\App\Http\Controllers\ContactController');
        Route::resource('editorialBoard', '\App\Http\Controllers\EditorialBoardController');
        Route::resource('editorialCouncil', '\App\Http\Controllers\EditorialCouncilController');
        Route::resource('mainPage', '\App\Http\Controllers\MainPageController');
        Route::resource('links', '\App\Http\Controllers\LinkController');
        Route::resource('exhibitions', '\App\Http\Controllers\ExhibitionController');

        Route::post('ckeditor/upload', '\App\Http\Controllers\CkeditorController@upload')->name('ckeditor.upload');
    });
});

 

 

// Geray's routes

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

    Route::get('/', [App\Http\Controllers\MainController::class, 'main_page']);
    Route::get('/about-journal',[\App\Http\Controllers\MainController::class,'about_journal']) -> name('aboutJournal');
    Route::get('/articles',[\App\Http\Controllers\ArticleController::class,'show']);

    Route::get('/contact',[\App\Http\Controllers\MessageController::class,'index']) -> name('contact');
    Route::post('/send-message',[\App\Http\Controllers\MessageController::class,'send_message']) -> middleware('XSS') -> name('sendMessage');
    Route::get('/editorial-staff', [\App\Http\Controllers\MainController::class, 'editorial_staff']) -> name('editorialStaff');
    Route::get('/from-editor-in-chief', [\App\Http\Controllers\MainController::class, 'from_editor_in_chief']) -> name('editorInChief');
    Route::match(['get', 'post'],'/search', [\App\Http\Controllers\MainController::class, 'search'])->name('search');
    Route::get('/founders', [\App\Http\Controllers\MainController::class, 'founders']) -> name('founders');
    Route::get('/editorial-council', [\App\Http\Controllers\MainController::class, 'editorial_council']) -> name('editorialCouncil');
    Route::get('/advertisement', [\App\Http\Controllers\MainController::class, 'advertisement']) -> name('advertisement');
    Route::get('/subscribe', [\App\Http\Controllers\MainController::class, 'subscribe']) -> name('subscribe');
    Route::get('/article_acceptance', [\App\Http\Controllers\MainController::class, 'article_acceptance']) -> name('articleAcceptance');


Route::group(['as'=>'journal.'],function () {
    Route::get('/archive/year/{year?}', [\App\Http\Controllers\JournalController::class, 'archive']) -> name('archive');
    Route::get('/archive/month/{month?}', [\App\Http\Controllers\JournalController::class, 'archive_month']) -> name('archiveByMonth');
    Route::get('/number/{id?}',[\App\Http\Controllers\JournalController::class,'number']) -> name( 'number');
    Route::get('/article/{id?}',[\App\Http\Controllers\ArticleController::class,'show']) -> name( 'number.article');
});