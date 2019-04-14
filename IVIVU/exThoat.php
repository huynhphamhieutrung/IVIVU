<?php session_start(); 
 
if (isset($_SESSION['tenDangNhap'])){
    $_SESSION['DN'] = 0;
    unset($_SESSION['tenDangNhap']); // xóa session login
}
?>
<a href="TrangChu.php">HOME</a>