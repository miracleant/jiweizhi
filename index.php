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
		<!-- 轮播器下方的照片展示位 -->
		<div class="photo">
			<div class="pc" style="width:940px;height:400px; ">
				<div class="pc-photo" style="width:320px; height:400px; float:left;background:black;">
				</div>
				<div class="pc-photo" style="width:620px;height:200px; float:left;background:white;">
				</div>
				<div class="pc-photo" style="width:310px;height:200px;float:right;background:gray;">
				</div>
				<div class="pc-photo" style="width:310px;height:200px;float:right;background:green;">
				</div>
			</div>
		</div>
		<!-- 分界线 -->
		<div class="word">
			<a href="more.html" target="_blank" style="float:right;padding:3px; margin-bottom:5px;">更多</a>
			<h2 style="font-size:16px; display；inline; margin-bottom:0px;">商品</h2>
			<hr style="margin:0px; padding:0px;"/>	
		</div>
		<!-- 商品图片展示 -->
		<div class="phone">	
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
		</div>
<!-- 手机端图片展示到此为止，以下为电脑端的扩展 -->
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
			<div class="photo-dis">
				<p>
						<a href="detail.html">
							<img src="image/photo1.jpg" />
						</a>
				</p>
				<div>
					<h3 class="photo-word-dis">
						<a href="detail.html">埃菲尔铁塔</a>
					</h3>
					<p class="photo-word photo-word-dis">
						<span class="fense photo-word-dis">10</span>
						 评论&nbsp
						<span class="fense photo-word-dis">15</span>
						 收藏&nbsp
					</p>
				</div>
				<div>	
					<dd style="float:right;margin-top:10px;">
						<a href="#" style="font-size:16px;">paral<img src="image/photo3.jpg" style="width:28px;height:28px;padding:0px 5px;border-radius:14px;"></a>
					</dd>
				</div>
			</div>
	</div><!-- content结尾 -->
<?php include('footer.php') ?>