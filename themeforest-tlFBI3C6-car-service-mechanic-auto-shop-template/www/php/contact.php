<?php
require_once("contact_form/config.php");
?>
<div class="theme-page padding-bottom-66">
	<div class="clearfix">
		<div class="row full-width">
			<div class="contact-map" id="map" data-scroll-wheel="0" data-draggable="0"></div>
		</div>
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
		<div class="row page-margin-top">
			<form class="contact-form" id="contact-form" method="post" action="contact_form/contact_form.php">
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
	</div>
</div>