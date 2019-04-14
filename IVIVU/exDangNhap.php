

<?php
//Khai báo sử dụng session
session_start();

 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
$_SESSION['DN'] = 0;
//Xử lý đăng nhập
if (isset($_POST['DN'])) 
{
    //Lấy dữ liệu nhập vào
    $TenDangNhap = addslashes($_POST['username']);
    $MatKhau = addslashes($_POST['password']);
  
     //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
     if (!$TenDangNhap || !$MatKhau) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.<a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    //$MatKhau = md5($MatKhau);

    //Kết nối tới database
    include('KetNoi.php');
     
    //Kiểm tra tên đăng nhập có tồn tại không
    
    $query = sqlsrv_query($conn ,"SELECT tenDangNhap, matKhau FROM KhachHang WHERE tenDangNhap='$TenDangNhap'");
    $rs=sqlsrv_query($conn, "SELECT tenDangNhap FROM KhachHang WHERE tenDangNhap='$TenDangNhap'");
    if ( sqlsrv_fetch_array($rs) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = sqlsrv_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($MatKhau != $row['matKhau']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại.<a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    $query = sqlsrv_query($conn, "SELECT maKH FROM KhachHang WHERE tenDangNhap = '$TenDangNhap'");
    $row = sqlsrv_fetch_array($query);
    $_SESSION['DN'] = $row['maKH'];


    //Lưu tên đăng nhập
    $_SESSION['tenDangNhap'] = $TenDangNhap;
    echo "Xin chào " . $TenDangNhap . ". Bạn đã đăng nhập thành công. <a href='Trangchu1.php'>Về trang chủ</a>";
    die();
   

    sqlsrv_close($conn);
};

?>



