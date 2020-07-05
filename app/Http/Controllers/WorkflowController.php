<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workflow;
use App\Project;

class WorkflowController extends Controller
{
    public function display()
    {
        //aducem doar proiectele ongoing
        $projects = Project::where('status', 'ONGOING')->paginate(7);
        //pentru stats din header
        $ongoing  = Workflow::where('status', 'ONGOING')->count();
        $terminate = Workflow::count() - $ongoing;

        $data = Workflow::with('project')->where('status', 'ONGOING')->paginate(7);

        return view('content.workflowTable',[
            'data'      => $data,
            'projects'  => $projects,
            'ongoing'   => $ongoing,
            'done'      => $terminate
        ]); 
    }

    public function store()
    {
        Workflow::create(request()->validate([
            'task_name'  => 'required|string',
            'desc'       => 'required',
            'project_id' => 'required'
        ]));

        return back();
    }

    public function markAsDone($id)
    {
        Workflow::where('id', $id)->update(['status' => 'TERMINAT']);

        return back();
    }
}
