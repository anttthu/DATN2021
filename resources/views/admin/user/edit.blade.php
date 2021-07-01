@extends('admin.layouts.master')

@section('title', 'Thêm mới lĩnh vực')

@section('content')

    <div class="page-header">
        <h4>Quản lý người dùng</h4>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ $errors->first() }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Người Dùng</h6>
        </div>
        <div class="row" style="margin: 5px">
            <div class="col-lg-12">
                <form role="form" action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
                    @csrf
                    @method('patch')
                    <fieldset class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="name" placeholder="Nhập tên" required type="text"
                            value="{{ $user->name }}">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" placeholder="Nhập email" required type="email"
                            value="{{ $user->email }}">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" name="SDT" placeholder="Nhập số điện thoại" type="text"
                            value="{{ $user->SDT }}">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>CMND/CCCD</label>
                        <input class="form-control" name="CMND_CCCD" placeholder="Nhập CMND/CCCD" type="text"
                            value="{{ $user->CMND_CCCD }}">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Ngày sinh</label>
                        <input class="form-control" name="NgaySinh" placeholder="Nhập ngày sinh" type="date"
                            value="{{ $user->NgaySinh }}">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="DiaChi" placeholder="Nhập địa chỉ" type="text"
                            value="{{ $user->DiaChi }}">
                    </fieldset>

                    <label>Vai trò</label>
                    <select class="custom-select mb-4" name="role_id">
                        <option selected value="">Chọn vai trò</option>
                        @foreach ($roles as $item)
                            <option {{ $user->role_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-success mb-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
