<?php
//数据库链接文件
@session_start();
$host='localhost';//数据库服务器
$user='root';//数据库用户名
$password='root';//数据库密码
$database='xxxx';//数据库名
$conn=@mysql_connect($host,$user,$password) or die('failed connect');
@mysql_select_db($database) or die('no database');
mysql_query("set names 'utf-8'");
?>