@extends('admin.layouts.master')

@section('title')
    Danh sách hồ sơ
@endsection

@section('content')

    <div class="page-header">
        <h4>Quản lý hồ sơ</h4>
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
            <h6 class="m-0 font-weight-bold text-primary">Hồ Sơ</h6>
        </div>
        <div class="row" style="margin: 5px">
            <div class="col-lg-12">
                <form role="form" action="{{ route('quan-ly-ho-so.update', ['quan_ly_ho_so' => $hoso->id]) }}"
                    method="post">
                    @csrf
                    @method('patch')

                    <input type="hidden" name="nguoicapnhat" value="{{ auth()->id() }}">
                    <fieldset class="form-group">
                        <label>Tên người nộp</label>
                        <input class="form-control" type="text" value="{{ $hoso->TenNguoiNop }}" readonly>
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" value="{{ $hoso->Email }}" readonly>
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" type="text" value="{{ $hoso->SDT }}" readonly>
                    </fieldset>

                    <fieldset class="form-group">
                        <label>CMND/CCCD</label>
                        <input class="form-control" type="text" value="{{ $hoso->CMND_CCCD }}" readonly>
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" type="text" value="{{ $hoso->DiaChi }}" readonly>
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Số biên nhận</label>
                        <input class="form-control" type="text" value="{{ $hoso->SoBienNhan }}" name="SoBienNhan">
                    </fieldset>

                    @if ($trang_thai->count() > 0)
                        <label>Trạng thái hồ sơ</label>
                        <select class="custom-select mb-3" name="trangthaihoso_id">
                            @foreach ($trang_thai as $item)
                                <option {{ $hoso->trangthaihoso_id == $item->id ? 'selected' : '' }}
                                    value="{{ $item->id }}">
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Chú thích</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="chu_thich"></textarea>
                        </div>
                    @endif

                    <fieldset class="form-group">
                        <label>Ngày hẹn trả</label>
                        <input class="form-control" name="ngayhentra" type="date" placeholder="Nhập ngày hẹn trả"
                            value="{{ $hoso->ngayhentra }}">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Ngày kết thúc</label>
                        <input class="form-control" name="ngay_ket_thuc" type="date" placeholder="Nhập ngày kết thúc"
                            value="{{ $hoso->ngay_ket_thuc }}">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Thời gian thực hiện</label>
                        <input class="form-control" name="thoigianthuchien" type="text"
                            placeholder="Nhập thời gian thực hiện" value="{{ $hoso->thoigianthuchien }}">
                    </fieldset>
                    <button type="submit" class="btn btn-success mb-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
