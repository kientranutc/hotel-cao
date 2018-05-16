<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Support\Helper;

class ContactController extends Controller
{
    public  function  index()
    {
        return view('frontend.about');
    }

    public function  processContact(Request $request)
    {
        $helper = new Helper();
      $contact = new Contact();
      $contact->name =$request->get('name', '');
      $contact->email =$request->get('email','');
      $contact->content =$request->get('content','');
      if ($contact->save()) {
          $helper::sendEmail ('mail.mailcontact', $request->all(),env('MAIL_RE'), 'Thông tin liên hệ từ khách hàng ');
          return redirect()->back();
      } else {
          echo "<script>alert('lỗi gửi thông tin liện hệ từ khách hàng')</script>";
      }
    }
}
