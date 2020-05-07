<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
