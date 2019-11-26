<?php


namespace App\Http\Controllers;
use App\eposide;

class HomeController
{
    public function index()
    {
    
    	$new_eposide = Eposide::all(); 
        return view('dashboard/index', compact('new_eposide'));
    }
    public function GetLogin()
    {
        return view('login.login');
    }

    public function PostLogin(LoginRequest $request)
    {
        
    // dd($request->all());

        $name=$request->name;
        $password=$request->password;
        if( Auth::attempt(['name' => $name, 'password' => $password]))
                {
                    return redirect('admin');
                }
            else
                {
                    return  redirect('login')->with("thongbao","Tài khoản hoặc mật khẩu không chính xác !")->withInput();
                }
    }

    public function GetLogout()
    {
        Auth::logout();
        return redirect('login');
    }

}