<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Eposide;
use App\User;
use Validator;
use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {

        $newEposide = Eposide::all();
        return view('dashboard/index', compact('newEposide'));
    }

    public function getLogin()
    {
        // trả về trang đăng nhập
        return view('admin/login');
    }

    public function postLogin(Request $request)
    {
        //lấy thông tin email và mật khẩu của người dùng
        $credentials = $request->only('email', 'password');
        // kiểm tra thông tin đăng nhập
        $checkLogin = Auth::attempt($credentials);
        // kiểm tra điều kiên
        if ($checkLogin) {
            // đúng đăng nhập thành công
            dd('dang nhap thanh cong');
        } else {
            //sai thông báo lỗi
            return redirect('admin/login')->with("thongbao", "The account or password is incorrect!")->withInput();
        }
    }

    public function getRegister()
    {
        // trả về trang đăng ký.
        return view('admin/register');
    }

    public function postRegister(Request $request)
    {
        //required không được để trống các trường
        $rules = [
            // không đê trông email
            'email' => 'required|email',
            // yêu cầu mk it nhât 8 ky tự
            'password' => 'required|min:8'
        ];
        //thông báo cho người dùng
        $messages = [
            // bắt buộc co email
            'email.required' => 'Email là trường bắt buộc!',
            // mk phải co 8 ky tụ
            'password.min' => 'Mật khẩu ít nhất 8 ký tự!',
            // bắt buộc nhập mk
            'password.required' => 'password là trường bắt buộc!',
        ];
        // sử dụng để validate form
        $validator = Validator::make($request->all(), $rules, $messages);

        //kiểm tra nó validator hay chưa
        if ($validator->fails()){
            // trả vè thông báo lôi
            return redirect()->back()->withErrors($validator);
        }
        // kiểm tra sự tồn tại của email
        $user = User::where('email', $request->email)->first();
        // điều kiện $user khác null
        if($user != null){
            // trả vè thông báo lôi
            return redirect('admin/register')->with("thongbao", 'email đa tồn tại')->withInput();
        }
        //tạo đối tượng user
        $user = new User();
        //lấy thông tin tên người dùng để gán lại cho trường name của user.
        $user->name = $request->name;
        //lây thông tin email người dùng để gán lại cho trường email của user.
        $user->email = $request->email;
        // lấy thông tin mk dể gán lại cho trường password của user
        $user->password = bcrypt($request->password);
        // lưu dữ liệu
        $user->save();
        // trả về trang đăng nhập.
        return redirect('admin/login');
    }
}