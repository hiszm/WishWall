<?php

//1、连接数据库
// $link = @mysql_connect('localhost','root','') or die('数据库连接失败！');
// //2、选择数据库
// mysql_select_db('wish') or die('选择的数据库不存在！');
// //3、设置字符集
// mysql_set_charset('utf8');
$conn = mysqli_connect('localhost','root','root','wall');
mysqli_query($conn,'set names utf8');



