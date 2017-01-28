<div class="content-wrapper">
<div class="header-spacer"></div>
<!-- Stunning header -->

<div class="stunning-header stunning-header-bg-rose">
	<div class="stunning-header-content">
		<h1 class="stunning-header-title">Event Details</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="<?php base_url();?>">Home</a>
				<i class="seoicon-right-arrow"></i>
			</li>
			<li class="breadcrumbs-item active">
				<span href="#">Event Details</span>
				<i class="seoicon-right-arrow"></i>
			</li>
		</ul>
	</div>
</div>

<!-- End Stunning header -->

<!-- Overlay search -->

<div class="overlay_search">
	<div class="container">
		<div class="row">
			<div class="form_search-wrap">
				<form>
					<input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
					<a href="#" class="overlay_search-close">
						<span></span>
						<span></span>
					</a>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- End Overlay search -->

<!-- Product description -->


<div class="container-fluid">
	<div class="row bg-border-color medium-padding120">
		<div class="container">
			<div class="row">
				<div class="product-description-ver2">

					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<div class="swiper-container" data-effect="fade">

						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->

							<div class="swiper-slide">
								<div class="product-description-ver2-thumb">
									<img src="<?php echo base_url().$Data->image;?>" alt="description" class="">
								</div>
							</div>

							

						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>

					</div>
					</div>

					<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="product-description-ver2-content">
							<time class="post__date published" datetime="2016-04-03 12:00:00">
								<?php echo $Data->date;?>
							</time>

							<div class="heading">
								<h4 class="h1 heading-title"><?php echo $Data->name;?></h4>
								<!-- <p><?php echo $Data->description;?>
								</p> -->
							</div>


							<div class="likes-block">

								<a href="<?php echo base_url();?>#Contact" class="btn btn-medium btn--dark btn-hover-shadow">
									<span class="text">Contact us for reservation</span>
									<span class="semicircle"></span>
								</a>

								<!-- <a href="#" class="likes">
									<i class="seoicon-shape-heart"></i>
									<span class="count-likes">54</span>
								</a> -->
							</div>
							</div>
						</div>

				</div>
				

			</div>

		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row bg-border-color medium-padding120">
		<div class="container">
			<div class="row">
				<div class="product-description-ver2">


					<div class="col-lg-12 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="product-description-ver2-content">
							

							<div >
								
								<p><?php echo $Data->description;?>
									
								</p>
							</div>


							<div class="likes-block">

								<a href="<?php echo base_url();?>#Contact" class="btn btn-medium btn--dark btn-hover-shadow">
									<span class="text">Contact us for reservation</span>
									<span class="semicircle"></span>
								</a>

								<!-- <a href="#" class="likes">
									<i class="seoicon-shape-heart"></i>
									<span class="count-likes">54</span>
								</a> -->
							</div>
							</div>
						</div>

				</div>
				

			</div>
			
		</div>
	</div>
</div>
<!-- End Product description -->


</div>