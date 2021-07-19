<?php

namespace App\Models\MAYDAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo('App\Models\MAYDAN\Post');
    }


    public function prediction_type(){



        return $this->belongsTo('App\Models\MAYDAN\Prediction_type');



    }
    
    
        public function final_result_predictions(){



        return $this->HasOne('App\Models\MAYDAN\Final_result_prediction');



    }
    
    
           public function lineup_predictions(){



        return $this->HasOne('App\Models\MAYDAN\Lineup_prediction');



    }
    
              public function first_goal_predictions(){



        return $this->HasOne('App\Models\MAYDAN\First_goal_prediction');



    }
    
    
    
}
