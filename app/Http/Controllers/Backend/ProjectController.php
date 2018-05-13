<?php

namespace App\Http\Controllers\Backend;

use App\Models\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{

    public function  index ()
    {
        $dataProject = Project::orderBy('created_at', 'DESC')->get();
        $stt = 0;
        return view('backend.project.index', compact('stt', 'dataProject'));
    }

    public function  create()
    {
        return view('backend.project.create');
    }

    public function  processCreate(Requests\CreateProjectRequest $request)
    {
        $project =  new Project();
        $project->title_en = $request->get('title_en');
        $project->title_vi = $request->get('title_vi');
        $project->image = $request->get('image');
        $project->user_create = \Auth::user()->fullname;
        $project->active = $request->get('active');
        //english
        $project->meta_title_en = $request->get('meta_title_en');
        $project->meta_description_en = $request->get('meta_description_en');
        $project->meta_keyword_en = $request->get('meta_keyword_en');
        $project->description_en = $request->get('description_en');
        //vietnamese
        $project->meta_title_vi = $request->get('meta_title_vi');
        $project->meta_description_vi = $request->get('meta_description_vi');
        $project->meta_keyword_vi = $request->get('meta_keyword_vi');
        $project->description_vi = $request->get('description_vi');

        if ($project->save()) {
            return redirect()->route('project-index')->with('success', 'Add Project sucessfully');
        } else {
            return redirect()->back()->withErrors('Error Add Project');
        }
    }

    public function  showContent($id)
    {
        $showContent = Project::find($id);
        return view('backend.project.view_content', compact('showContent'));
    }

    public function  edit($id)
    {
        $editProject = Project::find($id);
        return view('backend.project.edit', compact('editProject'));
    }

    public function processEdit(Requests\UpdateProjectRequest $request,$id)
    {
        $project =  Project::find($id);
        if ($project) {
            $project->title_en = $request->get('title_en');
            $project->title_vi = $request->get('title_vi');
            $project->image = $request->get('image');
            $project->user_create = \Auth::user()->fullname;
            $project->active = $request->get('active');
            //english
            $project->meta_title_en = $request->get('meta_title_en');
            $project->meta_description_en = $request->get('meta_description_en');
            $project->meta_keyword_en = $request->get('meta_keyword_en');
            $project->description_en = $request->get('description_en');
            //vietnamese
            $project->meta_title_vi = $request->get('meta_title_vi');
            $project->meta_description_vi = $request->get('meta_description_vi');
            $project->meta_keyword_vi = $request->get('meta_keyword_vi');
            $project->description_vi = $request->get('description_vi');

            if ($project->save()) {
                return redirect()->route('project-index')->with('success', 'Edit Project sucessfully');
            } else {
                return redirect()->back()->withErrors('Error Edit Project');
            }
        } else {
            return redirect()->back()->withErrors('Error Edit Project');
        }

    }

    public function delete($id)
    {
        $project= Project::find($id);
        if ($project) {
            $project->delete();
            return redirect()->back()->with('success', 'Delete Project sucessfully');
        } else {
            return redirect()->back()->withErrors('Error delete project');
        }
    }
}
