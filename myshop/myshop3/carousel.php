<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="js/bootstrap.js"></script>
<link  href="css/carousel.css" rel="stylesheet" />
<!------ Include the above in your HEAD tag ---------->
</head>

<div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="img/popup2.jpg"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="img/bb2.jpg"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="img/bb3.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="img/bs01.jpg"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="img/moon.jpg"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="img/jum01.jpg"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>ตั้งเคี่ยวมิ้น</h2>
                                    <p>ยินดีต้อนรับ</p>
                                    <p class="sub-text"> <a href="http://localhost/myshop3/register.ph">สมัครสมาชิก</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>ตรุษจีน</h2>
                                    <p>เทศการปีใหม่ของจีน</p>
                                    <p class="sub-text"> <a href="http://localhost/myshop3/index.php?t_id=26&type-name=%E0%B8%8A%E0%B8%B8%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%81%E0%B8%B2%E0%B8%A5">ดูชุดสินค้าได้ที่นี่</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>เทศกาลเชงเม้ง</h2>
                                    <p>เทศกาลแห่งการแสดงความกตัญญูต่อบรรพบุรุษ</p>
                                    <p class="sub-text"> <a href="http://localhost/myshop3/index.php?t_id=26&type-name=%E0%B8%8A%E0%B8%B8%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%81%E0%B8%B2%E0%B8%A5">ดูชุดสินค้าที่นี่</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>สารทจีน</h2>
                                    <p>เทศกาลแห่งการรำลึกถึงบรรพบุรุษr</p>
                                    <p class="sub-text"> <a href="http://localhost/myshop3/index.php?t_id=26&type-name=%E0%B8%8A%E0%B8%B8%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%81%E0%B8%B2%E0%B8%A5">ดูเพิ่มเติม</a></p>
                                </div>

                                <div id="slide-content-4">
                                    <h2>เทศการกินเจ</h2>
                                    <p>เทศการแห่งการละเว้น การทำบาป</p>
                                    <p class="sub-text"><a href="http://localhost/myshop3/index.php?t_id=26&type-name=%E0%B8%8A%E0%B8%B8%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%81%E0%B8%B2%E0%B8%A5">ดูชุดสินค้าเพิ่มเติม</a></p>
                                </div>

                                <div id="slide-content-5">
                                    <h2>เทศการไหว้พระจันทร์</h2>
                                    <p>รำลึกถึงเทพเจ้า</p>
                                    <p class="sub-text"><a href="http://localhost/myshop3/index.php?t_id=26&type-name=%E0%B8%8A%E0%B8%B8%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%81%E0%B8%B2%E0%B8%A5">ดูเพิ่มเติม</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="img/mini9.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="img/mini1.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="img/mini2.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="img/mini5.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-4"><img src="img/mini02.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="img/mini200.jpg"></a>
                            </li>
                        </ul>                 
                </div>
        </div>
</div>