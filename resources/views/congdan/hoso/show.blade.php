@extends('congdan.layouts.header')
@section('conten')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chi tiết hồ sơ</li>
            </ol>
        </nav>
        <div>
            <h1>{{ $hoso->tenthutuc }}</h1>
            @if ($hoso->FileDinhKem->count() > 0)
                <p>
                    File đính kèm : <br>
                    @foreach ($hoso->FileDinhKem as $item)
                        <a target="_blank" href="/{{ $item->file_path }}" style="color: #ce7a58;">{{ $loop->index + 1 }}.
                            {{ $item->file_name }}</a><br>
                    @endforeach
                </p>
            @endif
            <p>Tên người nộp : {{ $hoso->TenNguoiNop }}</p>
            <p>Email : {{ $hoso->Email }}</p>
            <p>SDT : {{ $hoso->SDT }}</p>
            <p>Địa chỉ : {{ $hoso->DiaChi }}</p>
            <p>CMND/CCCD : {{ $hoso->CMND_CCCD }}</p>
            <p>Ngày hẹn trả : {{ $hoso->ngayhentra }}</p>
            <p>Trạng thái : {{ $hoso->TrangThai->name }}</p>
            <div>
                <h5>Chú thích</h5>
                <p class="ml-3">{!! $hoso->chu_thich !!}</p>
            </div>
        </div>
    </div>
@endsection
