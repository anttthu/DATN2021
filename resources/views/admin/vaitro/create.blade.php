@extends('admin.layouts.master')

@section('title', 'Thêm mới lĩnh vực')

@section('content')

    <div class="page-header">
        <h4>Quản lý vai trò</h4>
    </div>

    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Vai Trò</h6>
        </div>
        <div class="row" style="margin: 5px">
            <div class="col-lg-12">
                <form role="form" action="{{ route('vai-tro.store') }}" method="post">
                    @csrf
                    <fieldset class="form-group">
                        <label>Tên vai trò</label>
                        <input class="form-control" name="name" placeholder="Nhập tên vai trò">
                    </fieldset>

                    <button type="submit" class="btn btn-success mb-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
