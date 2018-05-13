<?php

namespace App\Http\Controllers\Backend;

use App\Models\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public  function  index()
    {
        $dataNews = News::all();
        $stt = 0;
        return view('backend.news.index', compact('stt', 'dataNews'));
    }

    public function  create()
    {
        return view('backend.news.create');
    }

    public function  processCreate(Requests\CreateNewsRequest $request)
    {
        $news =  new News();
        $news->title_en = $request->get('title_en');
        $news->title_vi = $request->get('title_vi');
        $news->image = $request->get('image');
        $news->user_create = \Auth::user()->fullname;
        $news->active = $request->get('active');
        //english
        $news->meta_title_en = $request->get('meta_title_en');
        $news->meta_description_en = $request->get('meta_description_en');
        $news->meta_keyword_en = $request->get('meta_keyword_en');
        $news->description_en = $request->get('description_en');
        //vietnamese
        $news->meta_title_vi = $request->get('meta_title_vi');
        $news->meta_description_vi = $request->get('meta_description_vi');
        $news->meta_keyword_vi = $request->get('meta_keyword_vi');
        $news->description_vi = $request->get('description_vi');

        if ($news->save()) {
            return redirect()->route('news-index')->with('success', 'Add News sucessfully');
        } else {
            return redirect()->back()->withErrors('Error Add News');
        }
    }

    public function  showContent($id)
    {
        $showContent = News::find($id);
        return view('backend.news.view_content', compact('showContent'));
    }

    public function  edit($id)
    {
        $editProject = News::find($id);
        return view('backend.news.edit', compact('editProject'));
    }

    public function processEdit(Requests\UpdateProjectRequest $request,$id)
    {
        $news =  News::find($id);
        if ($news) {
            $news->title_en = $request->get('title_en');
            $news->title_vi = $request->get('title_vi');
            $news->image = $request->get('image');
            $news->user_create = \Auth::user()->fullname;
            $news->active = $request->get('active');
            //english
            $news->meta_title_en = $request->get('meta_title_en');
            $news->meta_description_en = $request->get('meta_description_en');
            $news->meta_keyword_en = $request->get('meta_keyword_en');
            $news->description_en = $request->get('description_en');
            //vietnamese
            $news->meta_title_vi = $request->get('meta_title_vi');
            $news->meta_description_vi = $request->get('meta_description_vi');
            $news->meta_keyword_vi = $request->get('meta_keyword_vi');
            $news->description_vi = $request->get('description_vi');

            if ($news->save()) {
                return redirect()->route('project-index')->with('success', 'Edit News sucessfully');
            } else {
                return redirect()->back()->withErrors('Error Edit News');
            }
        } else {
            return redirect()->back()->withErrors('Error Edit News');
        }

    }

    public function delete($id)
    {
        $news= News::find($id);
        if ($news) {
            $news->delete();
            return redirect()->back()->with('success', 'Delete News sucessfully');
        } else {
            return redirect()->back()->withErrors('Error News project');
        }
    }
}
