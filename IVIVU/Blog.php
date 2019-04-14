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
    <link rel="stylesheet" href="css/Blog.css"/>
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
                                <a title="Home"class="btn btn-primary" href="Tours.php">Tours</a>
                                <a title="Home"class="btn btn-primary1" href="Blog.php">Blog</a>
                                <a title="Home"class="btn btn-primary" href="Gallery.php">Gallery</a>
                                <a title="Home"class="btn btn-primary" href="Contact.php">Contact</a>
                                <span><a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                <span><a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                <span><a href="google.com"><i class="fa fa-vimeo" aria-hidden="true"></i></a></span>
                                </div>
                    </nav>
            </div>

            <div id="container">
                    <div id="content">
                            <div class="CT-1">
                                <div class="title-CT">
                                    <div class="ct_first">Topics</div>
                                    <div class="ct">Comments</div>
                                    <div class="ct_next">Views</div>
                                    <div class="ct_last">Last post</div>
                                </div>
                                <div class="ND_Ct">
                                    <h4><i class="fa fa-star" aria-hidden="true"></i> Chọn khách sạn hay IVIVU?
                                    </h4>
                                    <div class="ct_first">
                                        Hiện nay việc tìm kiếm chỗ nghỉ lúc đi du lịch chia thành 2 trường phái này. Khách sạn thì dễ hiểu rồi, nó là một tòa nhà hoặc một khu resort, được quản lý bởi một công ty chuyên nghiệp, trong khi Airbnb thường là nhà của những người chủ bình thường còn phòng trống nên họ cho thuê (hoặc cho thuê nguyên căn tùy người). Cả hai đều có những ưu nhược điểm riêng, tùy bạn thích cái nào mà chọn cho chính xác, nhưng thường thì giá thuê phòng ở Airbnb sẽ rẻ hơn so với khách sạn                                    </div>
                                    <div class="ct">
                                        32
                                    </div>
                                    <div class="ct_next">
                                        2,123
                                    </div>
                                    <div class="ct_last">
                                        Yesterday, 11:26 PM
                                    </div>
                                </div>
            
                                <div class="ND_Ct">
                                        <h4><i class="fa fa-star" aria-hidden="true"></i> Làm sao kiếm được deal rẻ nhất?
                                        </h4>
                                        <div class="ct_first">
                                            Trong những trang trên mình thích IVIVU nhất vì có nhiều deal rất tốt, giao diện dễ thương dễ dùng, nhiều chỗ nghỉ tại Việt Nam và cả khi đi quốc tế, quan trọng hơn hết là rất nhiều khách sạn trên Booking.com KHÔNG YÊU CẦU XÁC THỰC THẺ TÍN DỤNG, cũng không yêu cầu thanh toán tiền trước. Có nhiều phòng cho phép bạn hủy miễn phí để bạn có thêm thời gian cân nhắc với hội bạn về chuyến đi hoặc tham khảo giá thêm ở các nơi khác chứ không vội đặt ngay.                                        </div>
                                        <div class="ct">
                                            153
                                        </div>
                                        <div class="ct_next">
                                            4,423
                                        </div>
                                        <div class="ct_last">
                                            Yesterday, 9:43 AM
                                        </div>
                                </div>
            
            
                                <div class="ND_Ct">
                                            <h4><i class="fa fa-star" aria-hidden="true"></i> Nên đặt phòng cho hủy miễn phí hay không ?
                                            </h4>
                                            <div class="ct_first">
                                                Như đã nói ở trên, Booking.com và Agoda có nhiều phòng cho phép bạn hủy miễn phí trước một hạn chót nhất định.  Với những chuyến đi không chắc chắn, kiểu như bạn chưa chắc là tuần sau bạn sẽ đi Đà Lạt công tác, thì bạn cũng có thể dùng chức năng này để giữ chỗ và hủy nếu không còn nhu cầu.
                                            </div>
                                            <div class="ct">
                                                324
                                            </div>
                                            <div class="ct_next">
                                                1,423
                                            </div>
                                            <div class="ct_last">
                                                Yesterday, 7:22 AM
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