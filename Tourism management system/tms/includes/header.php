 <header class="header">
     <?php if ($_SESSION['login']) { ?>
         <div class="top-header">
             <div class="container">
                 <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                     <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
                     <li class="prnt"><a href="profile.php">Thông tin của tôi</a></li>
                     <li class="prnt"><a href="change_password.php">Thay đổi mật khẩu</a></li>
                     <li class="prnt"><a href="tour_history.php">Lịch sử </a></li>
                     <li class="prnt"><a href="tour_search.php">Tìm kiếm </a></li>
                 </ul>
                 <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
                     <li class="tol">Chào mừng :</li>
                     <li class="sig"><?php echo htmlentities($_SESSION['login']); ?></li>
                     <li class="sigi"><a href="logout.php">/ Đăng xuất</a></li>
                 </ul>
                 <div class="clearfix"></div>
             </div>
         </div>
     <?php
        } else {
        ?>
         <div class="top-header">
             <div class="container">
                 <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                     <li class="hm"><a href="admin/index.php">Đăng nhập Admin</a></li>
                 </ul>
                 <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
                     <li class="tol">Thông tin SDT: 0369944444</li>
                     <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Đăng ký</a></li>
                     <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4">&nbsp; Đăng nhập</a></li>
                 </ul>
                 <div class="clearfix"></div>
             </div>
         </div>
     <?php
        } ?>
     <div class="container">
         <nav class="navbar navbar-inverse" role="navigation">
             <div class="navbar-header adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                 <a href="#" class="navbar-brand scroll-top logo"><b>DULICHVN</b></a>
                 <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                     <span class="sr-only">Chuyển đổi điều hướng thành</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>

             </div>
             <!--/.navbar-header-->
             <div id="main-nav" class="collapse navbar-collapse adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                 <ul class="nav navbar-nav" id="mainNav">
                     <li><a href="#home" class="scroll-link">Trang chủ</a></li>
                     <li><a href="#aboutUs" class="scroll-link">Giới thiệu </a></li>
                     <li><a href="#packages" class="scroll-link">Tour du lịch</a></li>
                     <li><a href="#portfolio" class="scroll-link">Phòng triển lãm</a></li>
                     <li><a href="#contactUs" class="scroll-link">Liên hệ</a></li>

                 </ul>
             </div>
             <!--/.navbar-collapse-->
         </nav>
         <!--/.navbar-->
     </div>
     <!--/.container-->
 </header>