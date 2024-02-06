<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->sort = self::max('sort') + 1;
        });
    }
}
