<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class LanguageController extends Controller
{
    public function postLang($la)
    {
        session(['locale'=>$la]);
        return redirect()->back();
    }
}
