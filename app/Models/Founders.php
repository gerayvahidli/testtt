<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founders extends Model
{
    protected $fillable = [
        'text_area_az',
        'text_area_ru',
        'text_area_en'
    ];

    use HasFactory;

    public function getFoundersAttribute()
    {
        $column_name = "founders".app() -> getLocale();
        return "{$this -> $column_name}";
    }
}
