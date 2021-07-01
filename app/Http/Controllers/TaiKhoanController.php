<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\PasswordUpdateRequest;

class TaiKhoanController extends Controller
{
    public function edit()
    {
        $user = auth()->user(); //lay thong tin user hien tai
        return view('congdan.chinh_sua_tk', compact('user'));
    }

    public function update(UpdateUserRequest $request)
    {
        auth()->user()->update(request()->all());
        toastr()->success('Cập nhật thông tin thành công');
        return redirect('GioiThieu');
    }

    public function chinhSuaMatKhau()
    {
        return view('congdan.doi-mat-khau');
    }

    public function capNhatMatKhau(PasswordUpdateRequest $request)
    {
        $password = Hash::make($request->new_password);
        auth()->user()->update(['password' => $password]);
        toastr()->success('Cập nhật mật khẩu thành công');
        return back();
    }
}
