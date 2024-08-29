<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    protected $fillable = [
        'tag',
        'title',
        'data',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
