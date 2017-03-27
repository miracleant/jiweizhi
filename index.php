<?php include('header.php') ?>
<!-- 电脑端的轮播器 -->
	<div class="content">
		<div id="box" class="play carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#box" data-slide-to="0" class="active"></li>	
				<li data-target="#box" data-slide-to="1" ></li>	
				<li data-target="#box" data-slide-to="2" ></li>	
			</ol>
			<!-- 轮播器的图片 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="image/1.jpg" alt="first" />
				</div>
				<div class="item">
					<img src="image/2.jpg" alt="seconed"/>
				</div>
				<div class="item">
					<img src="image/3.jpg" alt="three" />
				</div>
			</div>
			<a class="left carousel-control pc" href="#box" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control pc" href="#box" data-slide="next">&rsaquo;</a>
		</div>
		<script>
				$('.carousel').carousel({ interval: 2000})
		</script>
		<!-- 轮播器结尾 -->
		<!-- pc端右边的空白位 -->
		<div class="sidebar pc">
					此处为简介或者广告位
		</div>
	</div><!-- content结尾 -->
<?php include('footer.php') ?>