@extends('congdan.layouts.header')
@section('conten')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Theo dõi hồ sơ</li>
            </ol>
        </nav>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>STT</th>
                                <th>Số biên nhận</th>
                                <th>Tên người nộp</th>
                                <th>Email</th>
                                <th>SDT</th>
                                <th>Ngày hẹn trả</th>
                                <th>Trạng thái hồ sơ</th>
                                <th>Thủ tục</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($hoso as $key => $value)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $value->SoBienNhan }}</td>
                                    <td>{{ $value->TenNguoiNop }}</td>
                                    <td>{{ $value->Email }}</td>
                                    <td>{{ $value->SDT }}</td>
                                    <td>{{ $value->ngayhentra }}</td>
                                    <td>{{ $value->TrangThai->name }}</td>
                                    <td>
                                        <a href="{{ route('show_tt', ['thu_tuc' => $value->id_thutuc]) }}">
                                            <button class="btn btn-info edit" type="button">
                                                Xem
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('theo-doi-ho-so.show', ['hoso' => $value->id]) }}">
                                            <button class="btn btn-info edit" type="button">
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
    </div>
@endsection
