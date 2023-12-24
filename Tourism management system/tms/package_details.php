<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2']))
{
    $pid=intval($_GET['pkgid']);
    $useremail=$_SESSION['login'];
    $fromdate=$_POST['fromdate'];
    $todate=$_POST['todate'];
    $comment=$_POST['comment'];
    $status=0;
    $sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':pid',$pid,PDO::PARAM_STR);
    $query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
    $query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
    $query->bindParam(':todate',$todate,PDO::PARAM_STR);
    $query->bindParam(':comment',$comment,PDO::PARAM_STR);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
        echo '<script>alert("Đã đặt thành công. Cảm ơn")</script>';
    }
    else
    {
        echo '<script>alert("Đã xảy ra lỗi. Vui lòng thử lại")</script>';
    }

}
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>DU LỊCH VIỆT NAM</title>
    <meta name="description" content="Du lịch VN">
    <meta name="author" content="Nhóm 7 -DCCNTT12.10.11">

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
</head>

<body>
<header class="header">
    <?php if($_SESSION['login'])
    {?>
        <div class="top-header">
            <div class="container">
                <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                    <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li class="prnt"><a href="profile.php">Thông tin của tài khoản</a></li>
                    <li class="prnt"><a href="change_password.php">Đổi mật khẩu</a></li>
                    <li class="prnt"><a href="tour_history.php">Lịch sử</a></li>
                </ul>
                <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
                    <li class="tol">Xin chào :</li>
                    <li class="sig"><?php echo htmlentities($_SESSION['login']);?></li>
                    <li class="sigi"><a href="logout.php" >/ Đăng xuất</a></li>
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
                    <li class="hm"><a href="admin/index.php">Quản Trị</a></li>
                </ul>
                <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
                    <li class="tol">Số điện thoại : 0123-456879</li>
                    <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Đăng ký </a></li>
                    <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >&nbsp;Đăng nhập</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php
    }?>
    <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <a href="#" class="navbar-brand scroll-top logo"><b>Du lịch VN</b></a>
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
                    <li ><a href="index.php" class="scroll-link">Trang chủ</a></li>
                    <li><a href="index.php" class="scroll-link">Thông tin</a></li>
                    <li><a href="index.php" class="scroll-link">Gói Tour</a></li>
                    <li><a href="index.php" class="scroll-link">Phòng Trưng Bày</a></li>
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
                <div class="da-slide">
                    <h2>Gói du lịch</h2>
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
            <h2>Chi tiết gói</h2>
            <p>Khách hàng rất quan trọng, khách hàng sẽ được khách hàng theo dõi</p>
        </div>
        <!--- selectroom ---->
        <div class="selectroom">
            <div class="container">
                <?php if($error){?><div class="errorWrap"><strong>LỖI</strong>:<?php echo htmlentities($error); ?> </div><?php }
                else if($msg){?><div class="succWrap"><strong>THÀNH CÔNG</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                <?php
                $pid=intval($_GET['pkgid']);
                $sql = "SELECT * from tbltourpackages where PackageId=:pid";
                $query = $dbh->prepare($sql);
                $query -> bindParam(':pid', $pid, PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                    foreach($results as $result)
                    {
                        ?>

                        <div class="selectroom_top">
                            <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
                                <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
                            </div>
                            <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
                                <h2><?php echo htmlentities($result->PackageName);?></h2>
                                <p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
                                <p><b>Loại gói:</b> <?php echo htmlentities($result->PackageType);?></p>
                                <p><b>Vị trí gói :</b> <?php echo htmlentities($result->PackageLocation);?></p>
                                <p><b>Đặc trưng</b> <?php echo htmlentities($result->PackageFetures);?></p>

                                <div class="clearfix"></div>
                                <div class="grand">
                                    <p>Tổng cộng</p>
                                    <h3><?php echo htmlentities($result->PackagePrice);?> VND</h3>
                                </div>
                            </div>
                            <h3>Chi tiết gói</h3>
                            <p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>
                            <div class="clearfix"></div>
                        </div>
                        <form name="book" method="post">
                            <div class="selectroom_top">
                                <div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
                                    <div class="ban-bottom">
                                        <div class=" col-md-6 mr-2 ">
                                            <label class="inputLabel">Từ</label>
                                            <input class="form-control" id="datepicker" type="date" placeholder="dd-mm-yyyy"  name="fromdate" required="">
                                        </div>
                                        <div class=" col-md-6">
                                            <label class="inputLabel">Đến</label>
                                            <input class="form-control" id="datepicker1" type="date" placeholder="dd-mm-yyyy" name="todate" required="">
                                        </div>
                                    </div>
                                    <ul>

                                        <li class="spe">
                                            <label class="inputLabel">Ghi chú</label>
                                            <textarea  class="form-control" rows="4" cols="4" type="text" name="comment" required=""></textarea>
                                        </li>
                                        <?php if($_SESSION['login'])
                                        {?>
                                            <li class="spe" align="center">
                                                <button type="submit" name="submit2" class="btn-primary btn">Đặt</button>
                                            </li>
                                            <?php
                                        } else {?>
                                            <li class="sigi" align="center" style="margin-top: 1%">
                                                <a href="#" data-toggle="modal" data-target="#myModal4"  class="btn-primary btn" > Đặt</a>
                                            </li>
                                            <?php
                                        } ?>
                                        <div class="clearfix"></div>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <?php
                    }
                } ?>
            </div>
        </div>
        <!--- /selectroom ---->
    </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->
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
