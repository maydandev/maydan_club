<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Prediction;
use App\Models\MAYDAN\Post;
use App\Models\MAYDAN\Subdomain;
use App\Models\User;
 
class PredictionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    
        public function predictors($id )
    {


 
   
     $prediction = Prediction::select('predictions.*')
                    ->with('post')
                    ->leftjoin('posts' , 'posts.id' , '=' , 'predictions.post_id')

                

                    
                    ->find($id);
      
   
   
 

if($prediction->prediction_type_id == 1 ) {
 // Final result
 
     $users = User::select('users.id' , 'users.email' ,  'users.image' , 'users.first_name' , 'users.last_name' , 'users.city' ,
           'users.address' , 'users.phone_number' ,'users.birthday' , 'users.created_at')
               
               
            ->leftjoin('final_result_user_predictions' , 'final_result_user_predictions.user_id' , '=' ,'users.id')    
            ->leftjoin('final_result_predictions' , 'final_result_predictions.id' , '=' ,'final_result_user_predictions.final_result_prediction_id')    

              -> where('final_result_predictions.prediction_id' , $prediction->id)
              
               ->groupby('users.id' , 'users.email' , 'users.image' , 'users.first_name' , 'users.last_name' , 'users.city' ,
           'users.address' , 'users.phone_number' ,'users.birthday' , 'users.created_at')
               ->paginate(15);
               
               
 
}elseif($prediction->prediction_type_id == 2 ) { 
    
    // First scorer
    
    
     $users = User::select('users.id' , 'users.email' ,  'users.image' , 'users.first_name' , 'users.last_name' , 'users.city' ,
           'users.address' , 'users.phone_number' ,'users.birthday' , 'users.created_at')
               
               
            ->leftjoin('first_goal_user_predictions' , 'first_goal_user_predictions.user_id' , '=' ,'users.id')    
            ->leftjoin('first_goal_predictions' , 'first_goal_predictions.id' , '=' ,'first_goal_user_predictions.first_goal_prediction_id')    

              -> where('first_goal_predictions.prediction_id' , $prediction->id)
              
               ->groupby('users.id' , 'users.email' , 'users.image' , 'users.first_name' , 'users.last_name' , 'users.city' ,
           'users.address' , 'users.phone_number' ,'users.birthday' , 'users.created_at')
               ->paginate(15);
    
    
}elseif($prediction->prediction_type_id == 3 ) { 
    
   //  Final lineup
   
   
   
       $users = User::select('users.id' , 'users.email' ,  'users.image' , 'users.first_name' , 'users.last_name' , 'users.city' ,
           'users.address' , 'users.phone_number' ,'users.birthday' , 'users.created_at')
               
               
            ->leftjoin('lineup_user_prediction_players' , 'lineup_user_prediction_players.user_id' , '=' ,'users.id')    
            ->leftjoin('lineup_predictions' , 'lineup_predictions.id' , '=' ,'lineup_user_prediction_players.lineup_prediction_id')    

              -> where('lineup_predictions.prediction_id' , $prediction->id)
              
               ->groupby('users.id' , 'users.email' , 'users.image' , 'users.first_name' , 'users.last_name' , 'users.city' ,
           'users.address' , 'users.phone_number' ,'users.birthday' , 'users.created_at')
               ->paginate(15);
    
    
    
    
    
}else{
    
  $users = User::where('id' , 0)->paginate(15);
    
} 	
   
    
  


 
       
               
       
       
    
      
   
 
       return view('MAYDAN.predictions.predictors')
        ->with('prediction',$prediction)
    
         ->with('users',$users)
        
        
 ;



 

    }
    
    
    

    public function index()
    {
        
      $Application = Auth::user()->Application();

        
 
                    
                    

          
         
     $predictions = Prediction::select('predictions.*')
                    ->with('post')
                    ->leftjoin('posts' , 'posts.id' , '=' , 'predictions.post_id')
                  //  ->where('posts.application_id' , $Application->id)
                    ->where('predictions.is_active' , 1)
                    ->with('final_result_predictions')
                    ->with('first_goal_predictions')
                    ->with('lineup_predictions')
                    
                    

                    
                    ->paginate(15);
                    

                    
                     
 
        return view('MAYDAN.predictions.predictions')->with('predictions' , $predictions)

        ;

    }




 




        public function create()
    {

          return view('MAYDAN.predictions.prediction_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, []);


      $post = new Post ();

 $post->post_type_id = 5;
 
   $save = $post->save();


    $prediction = new Prediction ();

    $prediction->prediction_type_id = 1; 
    $prediction->post_id = $post->id; 
    
  
      $save = $prediction->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/predictions/'.$prediction->id.'">prediction</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:predictions,id',]);

    $prediction = Prediction::find($id);
    $next = Prediction::where('id','>',$id)->min('id');
    $previous = Prediction::where('id','<',$id)->max('id');
       return view('MAYDAN.predictions.prediction_view')
        ->with('prediction',$prediction)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $prediction = Prediction::find($id); 

        
       $update =  $prediction->update();

       if($update) {
        \Session::flash('message', ' prediction was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $prediction = Prediction::find($id);
      $delete =  $prediction->delete();

                   if($delete) {
        \Session::flash('message', ' prediction was deleted sucssesfily ');
          return back();
       }

    }
}
