<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DatabaseController extends Controller
{

    public function createTable()
    {
        \Artisan::call('migrate');
    }
}
