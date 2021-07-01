<?php

namespace App\Http\Controllers;

use App\CapThucHien;

class CapThucHienController extends Controller
{
    public function index()
    {
        $cap = CapThucHien::latest()->paginate(10);
        return view('admin.cap_thuc_hien.index', compact('cap'));
    }

    public function create()
    {
        return view('admin.cap_thuc_hien.create');
    }

    public function store()
    {
        $data = request()->validate(['ten_cap' => 'required']);
        CapThucHien::create($data);
        toastr()->success('Tạo tên cấp thành công');
        return redirect()->route('cap-thuc-hien.index');
    }

    public function edit(CapThucHien $cap_thuc_hien)
    {
        return view('admin.cap_thuc_hien.edit', compact('cap_thuc_hien'));
    }

    public function update(CapThucHien $cap_thuc_hien)
    {
        $data = request()->validate(['ten_cap' => 'required']);
        $cap_thuc_hien->update($data);
        toastr()->success('Tạo tên cấp thành công');
        return redirect()->route('cap-thuc-hien.index');
    }

    public function destroy(CapThucHien $cap_thuc_hien)
    {
        $cap_thuc_hien->delete();
        toastr()->success('Xoá tên cấp thành công');
        return back();
    }
}
