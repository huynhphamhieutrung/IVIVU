<?php

    session_start();     

    // Thiết lập charset utf8
    header('Content-Type: text/html; charset=utf-8');
    
    // Vì tên button submit là do-register nên ta sẽ kiểm tra nếu
    // tồn tại key này trong biến toàn cục $_POST thì nghĩa là người 
    // dùng đã click register(submit)

 
        $NoiDen = addslashes($_GET['DiaDiem']);
        include('KetNoi.php');
        $ks = sqlsrv_query($conn ,"SELECT tenKS FROM KhachSan WHERE thanhPho='$NoiDen'");
        while ($r=sqlsrv_fetch_array($ks)){
            echo $r['tenKS'];
        } 

 
?>