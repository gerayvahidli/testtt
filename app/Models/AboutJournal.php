<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutJournal extends Model
{
    protected $table = 'about_journal';
    use HasFactory;


    public function getFounderAttribute()
    {
        $column_name = "founder".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getTextAreaAttribute()
    {
        $column_name = "textArea".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getFoundingDateAttribute()
    {
        $column_name = "foundingDate".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getProfileAttribute()
    {
        $column_name = "profile".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getLanguagesAttribute()
    {
        $column_name = "languages".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getPeriodicityAttribute()
    {
        $column_name = "periodicity".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getFormatAttribute()
    {
        $column_name = "format".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getVolumeAttribute()
    {
        $column_name = "volume".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getQuantityAttribute()
    {
        $column_name = "quantity".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getTypographyAttribute()
    {
        $column_name = "typography".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getRegistrationNumAttribute()
    {
        $column_name = "registrationNum".app() -> getLocale();
        return "{$this -> $column_name}";
    }

}
