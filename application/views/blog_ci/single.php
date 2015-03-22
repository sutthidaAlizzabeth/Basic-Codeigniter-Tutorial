<? include('header.php') ?>
<div id="main" class="container">
	<div id="primary" class="row">
		<div id="content" class="span8" role="main">
			<div class="box box-header bg_green">
				<h1 class="entry-title white">
					<i class="icon-pencil"></i> 
					<span><?php echo $result->title ?></span>
				</h1>
			</div>
			<article class="box box-content post">
				<div class="box">
					<div class="post-title">													
						<div class="post-meta">
							<ul>
								<li><i class="icon-calendar"><time datetime="2013-08-4"> 4 สิงหาคม 2013</time></i></li>
								<li class="divider">/</li>
								<li><i class="icon-time"> 23:23 น.</i></li>
								<li class="divider">/</li>
								<li><div class="category">PHP</div></li>
							</ul>
						</div>
					</div>
					<div class="entry-content">
						<?php echo $result->content ?>
					</div>
					<div class="share-social">
						<ul>
							<li style="margin-top: 4px;"><span>Share:</span></li>
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
			<? include "sidebar.php" ?>
		</div>
	</div>
</div>
<? include('footer.php') ?>