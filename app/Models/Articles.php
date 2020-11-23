<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
     protected $fillable = [
        'journal_id',
        'page_num',
        'category_id',
        'UOT_code',
        'DOI_code',
        'titleAz',
        'keywordsAz',
        'abstractAz',
        'referencesAz',
        'titleRu',
        'keywordsRu',
        'abstractRu',
        'referencesRu',
        'titleEn',
        'keywordsEn',
        'abstractEn',
        'referencesEn'
    ];

    use HasFactory;

    public function journal()
    {
        return $this->belongsTo(Journals::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function getTitleAttribute()
    {
        $column_name = "title".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getAuthorsAttribute()
    {
        $column_name = "authors".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getAbstractAttribute()
    {
        $column_name = "abstract".app() -> getLocale();
        return "{$this -> $column_name}";
    }

    public function getReferencesAttribute()
    {
        $column_name = "references".app() -> getLocale();
        return "{$this -> $column_name}";
    }
}