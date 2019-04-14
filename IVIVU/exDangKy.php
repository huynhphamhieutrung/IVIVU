<?php
// Thiết lập charset utf8
header('Content-Type: text/html; charset=utf-8');

  
// Vì tên button submit là do-register nên ta sẽ kiểm tra nếu
// tồn tại key này trong biến toàn cục $_POST thì nghĩa là người 
// dùng đã click register(submit)
if (isset($_POST['DK']))
{
     //Lấy dữ liệu từ file dangky.php
     $TenDangNhap   = addslashes($_POST['username']);
     $MatKhau   = addslashes($_POST['password']);
     $HoTen   = addslashes($_POST['HoTen']);
     $Email      = addslashes($_POST['email']);

     
    //Kiểm tra xem có nhập đầy đủ thông tin hay không
    if (!$TenDangNhap || !$MatKhau || !$Email || !$HoTen){
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    
    include('KetNoi.php');

    
    //Kiểm tra tên đăng nhập và email đã có người dùng chưa

    $TraLoi = sqlsrv_query($conn,"SELECT tenDangNhap FROM KhachHang WHERE tenDangNhap ='$TenDangNhap'");
     if (sqlsrv_fetch_array($TraLoi) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


    if (sqlsrv_fetch_array(sqlsrv_query($conn,"SELECT email FROM KhachHang WHERE email='$Email'")) > 0){
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Insert dữ liệu vào bảng
    $addmember = sqlsrv_query($conn,"INSERT INTO KhachHang (
            maKH,
            hoTen,
            tenDangNhap,
            matKhau,
            soCMND,
            diaChi,
            soDienThoai,
            moTa,
            email
            )

        VALUES (
            N'KHD21300021231',
            '$HoTen',
            '$TenDangNhap',
            '$MatKhau',
            '2511471s40',
            '24asaaaaaa',
            '090827770s9',
            'a',
            '$Email'
            )
        ");

    //    echo "Quá trình đăng ký thành công. <a href='TrangChu.php'>Về trang chủ</a>";

    //    //Thông báo quá trình lưu
     if ($addmember)
          echo "Quá trình đăng ký thành công. <a href='TrangChu.php'>Về trang chủ</a>";
      else
          echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='TrangChu.php'>Thử lại</a>";

    sqlsrv_close($conn);
}
?>