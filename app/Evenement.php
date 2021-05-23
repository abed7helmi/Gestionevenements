<?php

namespace App;

use Illuminate\Database\Eloquent\Model;






class Evenement extends Model
{

    public function Organisateur(){
        return $this->belongsTo('App\User');
    }
}
