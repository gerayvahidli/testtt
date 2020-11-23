<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    use HasFactory;

    protected $table= 'main_page';

    public function getTitleAttribute()
    {
        $column_name = "title".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getContentAttribute()
    {
        $column_name = "content".app() -> getLocale();
        return "{$this -> $column_name}";
    }
}
