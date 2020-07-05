<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Status;

class Money extends Model
{
    protected $table = 'money';
    protected $fillable = ['details','amount','status_id'];

    public function status()
    {
        return $this->hasOne('App\Status','id','status_id');
    }
}
