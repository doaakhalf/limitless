<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class careers extends Model
{
    //
    public function applicant()
    {
        return $this->belongsToMany('App\applicant');
    }
}
