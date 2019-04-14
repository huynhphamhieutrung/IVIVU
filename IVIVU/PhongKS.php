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
    <link rel="stylesheet" href="css/PhongKS1.css" />
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
            <div id="container">
                <div class="l_ct">
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
                <div class="r_ct">
                    <h2>Khách sạn: Đại Dương Xanh</h2>
                    <div><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ: 69 Trần Duy Hưng, Trung Hào, Cầu Giấy, Hà Nội</div>
                    <ul>
                        <li>Giá phòng: 450.000</li>
                        <li>Sạch sẽ</li>
                        <li>Đầy đủ tiện nghi</li>
                        <li>Có thang máy</li>
                        <li>Có cầu tuột</li>
                        <li>Có buffet sáng</li>
                    </ul>
                    <button type="button" class="btn btn-primary1">ĐẶt phòng</button>
                </div>      

                <div class="nav_ct">
                    <h3>Một trong những lựa chọn hàng đầu của chúng tôi ở Hà Nội</h3>
                    <div class="GT_KS">Nằm cách Chợ Đồng Xuân 100 m, Đại Dương Xanh Hotel nổi bật với lối trang trí và kiến ​​trúc kiểu Việt Nam hiện đại. Nơi đây có Wi-Fi miễn phí, 2 lựa chọn ăn uống và các phòng nghỉ với TV màn hình phẳng.</div>
                    <div class="GT_KS">Tất cả các phòng không hút thuốc tại Dragon Pearl Hotel đi kèm sàn gỗ cứng và hệ thống ánh sáng ấm áp. Mỗi phòng đều được trang bị đầy đủ tiện nghi với két an toàn và phòng tắm riêng kèm tiện nghi vòi sen nước nóng.</div>
                    <div class="GT_KS">Khách sạn cung cấp dịch vụ cho thuê xe đạp và xe hơi. Nhân viên tại bàn đặt tour có thể hỗ trợ du khách sắp xếp việc đi lại và tham quan. Để tạo thuận tiện cho khách, dịch vụ đặt vé và trợ giúp đặc biệt cũng được cung cấp theo yêu cầu..</div>
                    <div class="GT_KS">Nhà hàng phục vụ tuyển chọn các món ăn, chị em Á và Âu hảo hạng. Với tầm nhìn ra Khu Phố Cổ Hà Nội, quán Mimosa Wine Bar cung cấp các món ăn nhẹ và đồ uống giải khát.</div>
                    <div class="GT_KS">Khách sạn nằm cách Sân bay Quốc tế Nội Bài 40 phút lái xe. .</div>
                </div>

                <div id="DV">
                        <h3>Tiện nghi khách sạn</h3>
                        <div class="DV_1">
                            <img src="./img/m.png" height="30px">
                            <div>Máy lạnh</div>
                        </div>
                        <div class="DV_1">
                                <img src="./img/p.png"height="30px">
                                <div>Chỗ đậu xe</div>   
                        </div>
                        <div class="DV_1">
                                <img src="./img/24.png" height="30px">
                                <div>Lễ tân 24h</div>
                        </div>
                        <div class="DV_1">
                                <img src="./img/hb.png"height="30px">
                                <div>Hồ bơi</div>
                        </div>
                        <div class="DV_1">
                                <img src="./img/tm.png"height="30px">
                                <div>Thang máy</div>
                        </div>
                        <div class="DV_1">
                                <img src="./img/nh.png"height="30px">
                                <div>Nhà hàng</div>
                        </div>
                </div>

            </div>
            
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29597.314068311498!2d106.679703416823!3d10.760842974927986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1bfc262bf1%3A0x4e843897f2900135!2zMjI3IMSQxrDhu51uZyBOZ3V54buFbiBWxINuIEPhu6ssIFBoxrDhu51uZyA0LCBRdeG6rW4gNSwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sus!4v1534571773018" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
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

