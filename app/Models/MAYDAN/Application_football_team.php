<?php

namespace App\Models\MAYDAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application_football_team extends Model
{
    use HasFactory;


       
    public function football_team()
    {
        return $this->belongsTo('App\Models\MAYDAN\Football_team');
    }
}
