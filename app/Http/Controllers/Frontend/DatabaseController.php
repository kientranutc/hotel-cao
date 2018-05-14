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
        $helper = new Helper();
        $helper::sendEmail('mail.reset',[], 'kienkienutc95@gmail.com', 'test');
//        \Artisan::call('migrate');
    }
}
