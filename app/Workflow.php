<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Workflow extends Model
{
    protected $fillable = ['project_id','task_name','desc','status'];
    protected $table = 'workflows';


    public function project()
    {
        return $this->hasOne('App\Project','id','project_id');
    }
}
