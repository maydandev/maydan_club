<?php

namespace App\Models\MAYDAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote_answer extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo('App\Models\User');
     }
     
     
     
   
       
       public function vote_question_option(){
        return $this->belongsTo('App\Models\MAYDAN\Vote_question_option');
     }
     
}
