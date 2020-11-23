<?php

namespace App\Providers;

use App\Models\AboutJournal;
use App\Models\Contact;
use Illuminate\Support\ServiceProvider;
use App\Models\Journals;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', function ($view) {
            $last_number = Journals::orderBy('created_at') -> get() -> last();
            $contact = Contact::first();
            $view->with([
                'last_number'=> $last_number,
                'contact' => $contact
                ]);
        });
    }
}
