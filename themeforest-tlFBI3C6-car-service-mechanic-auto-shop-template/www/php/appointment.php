<?php
require_once("contact_form/config.php");
?>
<div class="theme-page padding-bottom-66">
	<div class="clearfix">
		<div class="row full-width">
			<div class="contact-map" id="map" data-scroll-wheel="0" data-draggable="0"></div>
		</div>
		<div class="row page-margin-top">
			<div class="column column-1-1">
				<div class="row">
					<h2 class="box-header">BOOK AN APPOINTMENT</h2>
					<p class="description align-center">We are one of the leading auto repair shops serving customers in Tucson.<br>All mechanic services are performed by highly qualified mechanics.</p>
				</div>
			</div>
		</div>
		<div class="row page-margin-top">
			<form class="contact-form cost-calculator-container" id="contact-form" method="post" action="contact_form/contact_form.php">
				<div class="row">
					<fieldset class="column column-1-3">
						<div class="cost-calculator-box clearfix">
							<label>VEHICLE YEAR</label>
							<input type="hidden" name="vehicle-year-label" value="VEHICLE YEAR">
							<div class="cost-slider-container">
								<input id="vehicle-year" class="cost-slider-input" name="vehicle-year" type="number" value="2008">
								<div class="cost-slider" data-value="2008" data-step="1" data-min="1990" data-max="2015" data-input="vehicle-year"></div>
							</div>
						</div>
					</fieldset>
					<fieldset class="column column-1-3">
						<div class="cost-calculator-box clearfix">
							<label>VEHICLE MAKE</label>
							<input type="hidden" name="vehicle-make-label" value="VEHICLE MAKE">
							<select name="vehicle-make" id="vehicle-make" class="cost-dropdown">
								<option value="" selected="selected">Choose...</option>
								<option value="General Motors">General Motors</option>
								<option value="Land Rover">Land Rover</option>
								<option value="Lexus">Lexus</option>
								<option value="Lincoln">Lincoln</option>
								<option value="Mazda">Mazda</option>
								<option value="Mercedes - Benz">Mercedes - Benz</option>
								<option value="Mercury">Mercury</option>
								<option value="Mitsubishi">Mitsubishi</option>
								<option value="Nissan">Nissan</option>
								<option value="Renault">Renault</option>
								<option value="Plymouth">Plymouth</option>
								<option value="Pontiac Porsche">Pontiac Porsche</option>
								<option value="Rover">Rover</option>
								<option value="Saab">Saab</option>
								<option value="Saleen">Saleen</option>
							</select>
							<input type="hidden" class="vehicle-make" name="vehicle-make-name" value="">
						</div>
					</fieldset>
					<fieldset class="column column-1-3">
						<div class="cost-calculator-box clearfix">
							<label>VEHICLE MILEAGE</label>
							<input type="hidden" name="vehicle-mileage-label" value="VEHICLE MILEAGE">
							<input id="vehicle-mileage" class="cost-slider-input big" name="vehicle-mileage" type="number" value="" placeholder="Vehicle Mileage">
						</div>
					</fieldset>
				</div>
				<div class="row page-margin-top">
					<fieldset class="column column-1-2">
						<div class="cost-calculator-box clearfix">
							<label>PREFFERED DATE OF APPOINTMENT</label>
							<input type="hidden" name="appointment-date-label" value="PREFFERED DATE OF APPOINTMENT">
							<div class="datepicker-container">
								<span class="ui-icon template-arrow-dropdown"></span>
								<input id="appointment-date" class="cost-slider-datepicker big" name="appointment-date" value="" placeholder="Preffered Date of Appointment">
							</div>
						</div>
						<div class="cost-calculator-box page-margin-top clearfix">
							<label>PREFFERED TIME FRAME</label>
							<input type="hidden" name="time-frame-label" value="PREFFERED TIME FRAME">
							<select name="time-frame" id="time-frame" class="cost-dropdown">
								<option value="" selected="selected">Choose...</option>
								<option value="09:00 AM - 10:00 AM">09:00 AM - 10:00 AM</option>
								<option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
								<option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
								<option value="12:00 PM - 01:00 PM">12:00 PM - 01:00 PM</option>
								<option value="01:00 PM - 02:00 PM">01:00 PM - 02:00 PM</option>
								<option value="02:00 PM - 03:00 PM">02:00 PM - 03:00 PM</option>
								<option value="03:00 PM - 04:00 PM">03:00 PM - 04:00 PM</option>
								<option value="04:00 PM - 05:00 PM">04:00 PM - 05:00 PM</option>
								<option value="05:00 PM - 06:00 PM">05:00 PM - 06:00 PM</option>
							</select>
							<input type="hidden" class="time-frame" name="time-frame-name" value="">
						</div>
						<div class="cost-calculator-box page-margin-top clearfix">
							<label>SELECT SERVICES NEEDED</label>
							<ul class="checkboxes-list margin-top-20">
								<li>
									<input type="hidden" value="Air Conditioning" name="air-conditioning-label">
									<input type="checkbox" data-value="1" value="0" name="air-contitioning" class="cost-slider-input type-checkbox" id="air-conditioning">
									<label for="air-conditioning" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Air Conditioning</label>
								</li>
								<li>
									<input type="hidden" value="Brakes Repair" name="brakes-repair-label">
									<input type="checkbox" data-value="1" value="0" name="brakes-repair" class="cost-slider-input type-checkbox" id="brakes-repair">
									<label for="brakes-repair" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Brakes Repair</label>
								</li>
								<li>
									<input type="hidden" value="Engine Diagnostics" name="engine-diagnostics-label">
									<input type="checkbox" data-value="1" value="0" name="engine-diagnostics" class="cost-slider-input type-checkbox" id="engine-diagnostics">
									<label for="engine-diagnostics" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Engine Diagnostics</label>
								</li>
							</ul>
							<ul class="checkboxes-list top-border-none">
								<li>
									<input type="hidden" value="Heating &amp; Cooling" name="heating-cooling-label">
									<input type="checkbox" data-value="1" value="1" checked="checked" name="heating-cooling" class="cost-slider-input type-checkbox" id="heating-cooling">
									<label for="heating-cooling" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Heating&amp;Cooling</label>
								</li>
								<li>
									<input type="hidden" value="Oil, Lube &amp; Filters" name="oil-lube-filters-label">
									<input type="checkbox" data-value="1" value="1" checked="checked" name="oil-lube-filters" class="cost-slider-input type-checkbox" id="oil-lube-filters">
									<label for="oil-lube-filters" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Oil, Lube &amp; Filters</label>
								</li>
								<li>
									<input type="hidden" value="Steering &amp; Suspension" name="steering-suspension-label">
									<input type="checkbox" data-value="1" value="0" name="steering-suspension" class="cost-slider-input type-checkbox" id="steering-suspension">
									<label for="steering-suspension" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Steering&amp;Suspension</label>
								</li>
							</ul>
							<ul class="checkboxes-list top-border-none">
								<li>
									<input type="hidden" value="Transmission Repair" name="transmission-repair-label">
									<input type="checkbox" data-value="1" value="0" name="transmission-repair" class="cost-slider-input type-checkbox" id="transmission-repair">
									<label for="transmission-repair" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Transmission Repair</label>
								</li>
								<li>
									<input type="hidden" value="Wheel Alignment" name="wheel-alignment-label">
									<input type="checkbox" data-value="1" value="0" name="wheel-alignment" class="cost-slider-input type-checkbox" id="wheel-alignment">
									<label for="wheel-alignment" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Wheel Alignment</label>
								</li>
							</ul>
						</div>
					</fieldset>
					<fieldset class="column column-1-2">
						<label>CONTACT DETAILS</label>
						<input class="text-input" name="name" type="text" value="<?php echo _def_name; ?>" placeholder="<?php echo _def_name; ?>">
						<input class="text-input" name="email" type="text" value="<?php echo _def_email; ?>" placeholder="<?php echo _def_email; ?>">
						<input class="text-input" name="phone" type="text" value="<?php echo _def_phone; ?>" placeholder="<?php echo _def_phone; ?>">
						<textarea class="margin-top-20" name="message_appointment" placeholder="<?php echo _def_message_appointment; ?>"><?php echo _def_message_appointment; ?></textarea>
						<input type="hidden" name="action" value="contact_form" />
						<input type="hidden" name="form_type" value="appointment">
						<a class="more margin-top-20 display-block submit-contact-form" href="#" title="SUBMIT NOW"><span>SUBMIT NOW</span></a>
					</fieldset>
				</div>
			</form>
		</div>
	</div>
</div>