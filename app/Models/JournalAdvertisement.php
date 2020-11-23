<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalAdvertisement extends Model
{
    use HasFactory;
    protected $table = "journal_advertisement";

    public function getAdversitimentAttribute()
    {
        $column_name = "advertisement".app() -> getLocale();
        return "{$this -> $column_name}";
    }
}
