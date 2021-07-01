@extends('admin.layouts.master')

@section('title')
    Danh sách hồ sơ
@endsection

@section('content')
    <div class="page-header">
        <h4>Quản lý hồ sơ</h4>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hồ Sơ</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Số biên nhận</th>
                            <th>Tên người nộp</th>
                            <th>SDT</th>
                            <th>Ngày hẹn trả</th>
                            <th>Trạng thái hồ sơ</th>
                            <th>Thủ tục</th>
                            @if (auth()->user()->role_id != 1)
                                <th>Cập nhật hồ sơ</th>
                            @endif
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hoso as $key => $value)
                            <tr>
                                <td>{{ $value->SoBienNhan }}</td>
                                <td>{{ $value->TenNguoiNop }}</td>
                                <td>{{ $value->SDT }}</td>
                                <td>{{ $value->ngayhentra }}</td>
                                <td>{{ $value->TrangThai->name }}</td>
                                <td>
                                    <a href="{{ route('show_tt', ['thu_tuc' => $value->id_thutuc]) }}">
                                        <button class="btn btn-primary edit" type="button">
                                            Xem
                                        </button>
                                    </a>
                                </td>
                                @if (auth()->user()->role_id != 1)
                                    <td>
                                        <a href="{{ route('quan-ly-ho-so.edit', ['quan_ly_ho_so' => $value->id]) }}">
                                            <button class="btn btn-primary edit" type="button">
                                                Thực hiện
                                            </button>
                                        </a>
                                    </td>
                                @endif
                                <td>
                                    <a href="{{ route('theo-doi-ho-so.show', ['hoso' => $value->id]) }}">
                                        <button class="btn btn-primary" type="button">
                                            Xem
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pull-right">{{ $hoso->links() }}</div>
            </div>
        </div>
    </div>
@endsection
