<!-- footer of the page -->
			<footer id="footer" class="style14">
				<!-- socialize holder -->
				<div class="socialize-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<strong class="title">Socialize with us</strong>
								<!-- footer-social -->
								<ul class="list-inline footer-social">
									<li class="facebook"><a href="<?php echo $fb[0]->data;?>"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<!-- parallax-holder -->
					<div class="parallax-holder">
						<div class="parallax-frame" style="padding-bottom: 720px; background-image: url(&quot;<?php echo base_url();?>Assets/assets/Bg1.jpg&quot;); background-attachment: fixed; background-size: 1899px 1186.88px; background-position: 50% -133.938px; background-repeat: no-repeat;"><img src="<?php echo base_url();?>Assets/assets/img08.jpg" height="1200" width="1920" alt="image description" style="visibility: hidden;"></div>
					</div>
				</div>
				<!-- footer cent -->
				<div id="contact" class="footer-cent bg-shark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 info-box column1">
								<!-- f contact info2 -->
								<div class="f-contact-info2">
									<h5>Contact Information</h5>
									<address><i class="fa fa-map-marker"></i> <?php echo $location[0]->data;?> </address>
									<div class="mail-box2">
										<span class="mail-box"><i class="fa fa-envelope-o"></i> <a href="mailto:info@sooma.ae" class="email"> <?php echo $email[0]->data;?></a></span>
									</div>
									<div class="tel-holder">
										<span class="tel-box"><i class="fa fa-phone"></i> <a href="tel:00201008431112" class="tel"><?php echo $phone[0]->data;?></a></span>
									</div>
									<div class="mail-box2">
										<span class="mail-box"><i class="fa fa-link"></i> <a href="mailto:www.sooma.ae" class="email">sooma.ae</a></span>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 column2">
								<!-- f video box -->
								<div class="f-video-box">
									<h5>Company Portfolio</h5>
									<div class="video-area">
										<div class="fluid-width-video-wrapper" style="padding-top: 56.2%;">
											<!--<iframe   src="<?php echo base_url();?>Assets/assets/DubaiFL.mp4" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="fitvid465872"></iframe>-->
										</div>

									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 column3 clearfix-sm">
								<!-- f mailing form2 -->
								<div class="f-mailing-form2">
									<h5>Mailing List</h5>
									<div class="mailing-form2">
										<label>Please enter your email address for our mailing list to keep your self our lastest updated.</label>
										<div class="form-col">
											<!-- Begin MailChimp Signup Form -->
											<div id="mc_embed_signup">
												<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
													<div id="mc_embed_signup_scroll">
														<div class="mc-field-group">
															<label for="mce-EMAIL">Email Address </label>
															<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
														</div>
														<div id="mce-responses" class="clear">
															<div class="response" id="mce-error-response" style="display:none"></div>
															<div class="response" id="mce-success-response" style="display:none"></div>
														</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
														<div style="position: absolute; left: -5000px;"><input type="text" name="b_cb2d5a07fdf0d86c96f260674_1103b14a3b" tabindex="-1" value=""></div>
														<div class="clear">
															<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn button btn-submit"><i class="fa fa-paper-plane"></i></button>
														</div>
													</div>
												</form>
											</div>
											<!--End mc_embed_signup-->
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 column4">
								<!-- f flicker -->
							
									<img src="<?php echo base_url();?>Assets/assets/LogoC.png"  alt="Sooma" style="width:100%;"	>
								
							</div>
						</div>
					</div>
				</div>
				<!-- footer bottom -->
				<div class="footer-bottom bg-dark-jungle">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="bottom-box1">
									<!-- footer nav -->
									<ul class="list-inline footer-nav">
										<li><a href="#">Home</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Careers</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Use of terms</a></li>
									</ul>
									<span class="copyright">© 2016 Developed by <a href="#"> Overlimits LLC</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="fa fa-chevron-up" id="gotoTop" style="display: none;"></div>
	</div>
	
	<!-- include jQuery library -->
	<div class="fit-vids-style" id="fit-vids-style" style="display: none;">­
		<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}
		.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></div>

		<script type="text/javascript" src="<?php echo base_url();?>Assets/assets/jquery-1.11.3.min.js"></script>
	<!-- include bootstrap JavaScript -->
	<script type="text/javascript" src="<?php echo base_url();?>Assets/assets/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script type="text/javascript" src="<?php echo base_url();?>Assets/assets/jquery.main.js"></script>
	<!-- include plugins JavaScript -->
	<script type="text/javascript" src="<?php echo base_url();?>Assets/assets/plugins.js"></script>

</body>
</html>
