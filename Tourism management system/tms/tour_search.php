<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
}
?>

<!doctype html>
<html lang="en-gb" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>My Travel - EAUT GROUP 7</title>
    <meta name="description" content="Traveller">
    <meta name="author" content="WebThemez">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <style>
    #output_search {
        max-width: 100%;
        list-style: none;
        padding: 0;
        display: flex;
        overflow-x: auto;
        /* Add horizontal scrolling if there are many images */
    }

    #output_search li {
        border: 1px solid #ddd;
        padding: 10px;
        margin: 5px;
        /* Add margin between items */
        text-align: center;
        flex: 0 0 auto;
        /* Allow items to shrink and grow to fit the container */
    }

    #output_search img {
        max-width: 95%;
        max-height: 150px;
        width: auto;
        display: block;
        margin: 0 auto;
    }
    </style>

</head>

<body>
    <header class="header">
        <?php if ($_SESSION['login']) { ?>
        <div class="top-header">
            <div class="container">
                <ul class="tp-hd-lft">
                    <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li class="prnt"><a href="profile.php">Thông tin của tôi</a></li>
                    <li class="prnt"><a href="change_password.php">Thay đổi mật khẩu</a></li>
                    <li class="prnt"><a href="tour_history.php">Lịch sử</a></li>
                </ul>
                <ul class="tp-hd-rgt">
                    <li class="tol">Xin chào: <?php echo htmlentities($_SESSION['login']); ?></li>
                    <li class="sigi"><a href="logout.php">/ Đăng xuất</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php } else { ?>
        <div class="top-header">
            <div class="container">
                <ul class="tp-hd-lft">
                    <li class="hm"><a href="admin/index.php">Đăng nhập ADMIN</a></li>
                </ul>
                <ul class="tp-hd-rgt">
                    <li class="tol">Số điện thoại : 0123456879</li>
                    <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Đăng ký </a></li>
                    <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4">&nbsp; Đăng nhập </a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php } ?>
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top logo"><b>Traveller</b></a>
                </div>
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php" class="scroll-link">Trang chủ</a></li>
                        <li><a href="index.php" class="scroll-link">Thông tin</a></li>
                        <li><a href="index.php" class="scroll-link">Gói du lịch</a></li>
                        <li><a href="index.php" class="scroll-link">Phòng trưng bày</a></li>
                        <li><a href="index.php" class="scroll-link">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--/.container-->

        <!-- Main Content -->
        <div class="container mt-3">
            <!-- Search Form -->
            <div class="search-container">
                <form class="d-flex">
                    <input class="form-control me-2" name="search_name" id="search_name" type="search"
                        placeholder="Nhập tên cần tìm" aria-label="Search">

                </form>
            </div>

            <!-- Search Results -->
            <ul id="output_search"></ul>
        </div>
    </header>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Your Search Script -->
    <script type="text/javascript">
    $(document).ready(function() {
        var action = "search";
        $("#search_name").keyup(function() {
            var search_name = $("#search_name").val();
            if (search_name != "") {
                $.ajax({
                    url: "search.php",
                    method: "POST",
                    data: {
                        action: action,
                        search_name: search_name
                    },
                    success: function(data) {
                        $("#output_search").html(data);
                    }
                });
            } else {
                $("#output_search").html("");
            }
        });
    });
    </script>
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
    }

    .site-footer {
        margin-top: auto;
        list-style: none;
    }
    </style>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Thông Tin Liên Hệ</h3>
                    <p><i class="fa fa-map-marker"></i> Địa chỉ: Trường đại học CN Đông Á</p>
                    <p><i class="fa fa-envelope"></i> Email: eautgroup7@dulichvn.com</p>
                    <p><i class="fa fa-phone"></i> Điện thoại: +84 123 456 789</p>
                </div>
                <div class="col-md-4">
                    <h3>Liên Kết Hữu Ích</h3>
                    <ul>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Frequently Asked Questions</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Theo Dõi Chúng Tôi</h3>
                    <div class="social-icons">
                        <ul>
                            <li><a href="#">Facebook : https://www.facebook.com/toidicodedao.com</a></li>
                            <li><a href="#">Youtube : toidicodedao</a></li>
                            <li><a href="#">Twiter : codeladamme</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; <script>
                        document.write(new Date().getFullYear());
                        </script> Du Lịch Việt Nam. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>