<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Eposide;
use App\User;
use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $newEposide = Eposide::all();
        return view('dashboard/index', compact('newEposide'));
    }

    public function GetLogin()
    {
        return view('admin/login');
    }

    public function PostLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $checkLogin = Auth::attempt($credentials);
        if ($checkLogin) {
            dd('dang nhap thanh cong');
        } else {
            return redirect('admin/login')->with("thongbao", "The account or password is incorrect!")->withInput();
        }
    }

    public function getRegister()
    {
        return view('admin/register');
    }

    public function postRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('admin/login');
    }
}