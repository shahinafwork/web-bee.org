<?php

namespace App\Models;
use Carbon\Carbon;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

   public function getEventsWithWorkshops()
   {
      return  $this->hasMany(Workshop::class,'event_id','id');
   }

    public function getFutureEventsWithWorkshops(){     
        return  $this->hasMany(Workshop::class,'event_id','id')->whereDate('start','>',Carbon::today());
    } 
}
