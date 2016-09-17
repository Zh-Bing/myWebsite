<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<meta name="viewport"
		  content="width=device-width, initial-scale=1.0">
 	<!--	设置基准路径-->
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
	<!--	隐藏地址栏-->
	<script>
		window.addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
</head>
<body>
	<!--多个页面使用，单独创建一个-->
	<?php include"header.php";?>
	<div id="banner"></div>
	<div id="works"></div>
	<div id="services"></div>
	<div id="meet"></div>
	<footer id="footer"></footer>
</body>
</html>
