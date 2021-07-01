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
                        <form role="form" action="{{ url('cap-nhat-mat-khau') }}" method="post">
                            @csrf
                            <fieldset class="form-group">
                                <label>Mật khẩu cũ</label>
                                <input class="form-control" name="current_password" placeholder="Nhập mật khẩu" required
                                    type="password" autocomplete="off">
                            </fieldset>

                            <fieldset class="form-group">
                                <label>Mật khẩu mới</label>
                                <input class="form-control" name="new_password" placeholder="Nhập mật khẩu" required
                                    type="password" autocomplete="off">
                            </fieldset>

                            <button type="submit" class="form-control btn btn-success mb-4 mt-4">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
