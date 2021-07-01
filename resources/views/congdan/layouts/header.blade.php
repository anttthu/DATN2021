<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Dịch vụ công</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @toastr_css
    @yield('css')
</head>

<body>
    <div>
        <div class="py-3 px-5 row align-items-center">
            <a class="col-8" href="/">
                <img src="https://i.pinimg.com/originals/20/3d/e5/203de5686e18ef5dea484f86bfc88246.jpg" width="100">
                <h5 class="d-inline ml-3" style="color: #d24f19">CỔNG THÔNG TIN TIẾP NHẬN TRỰC TUYẾN THỦ TỤC HÀNH CHÍNH CÔNG</h5>
            </a>
            <div class="col-4 text-right">
                @auth
                    @if (auth()->user()->isCustomer())
                        <div class="dropdown d-inline">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tài khoản
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('tai-khoan') }}">Chỉnh sửa thông tin</a>
                                <a class="dropdown-item" href="{{ url('doi-mat-khau') }}">Đổi mật khẩu</a>
                            </div>
                        </div>
                    @else
                        <a href="{{ url('admin') }}">
                            <button type="button" class="btn btn-light">
                                Quản lý
                            </button>
                        </a>

                        <a href="{{ route('users.edit', ['user' => auth()->id()]) }}">
                            <button type="button" class="btn btn-light">
                                Tài khoản
                            </button>
                        </a>
                    @endif

                    <a href="{{ route('logout') }}">
                        <button type="button" class="btn btn-light">
                            Đăng Xuất
                        </button>
                    </a>
                @else
                    <a href="{{ route('register') }}">
                        <button type="button" class="btn btn-light">
                            Đăng ký
                        </button>
                    </a>
                    <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-light">
                            Đăng nhập
                        </button>
                    </a>
                @endauth
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0 px-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/GioiThieu">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ho-so.index') }}">Nộp hồ sơ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('theo-doi-ho-so') }}">Theo dõi hồ sơ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tthc') }}">Thủ tục hành chính</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/HuongDan">Hướng dẫn</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="p-5">
        @yield('conten')
    </div>

    <footer>
        <div class="d-flex justify-content-around align-items-center">
            <p>Cơ quan chủ quản: Văn phòng </p>
            <p>www.tthc.hust.vn</p>
            <p>Tổng đài hỗ trợ: 19001000</p>
            <p>Email: tthc@hust.vn</p>
        </div>
    </footer>
    @jquery
    @toastr_js
    @toastr_render
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="/js/custom.js"></script>
    @yield('script')
</body>

</html>
