<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function  index()
    {
        $limit = 8;
        $news = News::where('active', 1)->paginate($limit);
        return view('frontend.news', compact('news'));
    }
}
