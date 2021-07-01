@extends('congdan.layouts.header')
@section('conten')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <label class="m-0 font-weight-bold text-primary">Thông tin người nộp hồ sơ trực tuyến</label>
            </div>
            <div class="row p-3">
                <div class="col-lg-12">
                    <div>
                        <form role="form" action="{{ route('ho-so.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="trangthaihoso_id" value="1">
                            <input type="hidden" name="id_thutuc" value="{{ $thu_tuc->id }}">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <fieldset class="form-group">
                                <label>Tên người nộp</label>
                                <input class="form-control" name="TenNguoiNop" placeholder="Nhập tên người nộp"
                                    value="{{ $user->name }}" required>
                            </fieldset>

                            <fieldset class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="SDT" placeholder="Nhập số điện thoại"
                                    value="{{ $user->SDT }}" required>
                            </fieldset>

                            <fieldset class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="Email" placeholder="Nhập email"
                                    value="{{ $user->email }}" required>
                            </fieldset>

                            <fieldset class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="Nhập địa chỉ"
                                    value="{{ $user->DiaChi }}" required>
                            </fieldset>

                            <fieldset class="form-group">
                                <label>CMND/CCCD</label>
                                <input class="form-control" name="CMND_CCCD" placeholder="Nhập CMND hoặc CCCD"
                                    value="{{ $user->CMND_CCCD }}" required>
                            </fieldset>

                            <label>File đính kèm</label>
                            <div id="tenfile">

                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="files[]" multiple required>
                                <label class="custom-file-label" for="customFile">Chọn file</label>
                            </div>
                            <button type="submit" class="form-control btn btn-success mb-4 mt-4">Nộp hồ sơ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
