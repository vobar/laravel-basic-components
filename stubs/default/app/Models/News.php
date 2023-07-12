<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * scope for active models
     *
     * @param $query
     * @return void
     */
    public function scopeActive($query)
    {
        $query->where('active', 1);
    }
}
