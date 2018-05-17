<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

    public function edit()
    {
        return view('backend.user.edit');
    }

    public function processEdit(Requests\UpdateUserRequest $request)
    {
        $user = User::find(Auth::user()->id);

        $user->fullname = $request->get('fullname');
        $user->image = $request->get('image');
        if($request->get('password')!='') {
            $user->password = bcrypt($request->get('password'));
        }

        if ($user->save()) {
            if($request->get('password')!='') {
                Auth::logout();
                return redirect('login')->withErrors('Login after change password');
            } else {
                return redirect()->route('dashboard')->with('success', 'Update info user successfully');
            }
        } else {
            return redirect()->back()->withErrors('Error Edit User');
        }

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
