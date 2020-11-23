<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptArticles extends Model
{
	protected $table = 'accept_articles';

	public function getArticlesAttribute()
    {
        $column_name = "articles".app() -> getLocale();
        return "{$this -> $column_name}";
    }
}
