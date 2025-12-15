<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'amount',
        'discount',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];
}
