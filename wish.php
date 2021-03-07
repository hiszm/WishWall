<?php
include_once("./connect.php");

$sql = 'SELECT id FROM wall order by id desc limit 1';

$result = mysqli_query($conn,$sql);

//获得数据目录条数

$num = mysqli_fetch_all($result,MYSQLI_ASSOC);


$id = array_column($num, 'id');

$n=$id['0']+1;

echo "$n";
?>


<!DOCTYPE  >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>许愿墙</title>
	<link rel="stylesheet" href="./Css/index.css" />
	<script type="text/javascript" src='./Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='./Js/index.js'></script>
	<style type="text/css">
		#content {
			width: 638px;
			height:650px;
			margin:0 auto;
			margin-top:100px;
			/*background-color:#F0FAFF;
			border:2px solid #C9F;*/
		}
		#content .c-top{
			width: 638px;
			height: 80px;
			background: url(./Images/content_top.jpg) no-repeat;
		}
		#content .c-bottom{
			width: 638px;
			height: 50px;
			background: url(./Images/content_bottom.jpg) no-repeat;
		}
		.c-content{
			width: 638px;
			height: 470px;
			background: url(./Images/content_bg.jpg) repeat;
		}
		.papercolor{
			width:588px;
			height: 60px;
			margin-left: 35px;
			padding-top:15px;
		}
		.p-left{
			float: left;
			width: 120px;
			line-height: 27px;
		}
		.p-right{
			float: left;			
		}
		.color330{
			float: left;
			margin-left: 20px;
			border-right: #404040 1px solid; 
			border-top: #404040 1px solid;  
			border-left:#404040 1px solid;
			width: 25px;
			cursor: pointer;
			border-bottom: #404040 1px solid;
			height: 25px;
		}
		.papercontent{
			width: 588px;
			height: 210px;
			margin-left: 35px;
		}
		.left{
			width: 294px;
			height:100px;
			float: left;
		}
		.right{
			width: 294px;
			height:100px;
			float: left;
		}
		.left-top{
			margin-bottom: 10px;
		}
		.left-bottom{

		}
		.right-top{
			margin-bottom: 10px;
		}
		.right-bottom{
			width:200px;
			height:150px;
			border: 1px solid orange;
			margin-left:20px;
			background-color:#E8DEFF;
		}
		.name{
			clear: both;
			width: 588px;
			height: 50px;
			margin-left: 35px;
			margin-top:10px;
		}
		.name-left{
			width:60px;
			height: 26px;
			line-height: 26px;
			float: left;
		}
		.name-right{
			float: left;
		}
		.name-right input{
			width: 200px;
			height: 26px;
		}
		.code{
			clear: both;
			width: 588px;
			height: 50px;
			margin-left: 35px;
			margin-top:10px;
		}
		.code-left{
			width:50px;
			height: 26px;
			line-height: 26px;
			float: left;
		}
		.code-content{
			width:100px;
			float: left;
		}
		.code-content input{
			width: 100px;
			height: 26px;
		}
		.code-right{
			float:left;
			margin-left: 10px;
		}
		.code-right input{
			width: 40px;
			height: 26px;
			background-color: pink;
		}
		.submit{
			width:174px;
			height:38px;
			background: url(./Images/pic_submit.gif) no-repeat;
			margin-left:217px;
		}
		.shuname{
			width:80px;
			height:25px;
			margin-left: 120px;
		}
		span{
			font-size: 13px;
			font-family: "微软雅黑";
		}
	</style>
	
</head>
<body>
	<div id='top'></div>
	<div id="content">
		<div class="c-top"></div>
		<form action="add.php" method="post" id="myfrom">
			<div class="c-content">
				<div class="papercolor">
					<div class="p-left">
						<span>请选择纸条颜色:</span>
					</div>
					<div class="p-right">
						<div class="color330" id="a1" style="background:#FFDFFF"></div>
	                  	<div class="color330" id="a2" style="background:#C3FEC0"></div>
	                  	<div class="color330" id="a3" style="background:#FFE3b8"></div>
	                  	<div class="color330" id="a4" style="background:#CEECFF"></div>
	                 	<div class="color330" id="a5" style="background:#E8DEFF"></div>
	                 	<input type="hidden" value="" name="idvalue" id="idvalue">	             	
					</div>
				</div>
				<div class="papercontent">
					<div class="left">
						<div class="left-top">
							<span>输入你的祝福纸条内容:</span>
						</div>
						<div class="left-bottom">
							<textarea cols="25" rows="8" name="content" id="textfont"></textarea>
						</div>
					</div>
					<div class="right">
						<div class="right-top">
							<span>纸条效果预览:</span>
						</div>
						<div class="right-bottom">
							<div style="height:15px"><span>第<?php echo $n ?>条</span><br/></div>
						 	<div style="height:100px;margin-top:10px"><span id="font"></span></div>
						 	<div class="shuname"><span id="name">署名:</span></div>			
						</div>
					</div>
				</div>
				<div class="name">
					<div class="name-left">
						<span>您的署名:</span>
					</div>
					<div class="name-right">
						<input id="nameright" type="text" name="name" value="">
					</div>
				</div>
				<div class="code">
					<div class="code-left">
						<span>验证码:</span>
					</div>
					<div class="code-content">
						<input id="codeone" type="text" name="recode" value=""><span></span>
					</div>
					<div class="code-right">
						<input id="codetwo" type="text" name="code" value="<?php echo mt_rand(1000,9999); ?>" readonly>
					</div>				
				</div>
				<!--<div class="submit"><button type="submit" style="width:174px;height:38px"></button></div>-->
				<input style="BORDER-RIGHT: #f33b78 1px outset; BORDER-TOP: #f33b78 1px outset; FONT-WEIGHT: bold; BORDER-LEFT: #f33b78 1px outset; COLOR: #ffffff; BORDER-BOTTOM: #f33b78 1px outset; BACKGROUND-COLOR: #70ae0b;margin-left: 225px" type="submit" value="→ 开始贴许愿小纸条 ←" name="submit">
				
	                <input class="input" type="button" name="Submit2" value="返回">	
			</div>
		</form>
		<hr/ style="color:orange;width:550">
		<div class="c-bottom"></div>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="./Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
	<script type="text/javascript">
		//改变颜色
		$(".color330").click(function(){			
			var value=$(this).css("background-color");
			var idvalue=$(this).attr("id");
			console.log(idvalue);
			$("#idvalue").attr("value",idvalue);
			$(".right-bottom").css("background-color",value);
		})

		//改变值触发的事件
		var textfont = document.getElementById('textfont');
		var font = document.getElementById('font');
		textfont.onchange=function(){
			font.innerHTML=textfont.value;			
		}

		//改变值触发的事件
		var nameright = document.getElementById('nameright');
		nameright.onchange=function(){
			document.getElementById("name").innerText="署名: "+nameright.value;	
		}
		
		//在填写完毕验证码之后验证是否一致
		var codeone = document.getElementById('codeone');
		var codetwo = document.getElementById('codetwo');
		//表单时区焦点事件
		codeone.onblur=function(){
			//验证两次验证码是否一致
			if(codeone.value != codetwo.value){
				this.nextSibling.innerHTML='验证码不一致!'
				this.nextSibling.style.color='red';
			}
		}

		$( '.input' ).click( function () {
			window.location.href="index.php"; 
		} );
			
	</script>
</body>
</html>