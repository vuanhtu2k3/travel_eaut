<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <img src="img/logo/travel.png">
        </div>
        <div class="sidebar-brand-text mx-3">DULICHVN</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bảng điều khiển</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Quản lý
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm" aria-expanded="true"
            aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Quản lý Tour</span>
        </a>
        <div id="packageForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các tour du lịch</h6>
                <a class="collapse-item" href="create_package.php">Tạo tour mới</a>
                <a class="collapse-item" href="manage_packages.php">Quản lý các tour</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="manage_bookings.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span> Quản lý đặt Tour</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="manage_users.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Người dùng</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true"
            aria-controls="collapseTable">
            <i class="fas fa-fw fa-users"></i>
            <span>Quản lý người dùng</span>
        </a>
        <div id="users" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="user_register.php">Đăng ký người dùng</a>
                <a class="collapse-item" href="Permissions.php">Phân quyền người dùng</a>

            </div>
        </div>
    </li>
<!--    <li class="nav-item">-->
<!--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true"-->
<!--           aria-controls="collapseTable">-->
<!--            <i class="far fa-comment-dots"></i>-->
<!--            <span>Quản lý đánh giá</span>-->
<!--        </a>-->
<!--        <div id="users" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">-->
<!--            <div class="bg-white py-2 collapse-inner rounded">-->
<!--                <h6 class="collapse-header"></h6>-->
<!--                <a class="collapse-item" href="manage_enquires.php">Vấn đề  </a>-->
<!--                <a class="collapse-item" href="manage_issues.php">Giải đáp</a>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </li>-->
</ul>