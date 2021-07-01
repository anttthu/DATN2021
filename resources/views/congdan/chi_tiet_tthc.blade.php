@extends('congdan.layouts.header')
@section('css')
    <style>
        h1,
        h3 {
            color: black;
        }

        .trinh-tu {
            padding-left: 15px;
        }

    </style>
@endsection
@section('conten')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thủ tục hành chính</li>
            </ol>
        </nav>
        <div>
            <h1>{{ $thu_tuc->tenthutuc }}</h1>
            @if ($thu_tuc->BieuMau->count() > 0)
                <p>
                    File biểu mẫu : <br>
                    @foreach ($thu_tuc->BieuMau as $item)
                        <a download href="/{{ $item->file_path }}" style="color: #ce7a58;">{{ $loop->index + 1 }}.
                            {{ $item->file_name }}</a><br>
                    @endforeach
                </p>
            @endif
            <p>Cấp thực hiện : {{ $thu_tuc->CapThucHien->ten_cap }}</p>
            <p>Lĩnh vực : {{ $thu_tuc->LinhVuc->tenlinhvuc }}</p>
            <div>
                <h5>Trình tự thực hiện</h5>
                <p class="trinh-tu">{!! $thu_tuc->trinh_tu !!}</p>
            </div>
            <div>
                <h5>Mô tả</h5>
                <p class="trinh-tu">{{ $thu_tuc->mota }}</p>
            </div>
        </div>
    </div>
@endsection
