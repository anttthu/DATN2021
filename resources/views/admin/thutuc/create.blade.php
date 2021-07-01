@extends('admin.layouts.master')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });

    </script>
@endsection
@section('title', 'Thêm mới thủ tục')
@section('content')

    <div class="page-header">
        <h4>Quản lý thủ tục</h4>
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
            <h6 class="m-0 font-weight-bold text-primary">Thủ tục</h6>
        </div>
        <div class="row" style="margin: 5px">
            <div class="col-lg-12">
                <form role="form" action="{{ route('thu-tuc.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="form-group">
                        <label>Mã thủ tục</label>
                        <input class="form-control" name="mathutuc" placeholder="Nhập tên mã thủ tục">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Tên thủ tục</label>
                        <input class="form-control" name="tenthutuc" placeholder="Nhập tên thủ tục">
                    </fieldset>

                    <div class="form-group">
                        <label>Danh mục lĩnh vực</label>
                        <select class="form-control" name="id_linhvuc">
                            <option value="">Chọn lĩnh vực</option>
                            @foreach ($linhvuc as $lv)
                                <option value="{{ $lv->id }}">{{ $lv->tenlinhvuc }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Cấp thực hiện</label>
                        <select class="form-control" name="cap_thuc_hien_id">
                            <option value="">Chọn cấp thực hiện</option>
                            @foreach ($cap as $item)
                                <option value="{{ $item->id }}">{{ $item->ten_cap }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mô tả</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mota"></textarea>
                    </div>

                    <label>Trình tự</label>
                    <textarea id="summernote" name="trinh_tu"></textarea>

                    <label class="mt-4">File biểu mẫu</label>
                    <div id="tenfile">

                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="files[]" multiple>
                        <label class="custom-file-label" for="customFile">Chọn file</label>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
