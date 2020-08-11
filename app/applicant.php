<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    //
    public function careers()
    {
        return $this->belongsToMany('App\careers');
    }
}
