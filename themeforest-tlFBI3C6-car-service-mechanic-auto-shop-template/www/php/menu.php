<nav>
	<ul class="sf-menu">
		<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home2") ? " class='selected'" : ""); ?>>
			<a href="?page=home" title="Home">
				Home
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home") ? " class='selected'" : ""); ?>>
					<a href="?page=home" title="Home Style 1">
						Home Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home2" ? " class='selected'" : ""); ?>>
					<a href="?page=home2" title="Home Style 2">
						Home Style 2
					</a>
				</li>
			</ul>
		</li>
		<li <?php echo (isset($_GET["page"]) && ($_GET["page"]=="services" || $_GET["page"]=="service_engine_diagnostics" || $_GET["page"]=="service_engine_diagnostics" || $_GET["page"]=="service_belts_hoses" || $_GET["page"]=="service_air_conditioning" || $_GET["page"]=="service_brake_repair" || $_GET["page"]=="service_tire_wheel") ? " class='selected'" : ""); ?>>
			<a href="?page=services" title="Services">
				Services
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_engine_diagnostics" ? " class='selected'" : ""); ?>>
					<a href="?page=service_engine_diagnostics" title="Engine Diagnostics">
						Engine Diagnostics
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_engine_diagnostics" ? " class='selected'" : ""); ?>>
					<a href="?page=service_lube_oil_filters" title="Lube, Oil and Filters">
						Lube, Oil and Filters
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_belts_hoses" ? " class='selected'" : ""); ?>>
					<a href="?page=service_belts_hoses" title="Belts and Hoses">
						Belts and Hoses
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_air_conditioning" ? " class='selected'" : ""); ?>>
					<a href="?page=service_air_conditioning" title="Air Conditioning">
						Air Conditioning
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_brake_repair" ? " class='selected'" : ""); ?>>
					<a href="?page=service_brake_repair" title="Brake Repair">
						Brake Repair
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_tire_wheel" ? " class='selected'" : ""); ?>>
					<a href="?page=service_tire_wheel" title="Tire and Wheel Services">
						Tire and Wheel Services
					</a>
				</li>
			</ul>
		</li>
		<li <?php echo (isset($_GET["page"]) && ($_GET["page"]=="galleries" || $_GET["page"]=="gallery_engine_diagnostics" || $_GET["page"]=="gallery_oil_change" || $_GET["page"]=="gallery_belts_hoses" || $_GET["page"]=="gallery_tire_change" || $_GET["page"]=="gallery_wheel_services" || $_GET["page"]=="gallery_lube_services" || $_GET["page"]=="gallery_brake_repair" || $_GET["page"]=="gallery_other_car_services") ? " class='selected'" : ""); ?>>
			<a href="?page=galleries" title="Gallery">
				Gallery
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_engine_diagnostics" ? " class='selected'" : ""); ?>>
					<a href="?page=gallery_engine_diagnostics" title="Engine Diagnostics">
						Engine Diagnostics
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_oil_change" ? " class='selected'" : ""); ?>>
					<a href="?page=gallery_oil_change" title="Oil Change">
						Oil Change
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_belts_hoses" ? " class='selected'" : ""); ?>>
					<a href="?page=gallery_belts_hoses" title="Belts and Hoses">
						Belts and Hoses
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_tire_change" ? " class='selected'" : ""); ?>>
					<a href="?page=gallery_tire_change" title="Tire Change">
						Tire Change
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_wheel_services" ? " class='selected'" : ""); ?>>
					<a href="?page=gallery_wheel_services" title="Wheel Services">
						Wheel Services
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_lube_services" ? " class='selected'" : ""); ?>>
					<a href="?page=gallery_lube_services" title="Lube Services">
						Lube Services
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_brake_repair" ? " class='selected'" : ""); ?>>
					<a href="?page=gallery_brake_repair" title="Brake Repair">
						Brake Repair
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_other_car_services" ? " class='selected'" : ""); ?>>
					<a href="?page=gallery_other_car_services" title="Other Car Services">
						Other Car Services
					</a>
				</li>
			</ul>
		</li>
		<li class="<?php echo (isset($_GET["page"]) && $_GET["page"]=="team" ? " selected" : ""); ?>">
			<a href="?page=team" title="Our Team">
				Our Team
			</a>
		</li>
		<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="about" || $_GET["page"]=="404") ? " class='selected'" : ""); ?>>
			<a href="?page=about" title="Pages">
				Pages
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about" ? " class='selected'" : ""); ?>>
					<a href="?page=about" title="About">
						About
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="404" ? " class='selected'" : ""); ?>>
					<a href="?page=404" title="404 Not Found">
						404 Not Found
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="services" ? " class='selected'" : ""); ?>>
					<a href="?page=services" title="Services">
						Services Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="services2" ? " class='selected'" : ""); ?>>
					<a href="?page=services2" title="Services Style 2">
						Services Style 2
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_engine_diagnostics" ? " class='selected'" : ""); ?>>
					<a href="?page=service_engine_diagnostics" title="Single Service">
						Single Service
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="galleries" ? " class='selected'" : ""); ?>>
					<a href="?page=galleries" title="Galleries">
						Galleries
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_engine_diagnostics" ? " class='selected'" : ""); ?>>
					<a href="?page=gallery_engine_diagnostics" title="Single Project">
						Single Gallery
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="team" ? " class='selected'" : ""); ?>>
					<a href="?page=team" title="Team">
						Team
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="team_mark_whilberg" ? " class='selected'" : ""); ?>>
					<a href="?page=team_mark_whilberg" title="Single Team">
						Single Team
					</a>
				</li>
			</ul>
		</li>
		<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog" || $_GET["page"]=="blog_left_sidebar" || $_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_3_columns" || $_GET["page"]=="post" || $_GET["page"]=="search") ? " class='selected'" : ""); ?>>
			<a href="?page=blog" title="Blog">
				Blog
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog" ? " class='selected'" : ""); ?>>
					<a href="?page=blog" title="Blog">
						Blog
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_left_sidebar" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_left_sidebar" title="Blog">
						Blog Left Sidebar
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_2_columns" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_2_columns" title="Blog 2 Columns">
						Blog 2 Columns
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_3_columns" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_3_columns" title="Blog 3 Columns">
						Blog 3 Columns
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post" ? " class='selected'" : ""); ?>>
					<a href="?page=post" title="Single Post">
						Single Post
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="search" ? " class='selected'" : ""); ?>>
					<a href="?page=search&amp;s=ipsum" title="Search Template">
						Search Template
					</a>
				</li>
			</ul>
		</li>
		<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="appointment" ? " class='selected'" : ""); ?>>
			<a href="?page=appointment" title="Appointment">
				Appointment
			</a>
		</li>
		<li class="left-flyout<?php echo (isset($_GET["page"]) && ($_GET["page"]=="contact" || $_GET["page"]=="contact_2") ? " selected" : ""); ?>">
			<a href="?page=contact" title="Contact">
				Contact
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
					<a href="?page=contact" title="Contact Style 1">
						Contact Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact_2" ? " class='selected'" : ""); ?>>
					<a href="?page=contact_2" title="Contact Style 2">
						Contact Style 2
					</a>
				</li>
			</ul>
		</li>
	</ul>
</nav>
<div class="mobile-menu-container">
	<div class="mobile-menu-divider"></div>
	<nav>
		<ul class="mobile-menu collapsible-mobile-submenus">
			<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home2") ? " class='selected'" : ""); ?>>
				<a href="?page=home" title="Home">
					Home
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home") ? " class='selected'" : ""); ?>>
						<a href="?page=home" title="Home Style 1">
							Home Style 1
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home2" ? " class='selected'" : ""); ?>>
						<a href="?page=home2" title="Home Style 2">
							Home Style 2
						</a>
					</li>
				</ul>
			</li>
			<li <?php echo (isset($_GET["page"]) && ($_GET["page"]=="services" || $_GET["page"]=="service_engine_diagnostics" || $_GET["page"]=="service_engine_diagnostics" || $_GET["page"]=="service_belts_hoses" || $_GET["page"]=="service_air_conditioning" || $_GET["page"]=="service_brake_repair" || $_GET["page"]=="service_tire_wheel") ? " class='selected'" : ""); ?>>
				<a href="?page=services" title="Services">
					Services
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_engine_diagnostics" ? " class='selected'" : ""); ?>>
						<a href="?page=service_engine_diagnostics" title="Engine Diagnostics">
							Engine Diagnostics
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_engine_diagnostics" ? " class='selected'" : ""); ?>>
						<a href="?page=service_lube_oil_filters" title="Lube, Oil and Filters">
							Lube, Oil and Filters
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_belts_hoses" ? " class='selected'" : ""); ?>>
						<a href="?page=service_belts_hoses" title="Belts and Hoses">
							Belts and Hoses
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_air_conditioning" ? " class='selected'" : ""); ?>>
						<a href="?page=service_air_conditioning" title="Air Conditioning">
							Air Conditioning
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_brake_repair" ? " class='selected'" : ""); ?>>
						<a href="?page=service_brake_repair" title="Brake Repair">
							Brake Repair
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_tire_wheel" ? " class='selected'" : ""); ?>>
						<a href="?page=service_tire_wheel" title="Tire and Wheel Services">
							Tire and Wheel Services
						</a>
					</li>
				</ul>
			</li>
			<li <?php echo (isset($_GET["page"]) && ($_GET["page"]=="galleries" || $_GET["page"]=="gallery_engine_diagnostics" || $_GET["page"]=="gallery_oil_change" || $_GET["page"]=="gallery_belts_hoses" || $_GET["page"]=="gallery_tire_change" || $_GET["page"]=="gallery_wheel_services" || $_GET["page"]=="gallery_lube_services" || $_GET["page"]=="gallery_brake_repair" || $_GET["page"]=="gallery_other_car_services") ? " class='selected'" : ""); ?>>
				<a href="?page=galleries" title="Gallery">
					Gallery
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_engine_diagnostics" ? " class='selected'" : ""); ?>>
						<a href="?page=gallery_engine_diagnostics" title="Engine Diagnostics">
							Engine Diagnostics
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_oil_change" ? " class='selected'" : ""); ?>>
						<a href="?page=gallery_oil_change" title="Oil Change">
							Oil Change
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_belts_hoses" ? " class='selected'" : ""); ?>>
						<a href="?page=gallery_belts_hoses" title="Belts and Hoses">
							Belts and Hoses
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_tire_change" ? " class='selected'" : ""); ?>>
						<a href="?page=gallery_tire_change" title="Tire Change">
							Tire Change
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_wheel_services" ? " class='selected'" : ""); ?>>
						<a href="?page=gallery_wheel_services" title="Wheel Services">
							Wheel Services
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_lube_services" ? " class='selected'" : ""); ?>>
						<a href="?page=gallery_lube_services" title="Lube Services">
							Lube Services
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_brake_repair" ? " class='selected'" : ""); ?>>
						<a href="?page=gallery_brake_repair" title="Brake Repair">
							Brake Repair
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_other_car_services" ? " class='selected'" : ""); ?>>
						<a href="?page=gallery_other_car_services" title="Other Car Services">
							Other Car Services
						</a>
					</li>
				</ul>
			</li>
			<li class="<?php echo (isset($_GET["page"]) && $_GET["page"]=="team" ? " selected" : ""); ?>">
				<a href="?page=team" title="Our Team">
					Our Team
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="about" || $_GET["page"]=="404") ? " class='selected'" : ""); ?>>
				<a href="?page=about" title="Pages">
					Pages
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about" ? " class='selected'" : ""); ?>>
						<a href="?page=about" title="About">
							About
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="404" ? " class='selected'" : ""); ?>>
						<a href="?page=404" title="404 Not Found">
							404 Not Found
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="services" ? " class='selected'" : ""); ?>>
						<a href="?page=services" title="Services">
							Services Style 1
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="services2" ? " class='selected'" : ""); ?>>
						<a href="?page=services2" title="Services Style 2">
							Services Style 2
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="service_engine_diagnostics" ? " class='selected'" : ""); ?>>
						<a href="?page=service_engine_diagnostics" title="Single Service">
							Single Service
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="galleries" ? " class='selected'" : ""); ?>>
						<a href="?page=galleries" title="Galleries">
							Galleries
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="gallery_engine_diagnostics" ? " class='selected'" : ""); ?>>
						<a href="?page=gallery_engine_diagnostics" title="Single Project">
							Single Gallery
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="team" ? " class='selected'" : ""); ?>>
						<a href="?page=team" title="Team">
							Team
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="team_mark_whilberg" ? " class='selected'" : ""); ?>>
						<a href="?page=team_mark_whilberg" title="Single Team">
							Single Team
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog" || $_GET["page"]=="blog_left_sidebar" || $_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_3_columns" || $_GET["page"]=="post" || $_GET["page"]=="search") ? " class='selected'" : ""); ?>>
				<a href="?page=blog" title="Blog">
					Blog
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog" ? " class='selected'" : ""); ?>>
						<a href="?page=blog" title="Blog">
							Blog
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_left_sidebar" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_left_sidebar" title="Blog">
							Blog Left Sidebar
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_2_columns" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_2_columns" title="Blog 2 Columns">
							Blog 2 Columns
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_3_columns" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_3_columns" title="Blog 3 Columns">
							Blog 3 Columns
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post" ? " class='selected'" : ""); ?>>
						<a href="?page=post" title="Single Post">
							Single Post
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="search" ? " class='selected'" : ""); ?>>
						<a href="?page=search&amp;s=ipsum" title="Search Template">
							Search Template
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="appointment" ? " class='selected'" : ""); ?>>
				<a href="?page=appointment" title="Appointment">
					Appointment
				</a>
			</li>
			<li class="left-flyout<?php echo (isset($_GET["page"]) && ($_GET["page"]=="contact" || $_GET["page"]=="contact_2") ? " selected" : ""); ?>">
				<a href="?page=contact" title="Contact">
					Contact
				</a>
				<a href="#" class="template-arrow-menu"></a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
						<a href="?page=contact" title="Contact Style 1">
							Contact Style 1
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact_2" ? " class='selected'" : ""); ?>>
						<a href="?page=contact_2" title="Contact Style 2">
							Contact Style 2
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</div>