<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="module/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="module/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="module/jquery/jquery-2.0.3.js"></script>
	<script type="text/javascript" src="module/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div id="page">
		<header>
			<div class="container">
				<div class="row-fluid">
					<div class="span6">
						<a href="../blog"><h1><small id="site_name">Simply is the best.</small></h1></a>
					</div>
					<div class="set-right social">
						<a href="">
							<i class="icon-facebook"></i>
						</a>
						<a href="">
							<i class="icon-twitter"></i>
						</a>
					</div>
				</div>
			</div>
		</header>
		<div id="main" class="container">
			<div id="primary" class="row">
				<div id="content" class="span8" role="main">
					<div class="box box-header bg_green">
						<h1 class="entry-title white">
							<i class="icon-pencil"></i> 
							<span>บทเรียน WEB Design</span>
						</h1>
					</div>
					<article class="box box-content post">
						<div class="box">
							<div class="post-title">													
								<div class="post-meta">
									<ul>
										<li><i class="icon-calendar"><time datetime="2013-08-4"> 4 สิงหาคม 2013</time></i></li>
										<li class="divider">/</li>
										<li><div class="category">PHP</div></li>
									</ul>
								</div>
							</div>
							<div class="entry-content">
							Hi! Welcome to our theme “Bliss”. We worked our butts of making this Premium WordPress Template for you, we implemented everything we would like to have on our blog and added a couple of other things as well ( things our customers have asked for in the past ). Although we put Bliss in the
							</div>
							<div class="share-social">
								<ul>
									<li style="margin-top: 2px;"><span>Share</span></li>
									<li><i class="icon-facebook facebook"></i></li>
									<li><i class="icon-google-plus google_plus"></i></li>
									<li><i class="icon-twitter twitter"></i></li>
								</ul>
							</div>
						</div>
					</article>

					<div id="profile" class="box-content post">
						<div id="profile-descript" class="box">
							<div class="entry-image lightbox entry-avatar set-left">
								<img src="http://0.s3.envato.com/files/45076816/avatar.jpg">
							</div>
							<div class="box post-profile">
								<div class="entry-author">
									itoon.sit
								</div>
								<div class="profile">
									เรียนจบคณะ IT ที่พระจอมเกล้าธนบุรี ทำงานสาย IT 
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet lorem sapien, a hendrerit nisl accumsan eu. Nulla libero dui, pretium bibendum metus ac, consectetur consequat odio. Curabitur felis elit, egestas quis euismod et, egestas eget diam. Pellentesque eget sem 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="side-bar" class="span4">
					<? include "slide-bar.php" ?>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row-fluid">
					<div class="span4">
						<div class="text-header">Simply is the best.</div>
					</div>
					<div class="span4">
						<div class="text-header">Tags</div>
						<div class="box-other">
							<div class="box">
								<?
									for ($i=0; $i < 5 ; $i++) { 
								?>
									<div class="tag">Beginner</div>
									<div class="tag">Artical</div>
									<div class="tag">Hard</div>
									<div class="tag">shrot</div>
								<?
									}
								?>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="text-header">Team</div>
						<div class="box-other">
							<div class="box">
								Design @ 2013 <span class="design-by">itoon soonnew</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>