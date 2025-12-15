<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'weight',
        'bio',
        'category_id',
        'created_at',
        'updated_at',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
