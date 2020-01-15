<?php


namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use Validator;


class FilmController
{
    public function index(Request $request)
    {

        if (isset($request->keyword)) {
            $key = '%' . $request->keyword . '%';
            $film = Film::where('name', 'like', $key)->get();
        } else {
            $film = Film::all();
        }
        return view('admin/index', ['film' => $film]);
    }

    public function add()
    {
        return view('admin/addfilm');
    }

    public function postAdd(Request $request)
    {
        // không được để trống cac trường required
        $rules = [
            'name' => 'required|min:3|max:100',
            'description' => 'required'
        ];
        // thông báo lỗi cho người dùng
        $messages = [
            'name.min' => 'Bạn phải nhập ít nhất 3 đén 100 ký tự',
            'name.max' => 'Bạn phải nhập ít nhất 3 đén 100 ký tự',
            'description.required' => 'Bạn chưa nhập nội dung'
        ];
        // kiểm tra validate form hay chưa.
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // trả vè thông báo lôi
            return redirect()->back()->withErrors($validator);
        }
        //tạo đối tượng film
        $film = new Film();
        //lấy thông tin tên người dùng để gán lại cho trường name của film.
        $film->name = $request->name;
        //lấy thông tin mô tả để gán lại cho trường description của Film.
        $film->description = $request->description;
        //lưu
        $film->save();
        //trả về thông báo
        return redirect('admin/addfilm')->with('thongbao', 'Thêm Thành Công');
    }

    public function getEdit($id)
    {
        // lấy film  theo id
        $film = Film::where('id', $id)->first();
        //trả về trang sửa
        return view('admin/edit', ['film' => $film]);
    }

    public function postEdit(Request $request, $id)
    {
        // lấy film  theo id
        $film = Film::where('id', $id)->first();
        // khong được để trông các trường
        $rules = [
            'name' => 'required|min:3|max:100',
            'description' => 'required'
        ];
        //thông báo lôi
        $messages = [
            'name.min' => 'Bạn phải nhập ít nhất 3 đén 100 ký tự',
            'name.max' => 'Bạn phải nhập ít nhất 3 đén 100 ký tự',
            'description.required' => 'Bạn chưa nhập nội dung'
        ];
        //kiểm tra nó validate hay chưa
        $validator = Validator::make($request->all(), $rules, $messages);
        // ko hieu
        if ($validator->fails()) {
            // trả vè thông báo lôi
            return redirect()->back()->withErrors($validator);
        }
        //lấy thông tin tên người dùng để gán lại cho trường name của film.
        $film->name = $request->name;
        //lấy thông tin mô tả để gán lại cho trường description của Film.
        $film->description = $request->description;
        $film->save();
        return redirect('admin/edit/' . $id)->with('thongbao', 'Sửa Thành Công');
    }

    public function getDelete($id)
    {
        $film = Film::where('id', $id)->first();
        $film->delete();
        return redirect('admin')->with('thongbao', 'xóa thành công');
    }

}
