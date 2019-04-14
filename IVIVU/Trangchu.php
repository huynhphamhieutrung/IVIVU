<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/i.png" sizes="32x32" />
    <title>IVIVU</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/TrangChu.css"/>
    
    <script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/myjquery.js"></script>
</head>

<body>
    <div id="wrapper">
        <div id="main-nav" id="main-menu-tto">
            <div class="clearfix">
                <div id="Topicon"><img src="img/i.png"> IVIVU</div>
                <div id="search-box">
                    <form id="search-form">
                        <input type="text" placeholder="Search" id="textsearch"/>
                        <button type="submit" id="search-button"> </button>
                    </form>
                </div>

                
                <div id="nav-dangnhap">
                    <a class="btn btn-outline-primary w3-center" href="" data-target="#ModalCenter" data-toggle="modal">Login</a>   
                      <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenter" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                         <div>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="register">&nbsp;</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>

                            <div class="box">
                                <div class="form loginBox" style="display: block;">
                                    <form method="post" action="exDangNhap.php" id="register">
                                        <div class="form-group">
                                            <label for="username" style="text-align:left">Username(*)</label>
                                            <input class="text" type="text" name="username" id="username" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password" style="text-align:left">Password(*)</label>
                                            <input class="text" type="password" name="password" id="password" />
                                        </div>
                                        <div class="form-group" style="text-align:left">
                                                <p><label id="bottom"></label><input type="submit" name="DN" id="submit" value="Login" /></p>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="box">
                                    <div class="content registerBox" style="display: none;">
                                        <form method="post" action="exDangKy.php" id="register">
                                            <div class="form-group">
                                                <label for="username" style="text-align:left">Username(*)</label>
                                                <input class="text" type="text" name="username" id="username" />
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="password" style="text-align:left">Password(*)</label>
                                                <input class="text" type="password" name="password" id="password" />
                                            </div>
  
                                            <div class="form-group">
                                                <label for="firstname" style="text-align:left">Name(*)</label>
                                                <input class="text" type="text" name="HoTen" id="HoTen" />
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="email" style="text-align:left">E-mail(*)</label>
                                                <input class="text" type="text" name="email" id="email" />
                                            </div> 

                                            <div class="form-group" style="text-align:left">
                                            <p><label id="bottom"></label><input type="submit" name="DK" id="submit" value="Registration" /></p>
                                            </div>
                                        </form>
                                    </div>
                            </div>

                            <div class="modal-footer">
                                    <div class="forgot login-footer" style="display: block;"> <span> <a href="javascript: showRegisterForm();">Tạo tài khoản mới?</a> </span> </div>
                                    <div class="forgot register-footer" style="display: none;"> <span>Bạn có tài khoản rồi?</span> <a href="javascript: showLoginForm();">Đăng nhập</a> </div>
                            </div>
                          </div>

                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="wrapper-nav">
            <nav class="nav-main">
                    <div class="WN_BT">
                            <a title="Home"class="btn btn-primary1" href="Trangchu.php">Home</a>
                            <a title="Home"class="btn btn-primary" href="TimPhong.php">Services</a>
                            <a title="Home"class="btn btn-primary" href="Tours.php">Tours</a>
                            <a title="Home"class="btn btn-primary" href="Blog.php">Blog</a>
                            <a title="Home"class="btn btn-primary" href="Gallery.php">Gallery</a>
                            <a title="Home"class="btn btn-primary" href="Contact.php">Contact</a>
                            <span><a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                            <span><a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                            <span><a href="google.com"><i class="fa fa-vimeo" aria-hidden="true"></i></a></span>
                        </div>
            </nav>

            <div id="IM">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                    <img src="img/anh1.jpg" style="width:100%">
                    <!-- <div class="text">Nội dung caption của slide đầu tiên!</div> -->
                    </div>
            
                    <div class="mySlides fade">
                    <img src="img/anh2.jpg" style="width:100%">
                    <!-- <div class="text">Nội dung caption của slide thứ 2!</div> -->
                    </div>
            
                    <div class="mySlides fade">
                    <img src="img/anh3.jpg" style="width:100%">
                    <!-- <div class="text">Nội dung caption của slide thứ 3!</div> -->
                    </div>
                </div>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(0)"></span> 
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                </div>  
            </div>
        </div>
        
        <div id="container">
            <div class="thuephong">
                <div class="left_ct">
                    <div id="search-box1">
                    <form method="get" action="exTimPhong.php" id="register">
                            <h4>Tìm phòng ngay với IVIVU</h4>
                            <div  class="search-form1">
                                    <input type="text" placeholder="Bạn muốn đi đâu" name="DiaDiem" id="textsearch1"/>
                                </div>
                                <div class="search-form1">
                                    <input id='start_dt' placeholder="Ngày bắt đầu" name="date_bd" class='datepicker'>     
                                </div>
                                <div class="search-form1">
                                    <input id='another_dt' placeholder="Ngày kết thúc" name="date_kt" class='myclass datepicker'>
                                </div>
                                <div class="BT"><a title="button"class="btn btn-primary1" href="TimPhong.php">Tìm</a></div>
                            </form>
                    </div>
                </div>

                <div class="right_ct">
                    <div class="CT-ANh">
                        <img src="img/anh4.jpg" style="width:100% ">
                    </div>
                    <div class="CT_ND">
                        <h2>Du lịch trên toàn thế giới</h2>
                        <hr  width="70%" align="center" /> 
                        <div>Đến với IVIVU để du lịch trên toàn thế giới. Chúng tôi sẽ mang lại trải nghiệm tuyệt vời cho bạn.</div>
                    </div>
                </div>
            </div>
        </div>

        <div id="last">
            <div class="LA">
                <img src="img/nt.jpg" style="width:100% ">
                <h3>Dốc Lết</h3>
                <hr  width="70%" align="center" />
                <span><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Nha Trang</a></span>
            </div>

            <div class="LA">
                <img src="img/dn.jpg" style="width:100% ">
                <h3>Cầu Rồng</h3>
                <hr  width="70%" align="center" />
                <span><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Đà Nẵng</a></span>
            </div>

            <div class="LA">
                <img src="img/dl.jpg" style="width:100% ">
                <h3>Trường Đại Học</h3>
                <hr  width="70%" align="center" />
                <span><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Đà Lạt</a></span>
            </div>

            <div class="LA">
                <img src="img/hl.jpg" style="width:100% ">
                <h3>Vịnh Hạ Long</h3>
                <hr  width="70%" align="center" />
                <span><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Quảng Ninh</a></span>
            </div>
        </div>

        <div id="ll">
            <div class="left_ll">
                <div class="KS">
                    <div class="thumb" style="background-image: url(../img/AAAAA1.jpg)"></div>
                    <div class="title">Mercure Danang French Village Bana Hills</div>
                    <hr  width="70%" align="center" /> 
                    <div class="Noi dung">Mercure Danang French Village Bana Hills là chỗ nghỉ mô phỏng ngôi làng châu Âu thế kỷ 19 và có cáp treo.</div>
                    <a title="Home"class="btn btn-primary" href="TimPhong.php">Xem chi tiết</a>
                </div>

                <div class="KS">
                    <div class="thumb" style="background-image: url(../img/AAAAA2.jpg)"></div>
                    <div class="title">A La Carte Da Nang Beach</div>
                    <hr  width="70%" align="center" /> 
                    <div class="Noi dung"> Nằm trong bán kính chỉ 50 m từ Bãi biển công cộng Phạm Văn Đồng, A La Carte Da Nang Beach có hồ bơi ngoài trời, trung tâm thể dục, spa và truy cập WiFi miễn phí.</div>
                    <a title="Home"class="btn btn-primary" href="TimPhong.php">Xem chi tiết</a>
                </div>

                <div class="KS">
                    <div class="thumb" style="background-image: url(../img/AAAAA3.jpg)"></div>
                    <div class="title">Diamond Sea Hotel</div>
                    <hr  width="70%" align="center" /> 
                    <div class="Noi dung"> Nằm cạnh Bãi biển Mỹ Khê ở thành phố Đà Nẵng, Diamond Sea Hotel cung cấp các chỗ ở hiện đại và thoải mái với Wi-Fi miễn phí toàn khuôn viên.</div>
                    <a title="Home"class="btn btn-primary" href="TimPhong.php">Xem chi tiết</a>
                </div>

                <div class="KS">
                    <div class="thumb" style="background-image: url(../img/AAAAA4.jpg)"></div>
                    <div class="title">Fusion Suites Danang Beach</div>
                    <hr  width="70%" align="center" /> 
                    <div class="Noi dung"> Là chỗ nghỉ trên bãi biển ở thành phố biển Đà Nẵng xinh đẹp, Fusion Suites Danang Beach có hồ bơi ngoài trời và nhà hàng.</div>
                    <a title="Home"class="btn btn-primary" href="TimPhong.php">Xem chi tiết</a>
                </div>
                
            </div>

            <div class="right_ll">
                <div class="RL">
                    <h3>Đăng ký ngay khách sạn của bạn với IVIVU</h3>
                    <hr  width="70%" align="center" style="background-color: rgb(210, 247, 247)" />
                    <div>IVIVU nơi kết nối Yêu thương.
                        Chúng tôi cam kết đảm bảo lợi ích cho cả khách sạn và người dùng.
                        Để đăng ký khách sạn hãy nhập email ở dưới.
                    </div>
                    <div>
                        <input class="text" type="text" name="email" id="email" />
                        <button type="submit" id="search1-button"> </button>
                    </div> 
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="FT">
                    <ul>
                        <li> <b>IVIVU</b></li>
                        <li> Mang tới sự hài lòng về dịch vụ</li>
                        <li> Uy tín- Bảo Mật- An Toàn</li>
                        <li> <span><a href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i></a></span> 227 Nguyễn Văn Cừ, Phường 4, Quận 5, Hồ Chí Minh</li>
                        <li> <span><a href="#"> <i class="fa fa-phone" aria-hidden="true"></i></a></span>0908277709(Anh Trung) </li>
                        <li> <span><a href="#"> <i class="fa fa-envelope" aria-hidden="true"></i></a></span>  IVIVU@gmail.com</li>
                    </ul>
                </div>
                <div class="FT">
                    <ul>
                        <li> <b>Hỗ trợ</b></li>
                        <li>Cách UVIVU hoạt động</li>
                        <li> Điều khoản sử dụng</li>
                        <li> Thông tin pháp lý</li>
                        <li> Chính sách bảo mật</li>
                        <li> Sơ đồ wed site</li>
                        <li> Công ty</li>
                        <li> Nhân sự</li>
                    </ul>
                </div>
                <div class="FT">
                    <ul>
                        <li> <b>Các điểm du lịch nổi bậc</b></li>
                        <li> Đà Lạt</li>
                        <li> Vịnh Hạ Long</li>
                        <li> Đà Nẵng</li>
                        <li> Nha Trang</li>
                        <hr  width="50%" align="center" /> 
                        <span><a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                        <span><a href="google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
                        <span><a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                        <div>@ by Huỳnh Phạm Hiếu Trung</div>
                    </ul>
                </div>
    </div>
            
    

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(window).load(function() {
                if ($('#main-nav').length > 0) {
                    var _top = $('#main-nav').offset().top - parseFloat($('#main-nav').css('marginTop').replace(/auto/, 0));
                    $(window).scroll(function(evt) {
                        var _y = $(this).scrollTop();
                        if (_y > _top) {
                            $('#main-nav').addClass('fixed');
                            $('.main-1').css("margin-top", "30px")
                        } else {
                            $('#main-nav').removeClass('fixed');
                            $('.main-1').css("margin-top", "0")
                        }
                    })
                }
            });
        });
    </script>

    <script>
    //khai báo biến slideIndex đại diện cho slide hiện tại
    var slideIndex;
    // KHai bào hàm hiển thị slide
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
   
        slides[slideIndex].style.display = "block";  
        dots[slideIndex].className += " active";
        //chuyển đến slide tiếp theo
        slideIndex++;
        //nếu đang ở slide cuối cùng thì chuyển về slide đầu
        if (slideIndex > slides.length - 1) {
          slideIndex = 0
        }    
        //tự động chuyển đổi slide sau 5s
        setTimeout(showSlides, 5000);
    }
    //mặc định hiển thị slide đầu tiên 
    showSlides(slideIndex = 0);
   
   
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
  </script>

</body>
</html>

