@extends('admin.layouts.master')

@section('title', 'Thêm mới lĩnh vực')

@section('content')

    <div class="page-header">
        <h4>Quản lý lĩnh vực</h4>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

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
            <h6 class="m-0 font-weight-bold text-primary">Lĩnh Vực</h6>
        </div>
        <div class="row" style="margin: 5px">
            <div class="col-lg-12">
                <form role="form" action="{{ route('LinhVuc.store') }}" method="post">

                    @csrf
                    <fieldset class="form-group">
                        <label>Mã lĩnh vực</label>
                        <input class="form-control" name="malinhvuc" placeholder="Nhập tên mã lĩnh vực">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Tên lĩnh vực</label>
                        <input class="form-control" name="tenlinhvuc" placeholder="Nhập tên lĩnh vực">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Mô tả</label>
                        <input class="form-control" name="mota" placeholder="Nhập mô tả">
                    </fieldset>


                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
