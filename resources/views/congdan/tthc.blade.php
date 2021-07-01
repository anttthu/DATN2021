@extends('congdan.layouts.header')
@section('conten')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thủ tục hành chính</li>
            </ol>
        </nav>
        <form action="/tthc" method="get">
            <div class="form-search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nhập từ khoá tìm kiếm"
                        aria-label="Recipient's username" aria-describedby="button-addon2"
                        value="{{ request('tenthutuc') }}" name="tenthutuc" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark" type="button" id="advanced-btn">
                            @if (request()->has('linhvuc_id'))
                                Tìm kiếm rút gọn
                            @else
                                Tìm kiếm nâng cao
                            @endif
                        </button>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">Tìm kiếm</button>
                    </div>
                </div>
            </div>

            @if (request()->has('linhvuc_id'))
                <div class="card mb-4" id="advanced-box">
                    <div class="card-body">
                        <div class="row">
                            <p class="col-2">Lĩnh vực</p>
                            <select class="custom-select col-10" name="linhvuc_id">
                                <option selected value="">Chọn lĩnh vực</option>
                                @foreach ($linhvuc as $item)
                                    <option {{ request('linhvuc_id') == $item->id ? 'selected' : '' }}
                                        value="{{ $item->id }}">{{ $item->tenlinhvuc }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            @else
                <div class="card mb-4 d-none" id="advanced-box">
                    <div class="card-body">
                        <div class="row">
                            <p class="col-2">Lĩnh vực</p>
                            <select class="custom-select col-10" name="linhvuc_id">
                                <option selected value="">Chọn lĩnh vực</option>
                                @foreach ($linhvuc as $item)
                                    <option value="{{ $item->id }}">{{ $item->tenlinhvuc }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            @endif
        </form>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Mã thủ tục</th>
                                <th>Tên thủ tục</th>
                                <th>Lĩnh vực</th>
                                <th>Câp thực hiện</th>
                                <th>Chi tiết thủ tục</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($thutuc as $key => $value)
                                <tr>
                                    <td>{{ $value->mathutuc }}</td>
                                    <td>{{ $value->tenthutuc }}</td>
                                    <td>{{ $value->LinhVuc->tenlinhvuc }}</td>
                                    <td>{{ $value->CapThucHien->ten_cap }}</td>
                                    <td>
                                        <a href="{{ route('show_tt', $value->id) }}" class="btn btn-info">Xem</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">{{ $thutuc->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#advanced-btn").on("click", function() {
            if ($("#advanced-box").hasClass("d-none")) {
                $("#advanced-box").removeClass("d-none");
                $("#advanced-btn").text('Tìm kiếm rút gọn');
            } else {
                $("#advanced-box").addClass("d-none");
                $("#advanced-btn").text('Tìm kiếm nâng cao');
            }
        })

    </script>
@endsection
