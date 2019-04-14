<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php  
    $serverName = "DESKTOP-13S6M3Q\MSSQLSEVER"; //serverName\instanceName

    // Since UID and PWD are not specified in the $connectionInfo array,
    // The connection will be attempted using Windows Authentication.
    $connectionInfo = array( "Database"=>"IVIVU");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    $rs=sqlsrv_query($conn, "SELECT maKH FROM KhachHang WHERE maKH = 'KH00000018'");
    while ($r=sqlsrv_fetch_array($rs)){
        echo $r['maKH'];
        echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@";
    } 
?>
    
</body>
</html>