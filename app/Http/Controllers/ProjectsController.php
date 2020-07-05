<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;

class ProjectsController extends Controller
{
    public function display()
    {
        $data = Project::paginate(7);
        $ongoing = Project::where('status', 'ONGOING')->count();
        $over = Project::where('status', 'TERMINAT')->count();

        
        return view('content.projectsTable', [
            'data' => $data,
            'ongoing' => $ongoing,
            'over' => $over
            ]);
    }

    public function store()
    {
        Project::create(request()->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|string|in:ONGOING,TERMINAT'
        ]));

        return back();
    }

    public function destroy($id)
    {
        Project::where('id', $id)->delete();
    }
}
