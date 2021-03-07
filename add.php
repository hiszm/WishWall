<?php
include_once("./connect.php");

//验证码后台校验
$code=$_POST["code"];
$recode=$_POST["recode"];

if ($code!=$recode) {
	  echo"<script>alert('验证码错误');history.go(-1);</script>";  
}
//获取必要的数据库文件
$name=$_POST["name"];
$name=htmlspecialchars($name);
$time=time();
$color=$_POST['idvalue'];
$content=$_POST["content"];
$content=htmlspecialchars($content);


//进行数据的插入
$sql = "INSERT INTO wall(name, time, color,content) VALUES ('".$name."',$time,'".$color."','".$content."')";
$result = mysqli_query($conn,$sql);

//echo mysqli_error($conn);

if ($result) {
	echo "Success";

	header("Location: ./index.php"); 


}




?>