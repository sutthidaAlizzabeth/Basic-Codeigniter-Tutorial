<? include('header.php') ?>

<div id="main" class="container">
	<div id="primary" class="row">
		<div id="content" class="span8" role="main">
			<div class="box box-header bg_green">
				PHP
			</div>
			<?
			for($i=0;$i<3;$i++){
			?>
				<article class="box box-content post">
					<div class="entry-image lightbox entry-thumbnail">
						<a href="content.php">
							<span class="entry-type overlay bg_blue2">
								<i class="icon-pencil"></i>
							</span>
						</a>
					</div>	<!-- end entry-image -->
					<div class="box box-descript">
						<div class="post-title">													
							<a href="content.php">
								<h1 class="entry-title">
									<span>บทเรียน WEB Design</span>
									<!-- <span class="entry-author">by soonnew</span> -->
								</h1>
							</a>
							<div class="post-meta">
								<ul>
									<li><i class="icon-calendar"><time datetime="2013-08-4"> 4 สิงหาคม 2013</time></i></li>
									<li class="divider">/</li>
									<li><div class="category">PHP</div></li>
								</ul>
							</div>
						</div>
						<div class="entry-content">
							<p>
								พันธกิจของเราคือการทำโลกนี้ให้ดีขึ้นผ่านผู้นำที่ยิ่งใหญ่ไม่กี่ท่าน เพื่อให้บรรลุ
								พันธกิจดังกล่าว เรามีปรัชญาในการทำงานที่เรียกว่า 4I’s คือ Integrity คือ
								ความซื่อสัตย์มีคุณธรรมเป็นจุดเริ่มต้น ดังนั้นเราจะรับงานที่เราคิดว่า
								Implementation ได้จริงๆ คือเป็นงานที่ลูกค้านำไปปฎิบัติแล้วเกิดผลสำเร็จ
								จะทำอย่างนั้นได้เราต้องสร้างการมีส่วนร่วมหรือ							
							</p>
						</div>
						<div class="share-social">
							<ul>
								<li style="margin-top: 2px;"><span>Share</span></li>
								<li><i class="icon-facebook facebook"></i></li>
								<li><i class="icon-google-plus google_plus"></i></li>
								<li><i class="icon-twitter twitter"></i></li>
							</ul>
						</div>
					</div> 		<!-- end box-descript -->
				</article> <!-- end article -->

				<article class="box box-content post">
					<div class="entry-image lightbox entry-thumbnail">
						<!-- <img src="imgs/photodune-1686095-prairie-in-morocco-m-370x330.jpg" width="200" height="178"> -->
						<span class="entry-type overlay bg_red2">
							<i class="icon-youtube-play"></i>
						</span>
					</div>
					<div class="box box-descript">
						<div class="post-title">
							<a href="content.php">
								<h1 class="entry-title">
									<span>PHP Web Developer</span>
									<!-- <span class="entry-author">by soonnew</span> -->
								</h1>
							</a>													
							<div class="post-meta">
								<ul>
									<li><i class="icon-calendar"><time datetime="2013-08-4"> 4 สิงหาคม 2013</time></i></li>
									<li class="divider">/</li>
									<li><div class="category">PHP</div></li>
								</ul>
							</div>
						</div>
						<div class="entry-content">
							<p>
								พันธกิจของเราคือการทำโลกนี้ให้ดีขึ้นผ่านผู้นำที่ยิ่งใหญ่ไม่กี่ท่าน เพื่อให้บรรลุ
								พันธกิจดังกล่าว เรามีปรัชญาในการทำงานที่เรียกว่า 4I’s คือ Integrity คือ
								ความซื่อสัตย์มีคุณธรรมเป็นจุดเริ่มต้น ดังนั้นเราจะรับงานที่เราคิดว่า
								Implementation ได้จริงๆ คือเป็นงานที่ลูกค้านำไปปฎิบัติแล้วเกิดผลสำเร็จ
								จะทำอย่างนั้นได้เราต้องสร้างการมีส่วนร่วมหรือ							
							</p>
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
			<?
			}
			?>
		</div>
		<div id="side-bar" class="span4">
			<? include "sidebar.php" ?>
		</div>
	</div>
</div>
<? include('footer.php') ?>
