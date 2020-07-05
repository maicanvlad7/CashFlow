<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Money;

class Status extends Model
{
    //
    protected $table = 'status';
    
    public function money()
    {
        return $this->hasMany('App\Money');
    }
}
