<?php
require_once("contact_form/config.php");
?>
<div class="theme-page padding-bottom-66">
	<div class="row gray full-width page-header vertical-align-table">
		<div class="row full-width padding-top-bottom-50 vertical-align-cell">
			<div class="row">
				<div class="page-header-left">
					<h1>CONTACT US</h1>
				</div>
				<div class="page-header-right">
					<div class="bread-crumb-container">
						<label>YOU ARE HERE:</label>
						<ul class="bread-crumb">
							<li>
								<a title="HOME" href="?page=home">
									HOME
								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							<li>
								CONTACT US
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row margin-top-70">
		<div class="column column-3-4">
			<div class="contact-map" id="map"></div>
			<div class="row page-margin-top">
				<div class="column column-1-3">
					<ul class="features-list">
						<li>
							<h5>CALL US NOW AT</h5>
							<div class="icon sl-small-phone-circle"></div>
							<p>
								Mobile: (520) 577 2710<br>
								Assistance: (520) 577 2725<br>
								Weekdays: (520) 577 7212
							</p>
						</li>
					</ul>
				</div>
				<div class="column column-1-3">
					<ul class="features-list">
						<li>
							<h5>TUCSON CAR SERVICE</h5>
							<div class="icon sl-small-location-map"></div>
							<p>
								Tucson, Arizona 80210<br>
								501 Archwood Lane<br>
								<a target="_blank" href="//www.google.pl/maps/place/Tucson,+Arizona,+Stany+Zjednoczone/@32.15591,-110.883805,11z/data=!3m1!4b1!4m2!3m1!1s0x86d665410b2ced2b:0x73c32d384d16c715">Display on Map</a>
							</p>
						</li>
					</ul>
				</div>
				<div class="column column-1-3">
					<ul class="features-list">
						<li>
							<h5>24/7 ASSISTANCE</h5>
							<div class="icon sl-small-truck-tow"></div>
							<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas.</p>
						</li>
					</ul>
				</div>
			</div>
			<h3 class="box-header page-margin-top">DROP US A LINE</h3>
			<form class="contact-form page-margin-top" id="contact-form" method="post" action="contact_form/contact_form.php">
				<div class="row">
					<fieldset class="column column-1-2">
						<input class="text-input" name="name" type="text" value="<?php echo _def_name; ?>" placeholder="<?php echo _def_name; ?>">
						<input class="text-input" name="email" type="text" value="<?php echo _def_email; ?>" placeholder="<?php echo _def_email; ?>">
						<input class="text-input" name="phone" type="text" value="<?php echo _def_phone; ?>" placeholder="<?php echo _def_phone; ?>">
					</fieldset>
					<fieldset class="column column-1-2">
						<textarea name="message" placeholder="<?php echo _def_message; ?>"><?php echo _def_message; ?></textarea>
					</fieldset>
				</div>
				<div class="row margin-top-30">
					<div class="column column-1-2">
						<p>We will contact you within one business day.</p>
					</div>
					<div class="column column-1-2 align-right">
						<input type="hidden" name="action" value="contact_form" />
						<div class="row margin-top-20 padding-bottom-20">
							<a class="more submit-contact-form" href="#" title="SEND MESSAGE"><span>SEND MESSAGE</span></a>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="column column-1-4 re-smart-column">
			<div class="re-smart-column-wrapper">
				<div class="call-to-action">
					<div class="hexagon small"><div class="sl-small-percent"></div></div>
					<h4 class="margin-top-58">ONLINE APPOINTMENT</h4>
					<p class="description">Book your appointment now and get $5 discount.</p>
					<a class="more" href="?page=appointment" title="MAKE APPOINTMENT"><span>MAKE APPOINTMENT</span></a>
				</div>
				<h6 class="box-header page-margin-top">LATEST POSTS</h6>
				<ul class="blog small margin-top-30 clearfix">
					<li>
						<a href="?page=post" title="Clunking Sound Under The Hood" class="post-image">
							<img src="images/samples/90x90/image_01.jpg" alt="">
						</a>
						<div class="post-content">
							<a href="?page=post" title="Clunking Sound Under The Hood">Clunking Sound Under The Hood</a>
							<ul class="post-details">
								<li class="date">April 25, 2015</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="?page=post" title="Signs Your Car Needs Engine Repair" class="post-image">
							<img src="images/samples/90x90/image_02.jpg" alt="">
						</a>
						<div class="post-content">
							<a href="?page=post" title="Signs Your Car Needs Engine Repair">Signs Your Car Needs Engine Repair</a>
							<ul class="post-details">
								<li class="date">April 17, 2015</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="?page=post" title="Replacing a Timing Belt Service Cost" class="post-image">
							<img src="images/samples/90x90/image_03.jpg" alt="">
						</a>
						<div class="post-content">
							<a href="?page=post" title="Replacing a Timing Belt Service Cost">Replacing a Timing Belt Service Cost</a>
							<ul class="post-details">
								<li class="date">March 05, 2015</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>