<?php

namespace App\Models\MAYDAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote_question extends Model
{
    use HasFactory;

    public function options()
    {
    
        
       
                   $relation = $this->hasMany('App\Models\MAYDAN\Vote_question_option');

     $relation->getQuery()
    ->leftjoin('vote_options','vote_options.id','=','vote_question_options.vote_option_id')
   //  ->select('vote_question_options.id','vote_question_options.vote_option_id' ,'vote_options.vote_option' , 'vote_question_options.vote_question_id');
        ->select('vote_question_options.*' , 'vote_options.vote_option' );

   // $relation->getQuery()
    // ->leftjoin('vote_options','vote_options.id','=','vote_question_options.vote_option_id')
      //   ->select('vote_question_options.vote_option_id'
        //                ,'vote_options.vote_option');

    return $relation;
    
    
    }

}
