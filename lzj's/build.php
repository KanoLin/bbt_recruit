<?php
function connect()
{
    $dataBase='EXAMPLE_DATABASE';
    $table='EXAMPLE_TABLE';
    $con=mysqli_connect('EXAMPLE_URL','EXAMPLE_USER','EXAMPLE_PASSWORD');
    if (!$con) {die('Could not connect: ' . mysqli_error());}
    mysqli_query($con,"set names utf8");
    $str1='CREATE DATABASE IF NOT EXISTS '.$dataBase.' DEFAULT CHARSET utf8 COLLATE utf8_general_ci;';
    $result=mysqli_query($con,$str1);
    if (!$result) {die('创建数据库失败！:'.mysqli_error($con));}
    mysqli_select_db($con,$dataBase);
    $str2='CREATE TABLE IF NOT EXISTS '.$table.'('.
            'id INT UNSIGNED AUTO_INCREMENT ,'.
            'name VARCHAR(20) NOT NULL ,'.
            'sex VARCHAR(5) NOT NULL ,'.
            'grade VARCHAR(20) NOT NULL ,'.
            'college VARCHAR(30) NOT NULL ,'.
            'dorm VARCHAR(10) NOT NULL ,'.
            'phone_number VARCHAR(15) NOT NULL ,'.
            'branch VARCHAR(20) NOT NULL ,'.
            'second_branch VARCHAR(20) NOT NULL ,'.
            'adjust VARCHAR(4) NOT NULL ,'.
            'introduction VARCHAR(200) NOT NULL ,'.
            'time DATETIME ,'.
            'PRIMARY KEY(id))ENGINE=InnoDB DEFAULT CHARSET=utf8;';
    $result=mysqli_query($con,$str2);
    if(!$result) {die('数据表创建失败!: ' . mysqli_error($con));}

    //同步时钟
    date_default_timezone_set("Asia/Shanghai");
    mysqli_close($con);
}
connect();

?>
