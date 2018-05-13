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

    public function processCreate(Requests\CreateUserRequest $request)
    {
        $user = new User();
        $user->username = $request->get('username');
        $user->fullname = $request->get('fullname');
        $user->email = $request->get('email');
        $user->image = $request->get('image');
        $user->password = bcrypt($request->get('password'));
        if ($user->save()) {
            return redirect()->route('user-index')->with('success', 'Add User sucessfully');
        } else {
            return redirect()->back()->withErrors('Error Add User');
        }
    }
    public function delete($id)
    {
        $user= User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'Delete User sucessfully');
        } else {
            return redirect()->back()->withErrors('Error User project');
        }
    }
}
