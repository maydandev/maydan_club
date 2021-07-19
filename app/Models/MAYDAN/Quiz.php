<?php

namespace App\Models\MAYDAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo('App\Models\MAYDAN\Post');
    }
}
