<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Help\Help;
use Route;
use Validator;
use session;
use DateTime;
use DB;
use Auth;
use App;
use Carbon\Carbon;

class APIController extends Controller
{

         public function __construct()
    {
       header("Access-Control-Allow-Origin: *");
    }
       public $successStatus = 200;
       public $APPURL = "http://localhost:8000";


            public function check_failure($all_request,$conditions = []){

        $validator = Validator::make($all_request, $conditions);

        if ($validator->fails()) {
        $errors =  $validator->errors();

       $ResponseMessage = $this->validationErrorsToString($errors);

            //failure or success
            return  response()->json([
            'ResponseCode'=> 0
            , 'ResponseStatus' => 'failure'
            , 'ResponseMessage'=> $ResponseMessage
            ,'data' => $errors ],$this->successStatus);
        }

        return false;
        }


         public function check_success($ResponseMessage,$data){


                       return response()->json([
            'ResponseCode'=> 1
            , 'ResponseStatus' => 'success'
            , 'ResponseMessage'=> $ResponseMessage
            ,'data' => $data],$this->successStatus);

          }

          public function custom_success($ResponseMessage){
                       return response()->json([
            'ResponseCode'=> 1
            , 'ResponseStatus' => 'success'
            , 'ResponseMessage'=> $ResponseMessage
            ,'data' => []],$this->successStatus);
          }

         public function custom_error($ResponseMessage){
                       return response()->json([
            'ResponseCode'=> 0
            , 'ResponseStatus' => 'error'
            , 'ResponseMessage'=> $ResponseMessage
            ,'data' => []],$this->successStatus);
          }



   public function validationErrorsToString($errArray) {
        $valArr = array();
        foreach ($errArray->toArray() as $key => $value) {
            $errStr = $value[0];
            array_push($valArr, $errStr);
        }
        if(!empty($valArr)){
            $errStrFinal = implode(',', $valArr);
        }
        return $errStrFinal;
    }






}