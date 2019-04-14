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
    <link rel="stylesheet" href="css/Tours.css"/>
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
                                <a title="Home"class="btn btn-primary1" href="Tours.php">Tours</a>
                                <a title="Home"class="btn btn-primary" href="Blog.php">Blog</a>
                                <a title="Home"class="btn btn-primary" href="Gallery.php">Gallery</a>
                                <a title="Home"class="btn btn-primary" href="Contact.php">Contact</a>
                                <span><a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                <span><a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                <span><a href="google.com"><i class="fa fa-vimeo" aria-hidden="true"></i></a></span>
                                </div>
                    </nav>
            </div>


            <div id="container">
                <div class="l_ct">
                        <img src="img/TDH.jpg" style="width:100% ">
                        <h2>
                        <?php                            
                        // include('KetNoi.php');
                        // $ks = sqlsrv_query($conn ,"SELECT hoTen FROM KhachHang WHERE tenDangNhap='Lý Thùy Giang'");
                        // while ($r=sqlsrv_fetch_array($ks)){
                        //     echo $r['hoTen'];
                
                        // }
                        echo "Lý Thùy Giang";
                        ?>
                        </h2>
                        <hr  width="70%" align="center" />
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ:6969 Trần Duy Hưng, Cầu Giấy, Hà Nội</span>
                        <div>CMND:6969696969</div>
                        <div>Số điện thoại:6969699969</div>
                        <div>Email:lialia@gmail.com</div>
                        <div>Mô tả:Gái ngành</div>
                </div>
                <div class="r_ct">
                    <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29597.314068311498!2d106.679703416823!3d10.760842974927986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1bfc262bf1%3A0x4e843897f2900135!2zMjI3IMSQxrDhu51uZyBOZ3V54buFbiBWxINuIEPhu6ssIFBoxrDhu51uZyA0LCBRdeG6rW4gNSwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sus!4v1534571773018" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class=>
                      <div class="title-CT">
                                <div class="ct_first">Hóa Đơn</div>
                                <div class="ct">Ngày đặt</div>
                                <div class="ct_next">Giá Tiền</div>
                                <div class="ct_last">Thông tin chi tiết</div>
                            </div>
                            <div class="ND_Ct">
                                <div class="ct_first">
                                    <?php                            
                                    // include('KetNoi.php');
                                    // $ks = sqlsrv_query($conn ,"SELECT hoTen FROM KhachHang WHERE tenDangNhap='Lý Thùy Giang'");
                                    // while ($r=sqlsrv_fetch_array($ks)){
                                    //     echo $r['hoTen'];
                            
                                    // }
                                    echo "HD00008991";
                                    ?>
                                </div>
                                <div class="ct">
                                    <?php                            
                                        // include('KetNoi.php');
                                        // $ks = sqlsrv_query($conn ,"SELECT hoTen FROM KhachHang WHERE tenDangNhap='Lý Thùy Giang'");
                                        // while ($r=sqlsrv_fetch_array($ks)){
                                        //     echo $r['hoTen'];
                                
                                        // }
                                        echo "2020-10-28";
                                        ?>
                                </div>
                                <div class="ct_next">
                                    <?php                            
                                        // include('KetNoi.php');
                                        // $ks = sqlsrv_query($conn ,"SELECT hoTen FROM KhachHang WHERE tenDangNhap='Lý Thùy Giang'");
                                        // while ($r=sqlsrv_fetch_array($ks)){
                                        //     echo $r['hoTen'];
                                
                                        // }
                                        echo "71355000";
                                        ?>
                                </div>
                                <div class="ct_last">
                                    <a title="Home"class="btn btn-primary1" href="#">Xem chi tiết</a>
                                </div>
        
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