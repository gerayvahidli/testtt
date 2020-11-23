<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditorialCouncil extends Model
{
    protected $table = 'editorial_council';
    use HasFactory;

    public function getNameAttribute()
    {
        $column_name = "name".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getTitleAttribute()
    {
        $column_name = "title".app() -> getLocale();
        return "{$this -> $column_name}";
    }
}
