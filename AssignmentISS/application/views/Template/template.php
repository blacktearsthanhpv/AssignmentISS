<?php
if ($type == "0")
	$title = "Hoc Sinh";
else if ($type == "2")
	$title = "Giao Vien";
else if ($type == "3")
	$title = "Giao Vien Chu Nhiem";
else if ($type == "4")
	$title = "Chu Nhiem Bo Mon";
else if ($type == "5")
	$title = "Truong Khoa";
else if ($type == "6")
	$title = "Can Bo Phong Dao Tao";
else 
	$title = "Nguoi Than"
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $title?></title>
<link rel="stylesheet" type="text/css"
	href=<?php echo base_url()."style/MenuBar/css/font-awesome.css"?>>
<link rel="stylesheet" type="text/css"
	href=<?php echo base_url()."style/MenuBar/css/menu.css"?>>

<script type="text/javascript"
	src=<?php echo base_url()."style/MenuBar/js/jquery.js"?>></script>
<script type="text/javascript"
	src=<?php echo base_url()."style/MenuBar/js/function.js"?>></script>
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
	<div
		style="background: #0099cc; font-size: 22px; text-align: center; color: #FFF; font-weight: bold; height: 100px; padding-top: 50px;">
		Assignment Information Security System
	</div>
	<div id="wrap">
		<header>
			<div class="inner relative">
				<nav id="navigation">
					<ul id="main-menu">
						<?php
							if($type==0){
								echo "<li class='"."current-menu-item"."'><a";
								echo " href='#'>Thông Tin Cá Nhân</a>";
								echo "</li>";

								echo "<li><a";
								echo " href='#'>Chỉnh sửa</a>";	
								echo "</li>";

								echo "<li><a";
								echo " href='#'>Xem điểm</a>";
								echo "</li>";
							} else if($type==1){
								echo "<li class='"."current-menu-item"."'><a";
								echo " href='#'>Thông tin Con em</a>";
								echo "</li>";
							}else if($type==2){
								echo "<li class='"."current-menu-item"."'><a";
								echo " href='#'>Xem điểm</a>";
								echo "</li>";
								echo "<li><a";
								echo " href='#'>Chỉnh sửa điểm</a>";
								echo "</li>";
							}else if($type==3){
								echo "<li class='"."current-menu-item"."'><a";
								echo " href='#'>Xem điểm</a>";
								echo "</li>";
							}else if($type==4){
								echo "<li class='"."current-menu-item"."'><a";
								echo " href='#'>Xem điểm</a>";
								echo "</li>";
							}else if($type==5){
								echo "<li class='"."current-menu-item"."'><a";
								echo " href='#'>Xem điểm</a>";
								echo "</li>";
							}else {
								echo "<li><a";
								echo " href='#'>Xem điểm</a>";
								echo "</li>";
								
								echo "<li><a";
								echo " href='#'>Sửa điểm</a>";
								echo "</li>";
								
								echo "<li class='"."current-menu-item"."'><a";
								echo " href='#'>Nhập điểm</a>";
								echo "</li>";
							}
							
						?>
						
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</header>
	</div>

	<div id="container"></div>
</body>
</html>