<?php

namespace App\Http\Controllers\API;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use session;
use DateTime;
use DB;
use App;
use Auth;
use Carbon\Carbon;
use App\MAYDAN\Module;
class ModuleAPIController extends APIController
{
    

             //////////////////////////////////modules/////////////////////////////////


                    public function modules(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $modules = Module::select('modules.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "modules retrieved successfully" : "modules retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$modules);
                    return $check_success;



                                    }


                    public function show_module(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['module_id' => 'required|exists:modules,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $module_id =  $request->module_id;
                    // check_failure
                    $module = Module::select('modules.*')->find($module_id);

                    $ResponseMessage =  ($lang=='ar') ?  "module retrieved successfully" : "module retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$module);
                    return $check_success;



                                    }


                    public function add_module(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'sorting' => 'required',
                        'app_type' => 'required',
                        'user_type_ids' => 'required',
                        'parent_id' => 'required',
                        'icon' => 'required',
                        'image' => 'required',
                        'route' => 'required',
                        'en_name' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $module = new Module ();
      $module->is_active = ($request->is_active) ? $request->is_active : 0;
  $module->sorting = $request->sorting;
  $module->app_type = $request->app_type;
  $module->user_type_ids = $request->user_type_ids;
  $module->parent_id = $request->parent_id;
  $module->icon = $request->icon;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/modules';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $module->image = '/'.$destinationPath."/".$fileName;

      }}
  $module->route = $request->route;
  $module->en_name = $request->en_name;
  $module->name = $request->name;



                        $save = $module->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "module saved successfully" : "module saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$module);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_module(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $module_id =  $request->module_id;
                    


         $conditions = [ 'module_id' => 'required|exists:modules,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $module = Module::find($module_id);

                    // update
      $module->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->sorting)) {
  $module->sorting = $request->sorting;
                                   }  if(isset($request->app_type)) {
  $module->app_type = $request->app_type;
                                   }  if(isset($request->user_type_ids)) {
  $module->user_type_ids = $request->user_type_ids;
                                   }  if(isset($request->parent_id)) {
  $module->parent_id = $request->parent_id;
                                   }  if(isset($request->icon)) {
  $module->icon = $request->icon;
                                   }  if(isset($request->image)) {
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/modules';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $module->image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->route)) {
  $module->route = $request->route;
                                   }  if(isset($request->en_name)) {
  $module->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $module->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('modules');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $module->$key = $value;
      // }
      //  }
                  $module->update();
                    $ResponseMessage =  ($lang=='ar') ?  "module updated successfully" : "module updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$module);

                    return $check_success;

               }



                    public function delete_module(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['module_id' => 'required|exists:modules,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $module_id =  $request->module_id;

                    $module = Module::select('modules.*')->find($module_id);
                    $delete =  $module->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "module deleted successfully" : "module deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}