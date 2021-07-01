@extends('congdan.layouts.header')
@section('conten')
    <div class="container">
        @if ($errors->any())
        <h1>{{ $errors->first() }}</h1>
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
                <label class="m-0 font-weight-bold text-primary">Thông tin tài khoản</label>
            </div>
            <div class="row p-3">
                <div class="col-lg-12">
                    <div>
                        <form role="form" action="{{ url('cap-nhat-tai-khoan') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $user->role_id }}" name="role_id">
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

                            <button type="submit" class="form-control btn btn-success mb-4 mt-4">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
