<?php

namespace App;

use Illuminate\Database\Eloquent\Model;






class Evenement extends Model
{
    
    public function organisateur(){
        return $this->belongsTo(User::class,'Organisateur');
    }
}
