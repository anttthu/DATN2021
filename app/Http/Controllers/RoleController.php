<?php

namespace App\Http\Controllers;

use App\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->paginate(10);
        return view('admin.vaitro.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.vaitro.create');
    }

    public function store()
    {
        $data = request()->validate(['name' => 'required']);
        Role::create($data);
        toastr()->success('Tạo vai trò thành công');
        return redirect()->route('vai-tro.index');
    }

    public function edit(Role $vai_tro)
    {
        return view('admin.vaitro.edit', compact('vai_tro'));
    }

    public function update(Role $vai_tro)
    {
        $data = request()->validate(['name' => 'required']);
        $vai_tro->update($data);
        toastr()->success('Cập nhật vai trò thành công');
        return redirect()->route('vai-tro.index');
    }

    public function destroy(Role $vai_tro)
    {
        $vai_tro->delete();
        toastr()->success('Xoá vai trò thành công');
        return back();
    }
}
