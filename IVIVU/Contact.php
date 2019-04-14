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
    <link rel="stylesheet" href="css/Contact1.css" />
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
                    <a class="btn btn-outline-primary w3-center" href="" data-target="#ModalCenter" data-toggle="modal">  
                    <?php                            
                            // include('KetNoi.php');
                            // $ks = sqlsrv_query($conn ,"SELECT hoTen FROM KhachHang WHERE tenDangNhap='Lý Thùy Giang'");
                            // while ($r=sqlsrv_fetch_array($ks)){
                            //     echo $r['hoTen'];
                    
                            // }
                            echo "Lý Thùy Giang";
                    ?>
                    </a>           
                </div>
                </div>
            </div>

            <div class="wrapper-nav">
                    <nav class="nav-main">
                            <div class="WN_BT">
                                <a title="Home"class="btn btn-primary" href="Trangchu.php">Home</a>
                                <a title="Home"class="btn btn-primary" href="TimPhong.php">Services</a>
                                <a title="Home"class="btn btn-primary" href="Tours.php">Tours</a>
                                <a title="Home"class="btn btn-primary" href="Blog.php">Blog</a>
                                <a title="Home"class="btn btn-primary" href="Gallery.php">Gallery</a>
                                <a title="Home"class="btn btn-primary1" href="Contact.php">Contact</a>
                                <span><a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                <span><a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                <span><a href="google.com"><i class="fa fa-vimeo" aria-hidden="true"></i></a></span>
                            </div>
                    </nav>
            </div>
      
            <div id="container">
                    <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29597.314068311498!2d106.679703416823!3d10.760842974927986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1bfc262bf1%3A0x4e843897f2900135!2zMjI3IMSQxrDhu51uZyBOZ3V54buFbiBWxINuIEPhu6ssIFBoxrDhu51uZyA0LCBRdeG6rW4gNSwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sus!4v1534571773018" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="l_map">
                        <h2>Contatc Form</h2>
                        <hr  width="80%" size="5px" align="center" /> 
                        <div class="form-group">
                            <label for="Full name" style="text-align:center">Full name</label>
                            <input class="text" type="text" name="Full name" id="Fullname" />
                        </div>
                            
                        <div class="form-group">
                            <label for="email" style="text-align:center">E-mail</label>
                            <input class="text" type="text" name="email" id="email" />
                         </div>
                            
                        <div class="form-group">
                            <label for="Message" style="text-align:center">Message</label>
                            <input class="text" type="text" name="Message" id="Message" />
                        </div>

                        <div class="form-group" style="text-align:center">
                                <p><label id="bottom"></label><input type="submit" name="action" id="submit" value="Submit" /></p>
                        </div>


                    </div>
                    <div class="r_map">
                                    <div class="Min-RM">
                                        <h4><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ</h4>
                                        <div>227 Nguyễn Văn Cừ, Phường 4, Quận 5, Hồ Chí Minh </div>
                                    </div>
                
                                    <div class="Min-RM">
                                            <h4><i class="fa fa-phone-square" aria-hidden="true"></i> Điên thoại</h4>
                                            <div>114(sau đó nhờ gọi 115)</div>
                                    </div>
                
                                    <div class="Min-RM">
                                            <h4><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</h4>
                                            <div>huynhphamhieutrung@gmail.com </div>
                                    </div>
                    </div>
                </div>

            <div id="Trung"></div>
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

            
</body>
</html>

