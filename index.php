<?php
include_once("./connect.php");
//获取所有数据
$sql = 'SELECT * FROM wall';
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>许愿墙</title>
	<link rel="stylesheet" href="./Css/index.css" />
	<script type="text/javascript" src='./Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='./Js/index.js'></script>
</head>
<body>
	<div id='top'>
		<span id='send'></span>
	</div>
	<div id='main'>
	<?php foreach ($data as $v) { ?>
		<dl class='paper <?php echo $v['color']?>'>
			<dt>
				<span class='username'>	<?php echo $v['name']?>;</span>
				<span class='num'>No.	<?php echo $v['id']?></span>
			</dt>
			<dd class='content'>	<?php echo $v['content']?></dd>
			<dd class='bottom'>
				<span class='time'>	<?php $date=date('Y-m-d H:i:s',$v['time']);  echo $date?></span>
				<a href="./delete.php?id=<?php echo $v['id'] ?>" class='close'></a>
			</dd>
		</dl>
		<?php } ?>






		
	
	</div>
	
<!--[if IE 6]>
    <script type="text/javascript" src="./Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>