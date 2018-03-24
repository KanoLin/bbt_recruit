<?php
    $url='localhost:3306';//服务器地址
    $user='root';//用户名
    $password='123456';//密码
    $dateBase='EntryBlank';//数据库名称
    $table='task';//数据表名称
    //链接数据库
    $con=mysqli_connect($url,$user,$password,$dateBase);
    if (!$con) {die('Could not connect: ' . mysqli_error());}
    mysqli_set_charset($con,"utf8");
    //同步时钟
    date_default_timezone_set("Asia/Shanghai");

?>