<?php

    session_start();     

    // Thiết lập charset utf8
    header('Content-Type: text/html; charset=utf-8');
    
    // Vì tên button submit là do-register nên ta sẽ kiểm tra nếu
    // tồn tại key này trong biến toàn cục $_POST thì nghĩa là người 
    // dùng đã click register(submit)

    if(isset ($_POST['Booking']))
    {
        echo $_SESSION['DN'];
        $_SESSION['DN'] = 0;

        if (isset($_GET['DN'])) 
        {
            $NoiDen = addslashes($_GET['DiaDiem']);
            $NgayBD = addslashes($_GET['date_bd']);
            $NgayKT = addslashes($_GET['date_kt']);
        }

        //Kết nối tới database
        include('KetNoi.php');

        $ks = sqlsrv_query($conn ,"SELECT tenKS FROM KhachSan WHERE thanhPho='$NoiDen'");
        while ($r=sqlsrv_fetch_array($ks)){
            echo $r['tenKS'];
        } 

       
    }

?>