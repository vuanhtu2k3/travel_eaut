<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
{ 
  header('location:index.php');
}
else{
  if(isset($_POST['submit6']))
  {
    $name=$_POST['name'];
    $mobileno=$_POST['mobileno'];
    $email=$_SESSION['login'];

    $sql="update tblusers set FullName=:name,MobileNumber=:mobileno where EmailId=:email";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->execute();
    $msg="Profile Updated Successfully";
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
    <!-- <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <!--animate-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    <style>
    .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
    </style>
</head>

<body>
    <header class="header">
        <?php if($_SESSION['login'])
    {?>
        <div class="top-header">
            <div class="container">
                <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                    <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li class="prnt"><a href="profile.php">Thông tin cá nhân</a></li>
                    <li class="prnt"><a href="change_password.php">Thay đổi mật khẩu</a></li>
                    <li class="prnt"><a href="tour_history.php">Lịch sử</a></li>
                </ul>
                <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
                    <li class="tol">Xin chào :</li>
                    <li class="sig"><?php echo htmlentities($_SESSION['login']);?></li>
                    <li class="sigi"><a href="logout.php">/ Đăng xuất</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php 
    } else 
    {
      ?>
        <div class="top-header">
            <div class="container">
                <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                    <li class="hm"><a href="admin/index.php">Đăng nhập ADMIN</a></li>
                </ul>
                <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
                    <li class="tol">SDT : 0123456879</li>
                    <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Đăng ký </a></li>
                    <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4">&nbsp; Đăng nhập </a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php 
    }?>
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header adeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <a href="#" class="navbar-brand scroll-top logo"><b>DULICHVN</b></a>
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
                        data-target="#main-nav">
                        <span class="sr-only">Chuyển đổi điều hướng thành</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse adeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li><a href="index.php" class="scroll-link">Trang chủ </a></li>
                        <li><a href="index.php" class="scroll-link">Thông tin </a></li>
                        <li><a href="index.php" class="scroll-link">Gói du lịch</a></li>
                        <li><a href="index.php" class="scroll-link">Phòng trưng bày</a></li>
                        <li><a href="index.php" class="scroll-link">Liên hệ</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
        <div class="banner-container" style="height: 300px;">
            <!-- <img src="images/banner-bg.jpg" alt="banner" /> -->
            <div class="container banner-content">
                <div id="da-slider" class="da-slider">
                    <div>&nbsp;</div>
                    <div class="">
                        <h2> Travel</h2>
                        <p>Nhận kế hoạch của bạn ngay lập tức.. tận hưởng!!!</p>
                        <div class="da-img"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Package-->
    <section id="packages" class="secPad">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>Thông tin người dùng</h2>
                <p>Khách hàng rất quan trọng, khách hàng sẽ được khách hàng theo dõi</p>
            </div>
            <div class="privacy">
                <div class="container">
                    <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">User Profile
                    </h3>
                    <form name="chngpwd" method="post">
                        <?php 
              if($error)
              {
                ?>
                        <div class="errorWrap">
                            <strong>Lỗi</strong>:<?php echo htmlentities($error); ?>
                        </div>
                        <?php
              } else 
              if($msg)
              {
                ?>
                        <div class="succWrap">
                            <strong>Thành công</strong>:<?php echo htmlentities($msg); ?>
                        </div>
                        <?php 
              }?>

                        <?php 
              $useremail=$_SESSION['login'];
              $sql = "SELECT * from tblusers where EmailId=:useremail";
              $query = $dbh -> prepare($sql);
              $query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
              $query->execute();
              $results=$query->fetchAll(PDO::FETCH_OBJ);
              $cnt=1;
              if($query->rowCount() > 0)
              {
                foreach($results as $result)
                { 
                  ?>
                        <p style="width: 350px;">

                            <b>Tên</b> <input type="text" name="name"
                                value="<?php echo htmlentities($result->FullName);?>" class="form-control" id="name"
                                required="">
                        </p>

                        <p style="width: 350px;">
                            <b>Số điện thoại: </b>
                            <input type="text" class="form-control" name="mobileno" maxlength="10"
                                value="<?php echo htmlentities($result->MobileNumber);?>" id="mobileno" required="">
                        </p>

                        <p style="width: 350px;">
                            <b>Email </b>
                            <input type="email" class="form-control" name="email"
                                value="<?php echo htmlentities($result->EmailId);?>" id="email">
                        </p>
                        <p style="width: 350px;">
                            <b>Ngày cập nhật lần cuối : </b>
                            <?php echo htmlentities($result->UpdationDate);?>
                        </p>

                        <p style="width: 350px;">
                            <b>Ngày đăng ký :</b>
                            <?php echo htmlentities($result->RegDate);?>
                        </p>
                        <?php 
                }
              } ?>
                        <p style="width: 350px;">
                            <button type="submit" name="submit6" class="btn-primary btn">Cập nhật</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include('includes/footer.php'); ?>
    <!-- signup -->
    <?php include('includes/signup.php');?>
    <!-- //signu -->
    <!-- signin -->
    <?php include('includes/signin.php');?>
    <!-- //signin -->
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
    <script src="js/modernizr-latest.js"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="js/jquery.nav.js" type="text/javascript"></script>
    <script src="js/jquery.cslider.js" type="text/javascript"></script>
    <script src="contact/contact_me.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>
</body>

</html>
<?php 
} ?>