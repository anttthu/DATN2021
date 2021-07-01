<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/GioiThieu">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin <sup></sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang Chủ</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Danh Mục
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Lĩnh Vực</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Danh Mục</h6>
                <a class="collapse-item" href="{{ route('LinhVuc.index') }}">Danh sách</a>
                @if (auth()->user()->isAdmin())
                    <a class="collapse-item" href="{{ route('LinhVuc.create') }}">Thêm mới</a>
                @endif
            </div>
        </div>

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cap_thuc_hien" aria-expanded="true"
            aria-controls="cap_thuc_hien">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cấp thực hiện</span>
        </a>
        <div id="cap_thuc_hien" class="collapse" aria-labelledby="cap_thuc_hien" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Cấp thực hiện</h6>
                <a class="collapse-item" href="{{ route('cap-thuc-hien.index') }}">Danh sách</a>
                @if (auth()->user()->isAdmin())
                    <a class="collapse-item" href="{{ route('cap-thuc-hien.create') }}">Thêm mới</a>
                @endif
            </div>
        </div>

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
            aria-controls="collapse3">
            <i class="fas fa-fw fa-cog"></i>
            <span>Thủ tục</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Danh Mục</h6>
                <a class="collapse-item" href="{{ route('thu-tuc.index') }}">Danh sách</a>
                @if (auth()->user()->isAdmin())
                    <a class="collapse-item" href="{{ route('thu-tuc.create') }}">Thêm mới</a>
                @endif
            </div>
        </div>

        @if (auth()->user()->isAdmin())
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#role" aria-expanded="true"
                aria-controls="role">
                <i class="fas fa-fw fa-cog"></i>
                <span>Vai trò</span>
            </a>
            <div id="role" class="collapse" aria-labelledby="role" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Vai trò</h6>
                    <a class="collapse-item" href="{{ route('vai-tro.index') }}">Danh sách</a>
                    <a class="collapse-item" href="{{ route('vai-tro.create') }}">Thêm mới</a>
                </div>
            </div>
        @endif

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true"
            aria-controls="user">
            <i class="fas fa-fw fa-cog"></i>
            <span>Users</span>
        </a>
        <div id="user" class="collapse" aria-labelledby="user" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User</h6>
                <a class="collapse-item" href="{{ route('users.index') }}">Danh sách</a>
                @if (auth()->user()->isAdmin())
                    <a class="collapse-item" href="{{ route('users.create') }}">Thêm mới</a>
                @endif
            </div>
        </div>

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hoso" aria-expanded="true"
            aria-controls="hoso">
            <i class="fas fa-fw fa-cog"></i>
            <span>Hồ sơ</span>
        </a>
        <div id="hoso" class="collapse" aria-labelledby="hoso" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Hồ sơ</h6>
                <a class="collapse-item" href="{{ route('quan-ly-ho-so.index') }}">Danh sách</a>
            </div>
        </div>
    </li>
</ul>
