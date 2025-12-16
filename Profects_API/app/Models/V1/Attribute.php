<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['name', 'value'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_attributes');
    }
}


