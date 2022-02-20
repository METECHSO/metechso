<?php
$title = "Contact";
include "header.php";
?>
<?php
include "style.php";
?>
<div class="page-title-section" style="background-image: url(img/bg/bg-banner-2.jpg);">
	<div class="container">
		<h1>Contact</h1>
		<ul>
			<li>
				<a href="index.php">Home</a>
			</li>
			<li>
				<a href="contact.php">Contact</a>
			</li>
		</ul>
	</div>
</div>
<div class="section-block">
	<div class="container">
		<div class="section-heading center-holder">
			<span>Get in Touch</span>
			<h3>Let's Talk about Your Business</h3>
			<div class="section-heading-line"></div>
		</div>
		<div class="row mt-50">
			<div class="col-md-6 col-sm-6 col-12">
				<div id="map" class="mb-20 mt-10">
					<iframe width="100%" height="420" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Jl.%20Lestari%201%20Blok%20D2A%20No.4,%20RT.6/RW.2,%20Medang,%20Kec.%20Pagedangan,%20Tangerang,%20Banten%2015334+(My%20Business%20Name)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-12">
				<form id="contact" class="contact-form mt-6" method="post" action="https://formspree.io/f/mknywpql">
					<div class="messages"></div>
					<div class="row">
						<div class="col-md-6">
							<!-- Name input -->
							<div class="form-group">
								<input type="text" class="form-control" name="name" id="name" placeholder="Your name" required="required" data-error="Name is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<!-- Email input -->
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Email address" required="required" data-error="Email is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<!-- Subject input -->
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="required" data-error="Subject is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<!-- Message textarea -->
							<div class="form-group">
								<textarea name="message" id="message" class="form-control" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Send Message</button><!-- Send Button -->
				</form>
			</div>
		</div>
		<div class="row mt-50">
			<div class="col-md-4 col-sm-4 col-12">
				<div class="feature-flex-square">
					<div class="clearfix">
						<div class="feature-flex-square-icon">
							<i class="fa fa-building"></i>
						</div>
						<div class="feature-flex-square-content">
							<p>
							<h4>Head Office</h4>
							</p>
							<p>
							<h6>Medang Lestari, Pagedangan</h6>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-12">
				<div class="feature-flex-square">
					<div class="clearfix">
						<div class="feature-flex-square-icon">
							<i class="fa fa-whatsapp"></i>
						</div>
						<div class="feature-flex-square-content">
							<p>
							<h4>Whatsapp</h4>
							</p>
							<p>
							<h6>(+62)889-0569-4314</h6>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-12">
				<div class="feature-flex-square">
					<div class="clearfix">
						<div class="feature-flex-square-icon">
							<i class="fa fa-envelope-open"></i>
						</div>
						<div class="feature-flex-square-content">
							<p>
							<h4>Mail</h4>
							</p>
							<p>
							<h6>mailmetechso@gmail.com</h6>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>
<?php
include "script.php";
?>