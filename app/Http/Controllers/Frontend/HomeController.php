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
        $project = Project::where('active', 1)->orderBy('created_at', 'DESC')->take(6)->get();
        $news = News::where('active', 1)->orderBy('created_at', 'DESC')->take(6)->get();
        return view('frontend.home', compact('project', 'news'));
    }
}
