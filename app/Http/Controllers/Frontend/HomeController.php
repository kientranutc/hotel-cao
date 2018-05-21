<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function  index()
    {
        $projectNew = Project::where('active', 1)->where('project_old', 1)->orderBy('created_at', 'DESC')->take(3)->get();
        
        $projectOld = Project::inRandomOrder()->where('active', 1)->where('project_old', 0)->orderBy('created_at', 'DESC')->take(3)->get();
        $news = News::where('active', 1)->orderBy('created_at', 'DESC')->take(6)->get();
        return view('frontend.home', compact('projectNew', 'projectOld','news'));
    }
}
