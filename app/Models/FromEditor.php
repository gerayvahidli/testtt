<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FromEditor extends Model
{
    use HasFactory;

    protected $table= 'from_editor';

    public function getHeaderAttribute()
    {
        $column_name = "header".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getContentAttribute()
    {
        $column_name = "content".app() -> getLocale();
        return "{$this -> $column_name}";
    }
}
