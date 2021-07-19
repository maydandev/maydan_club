<?php

namespace App\Models\MAYDAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo('App\Models\MAYDAN\Post');
    }



    public function vote_status()
    {
        return $this->belongsTo('App\Models\MAYDAN\Vote_status');

        //return $this->belongsTo('App\Models\MAYDAN\Vote_status', 'vote_status_id', 'id');
    }
    
}
