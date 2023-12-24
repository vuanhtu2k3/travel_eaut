<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>My Travel - EAUT GROUP7</title>
    <meta name="description" content="Traveller">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--  <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
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

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>
    <?php include('includes/header.php'); ?>
    <!--/.header-->
    <style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    .imgditich {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    #img1 {
        width: 100%;
        height: 100%;
        object-fit: cover;
        image-rendering: pixelated;
    }
    </style>
    <div class="imgditich">
        <img id="img1" onclick="changeImage()" src="images/ditich3.jpg" alt="">

        <script>
        var index = 1;

        function changeImage() {
            var imgs = ["images/berlin.jpg", "images/ditich6.jpg", "images/ditich5.jpg", "images/ditich7.jpg",
                "images/ditich8.jpg"
            ];
            document.getElementById("img1").src = imgs[index];
            index++;
            if (index == 5) {
                index = 0;
            }
        }
        setInterval(changeImage, 1200);
        </script>

    </div>

    <!--
    <section id="home">
        <div class="banner-container">
            <!--   <img src="images/banner-bg.jpg" alt="banner" />-->
    <!--<div class="container banner-content">
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>Kế hoạch du lịch</h2>
                        <p>Nhận kế hoạch của bạn ngay lập tức.. tận hưởng!!!</p>
                        <a href="#" class="da-link">Xem thêm </a>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Chuyến tham quan tuyệt vời</h2>
                        <p>Du lịch bạn nhớ suốt đời!!!</p>
                        <a href="#" class="da-link">Xem thêm </a>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Chuyến du lịch tốt nhất</h2>
                        <p>Nhận ưu đãi tốt nhất tại địa điểm của chúng tôi</p>
                        <a href="#" class="da-link">Xem thêm </a>
                        <div class="da-img"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section id="introText">
        <div class="container">
            <style>
            .animated {
                animation-duration: 1s;

            }

            .fadeInDown {
                animation-name: fadeInDown;
            }

            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            h1 {
                font-size: 3em;

                color: #333;
                margin-bottom: 20px;
                font-family: 'Cormorant Garamond', serif;

                font-weight: 300;

                letter-spacing: 1px;

            }
            </style>
            <div class="text-center adeInDown animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <h1>Chuyến du lịch của chúng tôi mang đến cho bạn một gói kỳ nghỉ tuyệt vời</h1>

            </div>
        </div>
    </section>
    <!--About-->
    <section id="aboutUs" class="secPad">
        <div class="container">

            <div class="heading text-center adeInDown animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <!-- Heading -->
                <style>
                h2 {
                    text-align: center;
                    font-size: 28px;
                    font-weight: bold;
                    font-family: 'Arial', sans-serif;

                    font-style: normal;

                    color: #333;
                    margin-bottom: 20px;
                    text-transform: uppercase;
                    letter-spacing: 1px;

                }
                </style>

                <h2>Giới thiệu</h2>


                </p>
            </div>
            <div class="row adeInDown animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <style>
                .row {
                    display: flex;
                    align-items: center;
                }

                .col-md-4 {
                    text-align: center;
                    padding: 20px;
                }

                .col-md-4 img {
                    width: 100%;
                    height: auto;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .col-md-8 {
                    margin: 20px auto;
                    padding: 20px;
                    background-color: #f8f8f8;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .lead {
                    font-size: 24px;
                    font-weight: bold;
                    color: #333;
                    margin-bottom: 20px;
                }

                .destination,
                .planning,
                .share-experience,
                .meaningful-travel {
                    font-size: 16px;
                    line-height: 1.6;
                    color: #555;
                    margin-bottom: 15px;
                }
                </style>

                <div class="row">
                    <div class="col-md-4">
                        <img src="images/about.jpg" alt="" class="img-responsive img-thumbnail">
                    </div>

                    <div class="col-md-8 text-center">
                        <p class="lead">Khám Phá Vẻ Đẹp và Đa Dạng Văn Hóa Tại Việt Nam</p>
                        <p class="destination">Khám phá những điểm đến độc đáo trải dài từ thành phố sôi động đến những
                            bãi
                            biển hùng vĩ và những vùng quê yên bình trên khắp Việt Nam.</p>
                        <p class="planning">Lên kế hoạch cho chuyến du lịch của bạn một cách linh hoạt với công cụ đặt
                            phòng
                            và vé trực tuyến tiện lợi. Tìm hiểu chi tiết về điểm du lịch, nhà nghỉ, nhà hàng và hoạt
                            động
                            giải trí.</p>
                        <p class="share-experience">Tham gia cộng đồng du lịch, đọc những bài đánh giá thực tế và chia
                            sẻ
                            những khoảnh khắc đáng nhớ của bạn với những người đồng hành.</p>
                        <p class="meaningful-travel">Trải nghiệm du lịch ý nghĩa và đáng nhớ với sứ mệnh của chúng tôi
                            tại
                            DuLichVN.com - Người bạn đồng hành lý tưởng trên hành trình khám phá đất nước xinh đẹp -
                            Việt
                            Nam.</p>
                    </div>
                </div>





            </div>
        </div>
    </section>
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
        padding: 20px;
        margin: 20px;
        /* Add margin between items */
        text-align: center;
        flex: 0 0 auto;
        /* Allow items to shrink and grow to fit the container */
    }

    #output_search img {
        max-width: 85%;
        max-height: 150px;
        width: auto;
        display: block;
        margin: 0 auto;
    }
    </style>
    </style>
    <!--Package-->
    <section id="packages" class="secPad">
        <div class="container">
            <div class="heading text-center">

                <!-- Heading -->
                <h2>Danh sách các gói nổi tiếng nhất</h2>

            </div>
            <div class="">

                <?php $sql = "SELECT * from tbltourpackages order by rand() ";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) {
                ?>
                <div class="rom-btm">
                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                        <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>"
                            class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                        <h4>Tên địa điểm: <?php echo htmlentities($result->PackageName); ?></h4>
                        <h6>Thể loại : <?php echo htmlentities($result->PackageType); ?></h6>
                        <p><b>Khu vực :</b> <?php echo htmlentities($result->PackageLocation); ?></p>
                        <p><b>Ưu đãi:</b> <?php echo htmlentities($result->PackageFetures); ?></p>
                    </div>
                    <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                        <h5> <?php echo htmlentities($result->PackagePrice); ?> VND</h5>
                        <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId); ?>"
                            class="view">Chi tiết</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php
                    }
                } ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!--Quote-->
    <section id="quote" class="bg-parlex">
        <div class="parlex-back">
            <style>
            #quote-container {
                padding: 30px;
                background-color: #f8f8f8;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            #quote {
                font-size: 24px;
                font-style: italic;
                color: #333;
                margin-bottom: 10px;
            }

            #author {
                font-size: 18px;
                color: #555;
                margin-bottom: 0;
            }
            </style>

            <div id="quote-container" class="container secPad text-center">
                <h3 id="quote">"Thế giới là một cuốn sách và những người không đi du lịch chỉ đọc được một trang."</h3>
                <h3 id="author">- Saint Augustine-</h3>
            </div>

            <!--/.container-->
        </div>
    </section>
    <!--Portfolio-->
    <section id="portfolio" class="page-section section appear clearfix secPad">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>Phòng triển lãm</h2>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <style>
                        #portfolio-container {
                            padding: 30px;
                            background-color: #f8f8f8;
                            border-radius: 10px;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        }

                        .portfolio-item {
                            margin-bottom: 20px;
                            position: relative;
                            overflow: hidden;
                            border-radius: 8px;
                        }

                        .portfolio-item img {
                            width: 100%;
                            height: 100%;
                            border-radius: 8px;
                            transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;

                            position: relative;
                            overflow: hidden;


                        }

                        .portfolio-desc {
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            width: 100%;
                            background-color: rgba(255, 255, 255, 0.8);
                            padding: 10px;
                            text-align: center;
                            transition: background-color 0.3s;
                        }

                        .portfolio-desc h4 {
                            margin-bottom: 5px;
                            font-size: 18px;
                            color: #FFFFE0;
                        }

                        .folio-Get-It a {
                            color: #FFFFE0;
                        }

                        .folio-Get-It a:hover {
                            color: #FFFFE0;
                        }

                        .portfolio-item:hover .portfolio-desc {
                            background-color: #F0F0F0;
                        }

                        .portfolio-item:hover img {
                            transform: scale(1.1);
                            filter: grayscale(0%);
                        }
                        </style>

                        <div class="portfolio-items clearfix papper " id="3">
                            <article class="col-sm-4  isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/p4.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/p4.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/p2.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/p2.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/p3.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/p3.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/p9.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/p9.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/p1.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/p1.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/p5.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/p5.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/p6.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/p6.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/p7.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/p7.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/p8.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/p8.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact -->
    <section id="contactUs" class="page-section secPad">
        <div class="container">
            <div class=" ">
                <style>
                .contact {
                    text-align: center;
                    margin-bottom: 20px;
                }

                .contact h2 {
                    font-size: 2.5em;
                    color: #007bff;

                }
                </style>
                <div class="contact ">
                    <!-- Heading -->
                    <h2 class="center">Liên hệ chúng tôi </h2>
                </div>
            </div>
            <div class="row mrgn30">

                <div class="col-sm-12 col-md-8">
                    <form name="contactForm" id="contactForm" novalidate>


                        <div class="mb-3">
                            <label for="fullName" class="form-label" style="color: darkgrey;">Họ tên:</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Full Name" required
                                data-validation-required-message="Please enter your name">
                            <div class="invalid-feedback" style="color: black;"></div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: darkgrey;">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" required
                                data-validation-required-message="Please enter your email">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label" style="color: darkgrey;">Số điện thoại:</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Phone">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label" style="color: darkgrey;">Tin nhắn:</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Message" required
                                data-validation-required-message="Please enter your message" minlength="5"
                                data-validation-minlength-message="Min 5 characters" maxlength="999"
                                style="resize:none"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                        <br>
                        <div id="success" class="text-success"></div>
                        <button type="submit" class="btn btn-primary">Gửi tin nhắn</button>

                    </form>
                </div>

                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous"
                    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0" nonce="JaZ6P4qs"></script>
                <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100063689044266"
                    data-tabs="timeline" data-width="500" data-height="450" data-small-header="false"
                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/profile.php?id=100063689044266"
                        class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/profile.php?id=100063689044266">Tour Du Lịch</a></blockquote>
                </div>
            </div>


            <script>
            (function() {
                'use strict';

                var form = document.getElementById('contactForm');

                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            })();
            </script>


            <!-- signup -->
            <?php include('includes/signup.php'); ?>
            <!-- //signu -->
            <!-- signin -->
            <?php include('includes/signin.php'); ?>
            <!-- //signin -->
        </div>
        </div>
        <!--/.container-->
    </section>

    <?php include('includes/footer.php'); ?>


</body>

</html>