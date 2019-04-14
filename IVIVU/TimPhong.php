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
    <link rel="stylesheet" href="css/TimPhong1.css"/>
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
                                <a title="Home"class="btn btn-primary1" href="TimPhong.php">Services</a>
                                <a title="Home"class="btn btn-primary" href="Tours.php">Tours</a>
                                <a title="Home"class="btn btn-primary" href="Blog.php">Blog</a>
                                <a title="Home"class="btn btn-primary" href="Gallery.php">Gallery</a>
                                <a title="Home"class="btn btn-primary" href="Contact.php">Contact</a>
                                <span><a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                <span><a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                <span><a href="google.com"><i class="fa fa-vimeo" aria-hidden="true"></i></a></span>
                                </div>
                    </nav>
            </div>

            <div id="searchKS"> 
                    <div id="search-box1">
                            <h4>Tìm phòng khách sạn ngay với IVIVU</h4>
                            <form method="get" action="extest.php" id="register">
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
            <div id="container">
                    <div class="KS">
                            <div class="thumb" style="background-image: url(../img/AAAAA1.jpg)"></div>
                            <?php                            
                            include('KetNoi.php');
                            $ks = sqlsrv_query($conn ,"SELECT TOP 1 tenKS FROM KhachSan WHERE thanhPho='Nha Trang' ORDER BY NEWID() ");
                            while ($r=sqlsrv_fetch_array($ks)){
                                echo $r['tenKS'];
                            } 
                            ?>
                            <hr  width="70%" align="center" /> 
                            <div class="Noidung">Mercure Danang French Village Bana Hills là chỗ nghỉ mô phỏng ngôi làng châu Âu thế kỷ 19 và có cáp treo.</div>
                            <a title="button"class="btn btn-primary1" href="PhongKS.php">Xem chi tiết</a>
                        </div>
        
                        <div class="KS">
                            <div class="thumb" style="background-image: url(../img/AAAAA2.jpg)"></div>
                            <?php                            
                            include('KetNoi.php');
                            $ks = sqlsrv_query($conn ,"SELECT TOP 1 tenKS FROM KhachSan WHERE thanhPho='Nha Trang' ORDER BY NEWID() ");
                            while ($r=sqlsrv_fetch_array($ks)){
                                echo $r['tenKS'];
                            } 
                            ?>                            <hr  width="70%" align="center" /> 
                            <div class="Noidung"> Nằm trong bán kính chỉ 50 m từ Bãi biển công cộng Phạm Văn Đồng, A La Carte Da Nang Beach có hồ bơi ngoài trời, trung tâm thể dục, spa và truy cập WiFi miễn phí.</div>
                            <a title="button"class="btn btn-primary1" href="PhongKS.php">Xem chi tiết</a>                        </div>
        
                        <div class="KS">
                            <div class="thumb" style="background-image: url(../img/AAAAA3.jpg)"></div>
                            <?php                            
                            include('KetNoi.php');
                            $ks = sqlsrv_query($conn ,"SELECT TOP 1 tenKS FROM KhachSan WHERE thanhPho='Nha Trang' ORDER BY NEWID() ");
                            while ($r=sqlsrv_fetch_array($ks)){
                                echo $r['tenKS'];
                            } 
                            ?>                            <hr  width="70%" align="center" /> 
                            <div class="Noidung"> Nằm cạnh Bãi biển Mỹ Khê ở thành phố Đà Nẵng, Diamond Sea Hotel cung cấp các chỗ ở hiện đại và thoải mái với Wi-Fi miễn phí toàn khuôn viên.</div>
                            <a title="button"class="btn btn-primary1" href="PhongKS.php">Xem chi tiết</a>                        </div>
        
                        <div class="KS">
                            <div class="thumb" style="background-image: url(../img/AAAAA4.jpg)"></div>
                            <?php                            
                            include('KetNoi.php');
                            $ks = sqlsrv_query($conn ,"SELECT TOP 1 tenKS FROM KhachSan WHERE thanhPho='Nha Trang' ORDER BY NEWID() ");
                            while ($r=sqlsrv_fetch_array($ks)){
                                echo $r['tenKS'];
                            } 
                            ?>                            <hr  width="70%" align="center" /> 
                            <div class="Noidung"> Là chỗ nghỉ trên bãi biển ở thành phố biển Đà Nẵng xinh đẹp, Fusion Suites Danang Beach có hồ bơi ngoài trời và nhà hàng.</div>
                            <a title="button"class="btn btn-primary1" href="PhongKS.php">Xem chi tiết</a>                       
                        </div>

                        <div class="KS">
                                <div class="thumb" style="background-image: url(../img/AAAAA1.jpg)"></div>
                                <div class="title">Mercure Danang French Village Bana Hills</div>
                                <hr  width="70%" align="center" /> 
                                <div class="Noidung">Mercure Danang French Village Bana Hills là chỗ nghỉ mô phỏng ngôi làng châu Âu thế kỷ 19 và có cáp treo.</div>
                                <a title="button"class="btn btn-primary1" href="PhongKS.php">Xem chi tiết</a>                     
                            </div>
            
                            <div class="KS">
                                <div class="thumb" style="background-image: url(../img/AAAAA2.jpg)"></div>
                                <div class="title">A La Carte Da Nang Beach</div>
                                <hr  width="70%" align="center" /> 
                                <div class="Noidung"> Nằm trong bán kính chỉ 50 m từ Bãi biển công cộng Phạm Văn Đồng, A La Carte Da Nang Beach có hồ bơi ngoài trời, trung tâm thể dục, spa và truy cập WiFi miễn phí.</div>
                                <a title="button"class="btn btn-primary1" href="PhongKS.php">Xem chi tiết</a>                      
                            </div>
            
                            <div class="KS">
                                <div class="thumb" style="background-image: url(../img/AAAAA3.jpg)"></div>
                                <div class="title">Diamond Sea Hotel</div>
                                <hr  width="70%" align="center" /> 
                                <div class="Noidung"> Nằm cạnh Bãi biển Mỹ Khê ở thành phố Đà Nẵng, Diamond Sea Hotel cung cấp các chỗ ở hiện đại và thoải mái với Wi-Fi miễn phí toàn khuôn viên.</div>
                                <a title="button"class="btn btn-primary1" href="PhongKS.php">Xem chi tiết</a>                      
                            </div>
            
                            <div class="KS">
                                <div class="thumb" style="background-image: url(../img/AAAAA4.jpg)"></div>
                                <div class="title">Fusion Suites Danang Beach</div>
                                <hr  width="70%" align="center" /> 
                                <div class="Noidung"> Là chỗ nghỉ trên bãi biển ở thành phố biển Đà Nẵng xinh đẹp, Fusion Suites Danang Beach có hồ bơi ngoài trời và nhà hàng.</div>
                            <a title="button"class="btn btn-primary1" href="PhongKS.php">Xem chi tiết</a>                       
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