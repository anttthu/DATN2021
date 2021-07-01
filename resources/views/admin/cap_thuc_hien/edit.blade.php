@extends('admin.layouts.master')

@section('title', 'Thêm mới lĩnh vực')

@section('content')

    <div class="page-header">
        <h4>Quản lý cấp</h4>
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
            <h6 class="m-0 font-weight-bold text-primary">Cấp</h6>
        </div>
        <div class="row" style="margin: 5px">
            <div class="col-lg-12">
                <form role="form" action="{{ route('cap-thuc-hien.update', ['cap_thuc_hien' => $cap_thuc_hien->id]) }}"
                    method="post">
                    @csrf
                    @method('patch')
                    <fieldset class="form-group">
                        <label>Tên cấp</label>
                        <input class="form-control" name="ten_cap" placeholder="Nhập tên cấp"
                            value="{{ $cap_thuc_hien->ten_cap }}">
                    </fieldset>

                    <button type="submit" class="btn btn-success mb-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
