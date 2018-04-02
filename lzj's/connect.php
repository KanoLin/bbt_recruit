<?php
    $url='EXAMPLE_URL';//服务器地址
    $user='EXAMPLE_USER';//用户名
    $password='EXAMPLE_PASSWORD';//密码
    $dateBase='EXAMPLE_DATABASE';//数据库名称
    $table='EXAMPLE_TABLE';//数据表名称
    //链接数据库
    $con=mysqli_connect($url,$user,$password,$dateBase);
    if (!$con) {die('Could not connect: ' . mysqli_error());}
    mysqli_set_charset($con,"utf8");
    //同步时钟
    date_default_timezone_set("Asia/Shanghai");

?>