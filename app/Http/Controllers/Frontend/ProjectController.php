<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function  index()
    {
        $limit = 1;
        $projectList = Project::where('active',1)->paginate($limit);
        return view('frontend.project', compact('projectList'));
    }
    public function  detail( $id,$slug)
    {
        $projectDetail = Project::find($id);

        return view('frontend.project_detail', compact('projectDetail'));
    }
}
