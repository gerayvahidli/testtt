<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Journals extends Model
{
     protected $fillable = [
        'year',
        'month',
        'cover_photo',
        'pdf_file'       
    ];

    use HasFactory;
    use HasTranslations;

    public $translatable = [];

    public function articles()
    {
        return $this->hasMany(Articles::class, 'journal_id');
    }
}