<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Workflow;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['description','name','status'];

    public function workflow()
    {
        return $this->hasMany('App\Workflow');
    }
}
