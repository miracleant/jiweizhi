<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" /> 

		<title>己为之</title>
		<link rel="stylesheet" href="css/bootstrap-responsive.css" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" media="screen AND (max-width:480px)"href="css/phone.css" />
		<link rel="stylesheet" media="screen AND (min-width:480px)"href="css/pc.css">

		<script type="text/javascript" src="js/jquery.js"></script>
		<script typw="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/carousel.js" ></script>
		<!-- 数据统计代码 -->
		<script>
			var _hmt = _hmt || [];
				(function() {
			var hm = document.createElement("script");
			hm.src = "//hm.baidu.com/hm.js?6ced26081c5e3083ee412876781823d6";
			var s = document.getElementsByTagName("script")[0]; 
			s.parentNode.insertBefore(hm, s);
			})();
		</script>

	</head>
	<body>
		<header>
			<!-- 电脑端 -->
			<div class="head-nav">
				<div class="logo pc">
					己为之
				</div>
				<ul class="nav  nav-pills">
					<li><a href="index.php">首页</a></li>
					<li><a href="ranklist.php">作家榜</a></li>
					<li><a href="special.php">专题</a></li>
					<li><a href="about.php">关于</a></li>
				</ul>
				<form class="form-search">
						<div class="input-append">
							<input type="text" class="span2 search-query">
							<button type="submit" class="btn">搜索</button>
						</div>
				</form>
				<div class="login">
						<a href="login.php">登录</a> | <a href="sign.php">注册</a>
				</div>
			</div>
		<header>

		<!-- 
			此前在写这个的时候犯了个错误，
			反正手机端和电脑端用的是两套css,
			所以头部导航栏不用写两次，
			只需在各自的css里面控制就好了 
		-->