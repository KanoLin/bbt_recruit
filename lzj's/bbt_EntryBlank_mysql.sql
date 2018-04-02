-- 创建数据库
CREATE DATABASE IF NOT EXISTS `EXAMPLE_DATABASE` DEFAULT CHARSET utf8 COLLATE utf8_general_ci;
-- 使用数据库
USE `EXAMPLE_DATABASE`;

-- 创建数据表
CREATE TABLE IF NOT EXISTS `EXAMPLE_TABLE` (
    id INT UNSIGNED AUTO_INCREMENT ,
    name          VARCHAR(20) NOT NULL ,
    sex           VARCHAR(5)  NOT NULL ,
    grade         VARCHAR(20) NOT NULL ,
    college       VARCHAR(30) NOT NULL ,
    dorm          VARCHAR(10) NOT NULL ,
    phone_number  VARCHAR(15) NOT NULL ,
    branch        VARCHAR(20) NOT NULL ,
    second_branch VARCHAR(20) NOT NULL ,
    adjust        VARCHAR(4)  NOT NULL ,
    introduction  VARCHAR(200)NOT NULL ,
    time          DATETIME    NOT NULL ,
    PRIMARY KEY(id))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 查询 部门|男生人数|女生人数|总人数
SELECT 
    branch AS 部门, 
    SUM(sex='男') AS 男生人数, 
    SUM(sex='女') AS 女生人数, 
    COUNT(*) AS 总人数 
FROM `EXAMPLE_TABLE` GROUP BY branch;