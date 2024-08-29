<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'category_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
