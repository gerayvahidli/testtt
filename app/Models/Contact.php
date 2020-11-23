<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    public function getAddressAttribute()
    {
        $column_name = "address".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getEmailAttribute()
    {
        $column_name = "email".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getPhonesAttribute()
    {
        $column_name = "phones".app() -> getLocale();
        return "{$this -> $column_name}";
    }

}
