<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App;

class Test extends Controller
{
     
    public function getlocal()
    {
        
     
        $locale = App::currentLocale();

        return $locale;

    }

     
}
