<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    public function  index()
    {
        $dataBanner = Banner::all();
        $stt=0;
        return view('backend.banner.index', compact('stt', 'dataBanner'));
    }

    public function create()
    {
        return view('backend.banner.create');
    }

    public function  processCreate(Requests\CreateBannerRequest $request)
    {
        $banner =  new Banner();
        $banner->title_en = $request->get('title_en');
        $banner->title_vi = $request->get('title_vi');
        $banner->image = $request->get('image');
        $banner->url = $request->get('url');
        $banner->user_create = \Auth::user()->fullname;
        $banner->active = $request->get('active');
        if ($banner->save()) {
            return redirect()->route('banner-index')->with('success', 'Add Banner sucessfully');
        } else {
            return redirect()->back()->withErrors('Error Add Banner');
        }
    }

    public function edit($id)
    {
        $editBanner = Banner::find($id);
        return view('backend.banner.edit', compact('editBanner'));
    }

    public function  processEdit(Requests\UpdateBannerRequest $request, $id)
    {
        $banner =  Banner::find($id);
        $banner->title_en = $request->get('title_en');
        $banner->title_vi = $request->get('title_vi');
        $banner->image = $request->get('image');
        $banner->url = $request->get('url');
        $banner->active = $request->get('active');
        if ($banner->save()) {
            return redirect()->route('banner-index')->with('success', 'Edit Banner sucessfully');
        } else {
            return redirect()->back()->withErrors('Error Edit Banner');
        }
    }

    public function delete($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            $banner->delete();
            return redirect()->back()->with('success', 'Delete Banner sucessfully');
        } else {
            return redirect()->back()->withErrors('Error delete Banner');
        }
    }
}
