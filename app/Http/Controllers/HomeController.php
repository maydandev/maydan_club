<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class HomeController extends Controller
{
    
    public function get_main_modules($app_type = 'admin')
    {

       $mosule_array = module::select('parent_id')
       ->where('parent_id','!=',0)
       ->get()->toArray();
        $modules = module::where('app_type',$app_type)->where('is_active',1)->whereNotIN('id',$mosule_array)->where('parent_id',0)->orderby('sorting')->get();
      return $modules;
    }


    public function get_modules_tree($app_type = 'admin')
    {
        $modules = module::where('app_type',$app_type)->where('is_active',1)->where('parent_id','!=',0)->orderby('sorting')->get();
        $module_array = [];
        foreach($modules as $module){
            $module_array[$module->parent_id][] = $module->id;
        }
      return $module_array;
    }


    public function get_modules_childs($module_id)
    {
         $get_modules_tree = $this->get_modules_tree();
         $get_modules_childs = $get_modules_tree[$module_id];
         return $get_modules_childs;
    }


    public function get_modules_name($module_id)
    {
    $module = module::find($module_id);
    return $module;
    }

}



