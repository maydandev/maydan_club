<?php

namespace App\Models\MAYDAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizze_question extends Model
{
    use HasFactory;

    
    public function options()
    {
    
        
       
                   $relation = $this->hasMany('App\Models\MAYDAN\Quizze_question_option');

     $relation->getQuery()
    ->leftjoin('quizze_options','quizze_options.id','=','quizze_question_options.quizze_option_id')
     ->select('quizze_question_options.id','quizze_question_options.quizze_option_id' ,'quizze_question_options.is_best_answer' ,'quizze_options.quizze_option' , 'quizze_question_options.quizze_question_id');
 

    return $relation;
    
    
    }  
    

}
