<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function  index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->get();
        $stt = 0;
        return view("backend.contact.index", compact('stt','contact'));
    }
}
