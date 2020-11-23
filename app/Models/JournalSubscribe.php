<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalSubscribe extends Model
{
    protected $table='journal_subscribe';
    use HasFactory;

    public function getSubscribeAttribute()
    {
        $column_name = "subscribe".app() -> getLocale();
        return "{$this -> $column_name}";
    }
}
