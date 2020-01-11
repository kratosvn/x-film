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
        $film = new Film();
        $film->name = $request->name;
        $film->description = $request->description;
        $film->save();
        return redirect('admin/addfilm')->with('thongbao', 'Thêm Thành Công');
    }

    public function getEdit($id)
    {
        $film = Film::where('id', $id)->first();
        return view('admin/edit', ['film' => $film]);
    }

    public function postEdit(Request $request, $id)
    {
        $film = Film::where('id', $id)->first();
        $rules = [
            'name' => 'required|min:3|max:100',
            'description' => 'required'
        ];
        $messages = [
            'name.min' => 'Bạn phải nhập ít nhất 3 đén 100 ký tự',
            'name.max' => 'Bạn phải nhập ít nhất 3 đén 100 ký tự',
            'description.required' => 'Bạn chưa nhập nội dung'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // trả vè thông báo lôi
            return redirect()->back()->withErrors($validator);
        }
        $film = new Film();
        $film->name = $request->name;
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
