<?php

namespace App\Models\MAYDAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote_question_option extends Model
{
    use HasFactory;

        
    public function vote_option(){
        return $this->belongsTo('App\Models\MAYDAN\Vote_option');
     }
}
