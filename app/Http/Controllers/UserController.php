<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', 1)->latest()->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated() + ['password' => Hash::make(123456)]);
        toastr()->success('Tạo user thành công');
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update(request()->all());
        toastr()->success('Cập nhật user thành công');
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        toastr()->success('Xoá user thành công');
        return redirect()->route('users.index');
    }
}
