<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Support\Helper;
class DatabaseController extends Controller
{

    public function createTable()
    {
        \Artisan::call('migrate');
        \Artisan::call('db:seed');
    }
}
