@extends('admin.layouts.master')

@section('title')
    Danh sách lĩnh vực
@endsection

@section('content')
    <div class="page-header">
        <h4>Quản lý lĩnh vực</h4>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lĩnh Vực</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã lĩnh vực</th>
                            <th>Tên lĩnh vực</th>
                            <th>Mô tả</th>

                            @if (auth()->user()->isAdmin())
                                <th>Thao tác</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($linhvuc as $key => $value)

                            <tr>
                                <td>{{ $value->malinhvuc }}</td>
                                <td>{{ $value->tenlinhvuc }}</td>
                                <td>{{ $value->mota }}</td>
                                @if (auth()->user()->isAdmin())
                                    <td>
                                        <button class="btn btn-primary edit" title="{{ 'Sửa ' . $value->malinhvuc }}"
                                            data-toggle="modal" data-target="#edit" type="button"
                                            data-id="{{ $value->id }}"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger delete" title="{{ 'Xóa ' . $value->malinhvuc }}"
                                            data-toggle="modal" data-target="#delete" type="button"
                                            data-id="{{ $value->id }}"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                @endif
                            </tr>

                        @endforeach
                    </tbody>
                </table>
                <div class="pull-right">{{ $linhvuc->links() }}</div>
            </div>
        </div>
    </div>

    <!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa lĩnh vực <span class="title"></span></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                            <form role="form">
                                <input type="hidden" class="idLinhVuc" name="id">
                                <fieldset class="form-group">
                                    <label>Mã lĩnh vực</label>
                                    <input class="form-control malinhvuc" name="malinhvuc"
                                        placeholder="Nhập tên mã lĩnh vực">
                                    <span class="error" style="color: red;font-size: 1rem;"></span>
                                </fieldset>

                                <fieldset class="form-group">
                                    <label>Tên lĩnh vực</label>
                                    <input class="form-control tenlinhvuc" name="tenlinhvuc"
                                        placeholder="Nhập tên lĩnh vực">
                                    <span class="error" style="color: red;font-size: 1rem;"></span>
                                </fieldset>

                                <fieldset class="form-group">
                                    <label>Mô tả</label>
                                    <input class="form-control mota" name="mota" placeholder="Nhập mô tả">
                                    <span class="error" style="color: red;font-size: 1rem;"></span>
                                </fieldset>
{{--
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select class="form-control status trangthaiLinhVuc" name="status">
                                        <option value="1" class="ht">Hoạt động</option>
                                        <option value="0" class="kht">Không hoạt động </option>
                                    </select>
                                </div> --}}

                                {{-- <fieldset class="form-group">
                                    <label>Trạng thái</label>
                                    <input class="form-control trangthai" name="trangthai" placeholder="Nhập trạng thái">
				                    <span class="error" style="color: red;font-size: 1rem;"></span>
				                </fieldset> --}}

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success update">Lưu</button>
                    <button type="reset" class="btn btn-primary">Làm Lại</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Xóa</button>
                </div>
            </div>
        </div>
    </div>
    <!-- delete Modal-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-left: 183px;">
                    <button type="button" class="btn btn-success del">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                    <div>
                    </div>
                </div>
            </div>
        @endsection
