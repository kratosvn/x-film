<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\eposide;
use App\user;
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
        return view('admin.login');
    }

    public function PostLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            dd('dang nhap thanh cong');
        } else {
            return redirect('login')->with("thongbao", "The account or password is incorrect!")->withInput();
        }
    }
    public function getRegister()
    {
        return view('admin.register');
    }
    public function postRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash('md5', $request->pass);
        $user->save();
        if (Auth::attempt(['email' => '$email', 'password' => '$password'])) {
            dd('dang ky thanh cong');
        }
    }
}