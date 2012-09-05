
<!-- Start About Content -->
<div class="container margin-bottom">
	<div class="row">
		<div class="span12">
			<div class="row margin-top">
				<div class="span8 margin-bottom">
					<div class="row">
						<div class="span4">
							<h5>Contact Info.</h5>
							<ul>
								<li><i class="icon-user"></i> John Smith</li>
								<li><i class="icon-home"></i> 021 123 1234</li>
								<li><i class="icon-envelope"></i> support@yourmail.com</li>
							</ul>
						</div><!-- .span4 -->
						<div class="span4 margin-botom">
							<h5>Social Links</h5>
							<ul>
								<li><i class="icon-twitter-sign"></i> yourtwitter</li>
								<li><i class="icon-facebook-sign"></i> facebook.com/somewhere</li>
								<li><i class="icon-linkedin-sign"></i> John Smith</li>
							</ul>
						</div><!-- .span4 -->
					</div><!-- .row -->
					<hr class="dashed margin-top-bottom">
					<!-- Start Map -->
					<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.za/maps?oe=utf-8&amp;ll=-33.924845,18.424072&amp;spn=0.024927,0.100422&amp;z=14&amp;output=embed">
					</iframe>
					<!-- End Map -->
					<hr class="dashed margin-top-bottom">
					<h3><span class="underline">Quick</span> Contact Form</h3>
					<form class="contact">
						<label><strong>Name :</strong></label>
						<input type="text" class="span5" placeholder="Name ...">
						<label><strong>E-Mail :</strong></label>
						<input type="text" class="span5" placeholder="E-Mail ...">
						<label><strong>URL :</strong></label>
						<input type="text" class="span5" placeholder="*Optional">
						<label><strong>Message :</strong></label>
						<textarea rows="3" id="textarea" class="span5"></textarea>
						<span class="help-block">
						<strong>PLS. indicate the type of support</strong>
						</span>
						<label class="checkbox">
						<input type="checkbox"> Pre Sales </label>
						<label class="checkbox">
						<input type="checkbox"> After Sales </label>
						<label class="checkbox">
						<input type="checkbox"> General Inquiry</strong>
						</label>
						<br />
						<button type="submit" class="btn"><i class="icon-envelope"></i> Submit</button>
					</form>
				</div><!-- .span8 -->
				
				<?php $tpl->loadView('common/sidebar'); ?>
				
			</div><!-- .row margin-top-->
		</div><!-- .span12 -->
	</div><!-- .row -->
</div><!-- .container -->
<!-- End About Content -->