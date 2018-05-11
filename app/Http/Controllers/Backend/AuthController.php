<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function  processLogin(Requests\AuthRequest $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (\Auth::attempt(['email' => $email, 'password' => $password],true)) {
          return  view('backend.dashboard');
        } else {
            return redirect()->back()->withErrors("Mật khẩu hoặc email không đúng")->withInput($request->all());
        }


    }
}
