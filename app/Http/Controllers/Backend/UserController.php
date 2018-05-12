<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function  index()
    {
        $dataUser  = User::all();
        $stt = 0;
        return view('backend.user.index', compact('stt', 'dataUser'));
    }

    public function  create()
    {
        return view('backend.user.create');
    }
}
