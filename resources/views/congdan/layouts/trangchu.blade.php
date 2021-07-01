@extends('congdan.layouts.header')
@section('conten')
    <h3>Giới thiệu về Cổng Dịch vụ </h3>
    <img src="{{ asset('assets/congdan/img/gioithieu.png') }}" class="mt-2">
    <p>
        Với quan điểm công khai, minh bạch, lấy người dân, doanh nghiệp
        làm trung tâm phục vụ, Cổng Dịch vụ công  kết nối, cung
        cấp thông tin về thủ tục hành chính và dịch vụ công trực tuyến;
        hỗ trợ thực hiện, giám sát, đánh giá việc giải quyết thủ tục
        hành chính, dịch vụ công trực tuyến và tiếp nhận, xử lý phản
        ánh, kiến nghị của cá nhân, tổ chức trên toàn quốc.
    </p>
    <p>Cá nhân, tổ chức dễ dàng truy cập Cổng Dịch vụ công tại
        địa chỉ duy nhất <a href="https://tthc.hust.vn" style="color: #CE7A58 !important;">www.dichvucong.gov.vn</a>
        theo nhu cầu người dùng
        từ máy tính, máy tính bảng hoặc điện thoại di động được kết nối
        internet để hưởng nhiều lợi ích từ Cổng Dịch vụ công Quốc gia,
        như:</p>

    <div class="row mt-4 align-items-stretch">
        <div class="col-4">
            <div class="mb-3">
                <img src="{{ asset('assets/congdan/img/1.svg') }}">
            </div>
            <p>Đăng ký và được cấp ngay một tài khoản của Cổng dịch vụ
                công Quốc gia để đăng nhập;</p>
        </div>

        <div class="col-4">
            <div class="mb-3">
                <img src="{{ asset('assets/congdan/img/2.svg') }}">
            </div>
            <p>Tra cứu thông tin, dịch vụ công các ngành, lĩnh vực, các
                địa phương tại Cơ sở dữ liệu quốc gia về thủ tục hành
                chính, giải quyết thủ tục hành chính, dịch vụ công;</p>
        </div>
{{--
        <div class="col-4">
            <div class="mb-3">
                <img src="{{ asset('assets/congdan/img/3.svg') }}">
            </div>
            <p>Đề nghị hỗ trợ thực hiện thủ tục hành chính, dịch vụ công
                qua Tổng đài điện thoại 18001096 hoặc trực tuyến tại mục
                Hỗ trợ;</p>
        </div> --}}

        <div class="col-4">
            <div class="mb-3">
                <img src="{{ asset('assets/congdan/img/4.svg') }}">
            </div>
            <p>Theo dõi toàn bộ quá trình giải quyết thủ tục hành chính
                và xử lý</p>
        </div>

        <div class="col-4">
            <div class="mb-3">
                <img src="{{ asset('assets/congdan/img/5.svg') }}">
            </div>
            <p>Đăng nhập bằng tài khoản Cổng dịch vụ công để đăng nhập các Cổng Dịch vụ công của Bộ, ngành, địa
                phương; không phải cập nhật các trường thông tin, tài liệu đã được lưu trữ trong tài khoản Cổng Dịch vụ công
            </p>
        </div>

        <div class="col-4">
            <div class="mb-3">
                <img src="{{ asset('assets/congdan/img/6.svg') }}">
            </div>
            <p>Được hỗ trợ truy vấn thông tin của cá nhân, tổ chức lưu trữ tại các Cơ sở dữ liệu, Hệ thống thông tin đã tích
                hợp với Cổng Dịch vụ công Quốc gia như đăng ký kinh doanh, thuế, bảo hiểm,…;</p>
        </div>

        <div class="col-4">
            <div class="mb-3">
                <img src="{{ asset('assets/congdan/img/7.svg') }}">
            </div>
            <p>Thực hiện thủ tục hành chính tại nhiều tỉnh, thành phố chỉ cần khai báo 1 lần trên Cổng Dịch vụ công Quốc
                gia;</p>
        </div>

        {{-- <div class="col-4">
            <div class="mb-3">
                <img src="{{ asset('assets/congdan/img/8.svg') }}">
            </div>
            <p>Sử dụng tài khoản của các ngân hàng, trung gian thanh toán để thanh toán trực tuyến phí, lệ phí thực hiện thủ
                tục hành chính; dịch vụ công;</p>
        </div> --}}

        {{-- <div class="col-4">
            <div class="mb-3">
                <img src="{{ asset('assets/congdan/img/9.svg') }}">
            </div>
            <p>Đánh giá sự hài lòng trong giải quyết thủ tục hành chính;</p>
        </div>
    </div> --}}

    <div class="slogan">
        <p>Các Bộ, ngành, địa phương nỗ lực cùng với sự tham gia tích
            cực của người dân và doanh nghiệp trong vận hành Cổng Dịch
            vụ công là góp phần xây dựng Chính phủ liêm chính,
            hành động, phát triển, phục vụ Nhân Dân</p>
        <a href="https://tthc.hust.vn">Hãy truy cập
            www.tthc.hust.vn !</a>
    </div>
@endsection
