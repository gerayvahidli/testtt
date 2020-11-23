<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     protected $fillable = [
        'category'      
    ];

    use HasFactory;

    public function getNameAttribute()
    {
        $column_name = "category".app() -> getLocale();
        return "{$this -> $column_name}";
    }
}