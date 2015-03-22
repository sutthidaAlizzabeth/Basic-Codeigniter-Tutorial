<?php $this->load->view('blog_ci/header') ?>
<div id="main" class="container">
	<div id="primary" class="row">
		<div id="content" class="span8" role="main">
			<div class="box box-header bg_green">
				Latest Posts
			</div>
			<?php
			foreach ($result as $row) {
				
			?>
				<article class="box box-content post">
					<div class="entry-image lightbox entry-thumbnail">
						<a href="content.php">
							<!-- <img alt="img" src="imgs/photodune-2360814-good-job-m-370x330.jpg" width="200" height="178"/> -->
							<span class="entry-type overlay bg_blue2">
								<i class="icon-pencil"></i>
							</span>
						</a>
					</div>	<!-- end entry-image -->
					<div class="box box-descript">
						<div class="post-title">													
							<a href="<?php echo base_url('main/get_post/'.$row->id) ?>">
								<h1 class="entry-title">
									<span><?php echo $row->title ?></span>
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
						<div class="entry-short-content">
							<p>
								<?php echo $row->content ?>						
							</p>
						</div>
						<!-- <div class="share-social">
							<ul>
								<li style="margin-top: 2px;"><span>Share</span></li>
								<li><i class="icon-facebook facebook"></i></li>
								<li><i class="icon-google-plus google_plus"></i></li>
								<li><i class="icon-twitter twitter"></i></li>
							</ul>
						</div> -->
					</div> 		<!-- end box-descript -->
				</article> <!-- end article -->
			<?
			}
			?>
			<div id="pagination">
				<ul>
					<li><a href="" class="active"><span>1</span></a></li>
					<li><a href=""><span>2</span></a></li>
					<li><a href=""><span>3</span></a></li>
					<li><a href=""><span>›</span></a></li>
					<li><a href=""><span>››</span></a></li>
				</ul>
			</div>
		</div>
		<div id="side-bar" class="span4">
			<?php $this->load->view('blog_ci/sidebar') ?>
		</div>
	</div>
</div>
<?php $this->load->view('blog_ci/footer') ?>
