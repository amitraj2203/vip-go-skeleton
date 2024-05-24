<?php
/*
Author: Joshua Lisojo
Template Name: Schnps Event Details
*/
?>

<?php get_header(); ?>

	<div class="container"<?php if($background_color != "") { echo " style='background-color:". $background_color ."'";} ?>>

		<!-- ////////////////////////////////// -->
		<!-- Fixed Position Buy Tickets Button  -->
		<!-- ////////////////////////////////// -->
		<?php empty(trim(get_field("squadup_event_id"))) ? $squadup_event_id = "" : $squadup_event_id = get_field("squadup_event_id"); ?>
		<?php if( get_field('show_purchase_tickets_button') == "Yes" ): ?>
		
			<a id="buy_btn" title="<?php the_field("tickets_button_text"); ?>" class="launch-modal-btn" data-event-id="<?php echo $squadup_event_id; ?>">
				<span style="font-size:0.5em;"><?php echo the_field("floating_buy_button_label"); ?></span><br/>
				<span class="fa-stack">
					<i class="qode_icon_font_awesome fa fa-ticket "></i>
				</span>
			</a>

			<div id="buy_bottom_bar">
				<a id="bar_buy_btn" title="<?php the_field("tickets_button_text"); ?>" class="launch-modal-btn" data-event-id="<?php echo $squadup_event_id; ?>">
					<span style="font-size:0.75em;"><?php echo the_field("floating_buy_button_label"); ?></span>
					<span class="fa-stack">
						<i class="qode_icon_font_awesome fa fa-ticket "></i>
					</span>
				</a>
			</div>
		<?php endif; ?>

		<?php if( get_field('show_registration_button') == "Yes" ): ?>

			<div id="buy_bottom_bar">
				<a id="bar_buy_btn" style="padding: 10px 25px;" title="<?php the_field("registration_button_text"); ?>" href="<?php the_field("registration_button_url"); ?>" target="_blank">
					<span style="font-size:0.75em;"><?php the_field("registration_button_text"); ?></span>
					<!-- <span class="fa-stack">
						<i class="qode_icon_font_awesome fa fa-ticket "></i>
					</span> -->
				</a>
			</div>
		<?php endif; ?>

		<!-- ////////////////////////////// -->
		<!-- event hero image  -->
		<!-- ////////////////////////////// -->
		<div class="event-details-banner-container" style="background-image: url(<?php the_field('hero_image'); ?>);">
			<div class="event-details-banner"></div>
			<div class="event-details-banner-title-text">

		 		<h2><?php the_field("title"); ?></h2>
				
				<?php if( get_field('show_date_on_banner') == "Yes" ): ?>
					<?php if($date2 = get_field("date_2")): ?>
						<h3><?php echo the_field("date") . " &amp; " . $date2; ?><span>, </span> <?php the_field("time"); ?><span>, </span> <?php the_field("time_zone"); ?></h3>
					<?php else: ?>
						<h3><?php the_field("date") ?><span>, </span> <?php the_field("time"); ?><span>, </span> <?php the_field("time_zone"); ?></h3>
					<?php endif; ?>
				<?php endif; ?>

				<h3><?php the_field("location_name"); ?><span>, </span> <?php the_field("location_street_address"); ?><span>, </span> <?php the_field("location_city"); ?><span>, </span> <?php the_field("location_state"); ?> <?php the_field("location_zip_code"); ?></h3>

				<ul class="event-details-banner-buttons">
		
					<?php if( get_field('show_purchase_tickets_button') == "Yes" ): ?>
					<li>
						<a
							id="buyTicketButtonTop"
							class="event-details-banner-button launch-modal-btn buy-ticket-btn"
							title="<?php the_field("tickets_button_text"); ?>"
							data-event-id="<?php echo $squadup_event_id; ?>"
						>
							<?php the_field("tickets_button_text"); ?>
						</a>
					</li>
					<?php endif; ?>

					<?php if( get_field('show_registration_button') == "Yes" ): ?>
					<li>
						<a
							id="registerButtonTop"
							class="event-details-banner-button"
							title="<?php the_field("registration_button_text"); ?>"
							href="<?php the_field("registration_button_url"); ?>"
							target="_blank"
						>
							<?php the_field("registration_button_text"); ?>
						</a>
					</li>
					<?php endif; ?>

					<?php if( get_field('show_sponsor_button') == "Yes" ): ?>
						<?php if( get_field('has_custom_url_for_the_sponsor_button') == "Yes" ): ?>
							<li>
								<a
									class="event-details-banner-button"
									title="<?php the_field("sponsor_button_text"); ?>"
									href="<?php the_field('sponsor_button_custom_url'); ?>"
									target="_blank"
								>
									<?php the_field("sponsor_button_text"); ?>
								</a>
							</li>
						<?php else: ?>
							<li>
								<a
									class="event-details-banner-button"
									title="<?php the_field("sponsor_button_text"); ?>"
									data-tf-slider="tb5jfh"
									data-tf-width="550"
									data-tf-hidden="event_name=<?php the_field("title"); ?>"
								>
									<?php the_field("sponsor_button_text"); ?>
								</a>
							</li>
						<?php endif; ?>
					<?php endif; ?>

					<?php if( get_field('show_nominate_button') == "Yes" ): ?>
					<li>
						<a
							class="event-details-banner-button"
							title="<?php the_field("nominate_button_text"); ?>"
							data-tf-slider="OJAMtE"
							data-tf-width="550"
							data-tf-hidden="event_name=<?php the_field("title"); ?>"
						>
							<?php the_field("nominate_button_text"); ?>
						</a>
					</li>
					<?php endif; ?>

					<?php if( get_field('show_nominate_button_with_url') == "Yes" ): ?>
					<li>
						<a
							class="event-details-banner-button"
							title="<?php the_field("nominate_button_with_url_text"); ?>"
							href="<?php the_field("url_for_nominate_button_with_url"); ?>"
							target="_blank"
						>
							<?php the_field("nominate_button_with_url_text"); ?>
						</a>
					</li>
					<?php endif; ?>

				</ul>

			</div>
		</div>

		<!-- ////////////////////////////// -->
		<!-- event page links -->
		<!-- ////////////////////////////// -->
		<div class="container" style="background-color:#161616;">
			<div class="container_inner clearfix">
				<nav id="event-page-navigation" class="event-nav">
					<ul class="event-nav-list">
						<?php if( have_rows('speakers') ): ?>
							<li class="event-nav-item">
								<a href="#speakers">
									<?php the_field("honorees_section_header"); ?>
								</a>
							</li>
						<?php endif; ?>
						<?php if( have_rows('agenda') ): ?>
							<li class="event-nav-item">
								<a href="#agenda">
								<?php the_field("agenda_section_header"); ?>
								</a>
							</li>
						<?php endif; ?>
						<?php if( have_rows('sponsors') ): ?>
							<li class="event-nav-item">
								<a href="#sponsors">
									<?php the_field("sponsors_section_header"); ?>
								</a>
							</li>
						<?php endif; ?>
						<?php if( have_rows('gallery') ): ?>
							<li class="event-nav-item">
								<a href="#gallery">
								<?php the_field("gallery_section_header"); ?>
								</a>
							</li>
						<?php endif; ?>
						<?php if( get_field('show_purchase_tickets_button') == "Yes" ): ?>
							<li class="event-nav-item"><a href="#buytickets">Tickets</a></li>
						<?php endif; ?>
					</ul>
				</nav>
			</div>
		</div>

		<!-- ////////////////////////////// -->
		<!-- event description -->
		<!-- ////////////////////////////// -->
		<div class="container event-details-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-6 wpb_column vc_column_container">
						
						<div class="vc_row">
							<div class="vc_col-sm-12 wpb_column vc_column_container">
								<!-- <h2><php the_field("title");?></h2> -->
								<img style="max-width: 80%;" src="<?php the_field('logo_image'); ?>" />
							</div>
						</div>
						
						<!-- <div class="vc_row">
							<div class="vc_col-sm-2 wpb_column vc_column_container event-info-label">
								<p><b>Date: </b></p>
							</div>
							<div class="vc_col-sm-10 wpb_column vc_column_container event-info-label-value">
								<p><php the_field("date"); ?></p>
							</div>
						</div>

						<div class="vc_row">
							<div class="vc_col-sm-2 wpb_column vc_column_container  event-info-label">
								<p><b>Time: </b></p>
							</div>
							<div class="vc_col-sm-10 wpb_column vc_column_container event-info-label-value">
								<p><php the_field("time"); ?> <php the_field("time_zone");?></p>
							</div>
						</div>

						<div class="vc_row">
							<div class="vc_col-sm-2 wpb_column vc_column_container  event-info-label">
								<p><b>Location: </b></p>
							</div>
							<div class="vc_col-sm-10 wpb_column vc_column_container event-info-label-value">
								<p style="margin-bottom:5px;"><php the_field("location_name"); ?></p>
								<p style="margin:5px;"><php the_field("location_street_address"); ?></p>
								<p style="margin:5px;"><php the_field("location_city"); ?>, <php the_field("location_state"); ?> <php the_field("location_zip_code"); ?></p>
							</div>
						</div> -->
						
						<div class="vc_row">
							<div class="vc_col-sm-12 wpb_column vc_column_container">
								<?php if( get_field('show_twitter_button') == "Yes" ): ?>
									<a href="<?php the_field("twitter_url");?>" target="_blank">
										<span class="q_social_icon_holder circle_social">
											<span class="fa-stack fa-2x" style="background-color: #e3e3e3;">
												<i class="fa fa-twitter" style=""></i>
											</span>
										</span>
									</a>
								<?php endif; ?>

								<?php if( get_field('show_facebook_button') == "Yes" ): ?>
									<a href="<?php the_field("facebook_url");?>" target="_blank">
										<span class="q_social_icon_holder circle_social">
											<span class="fa-stack fa-2x" style="background-color: #e3e3e3;">
												<i class="fa fa-facebook" style=""></i>
											</span>
										</span>
									</a>
								<?php endif; ?>

								<?php if( get_field('show_instagram_button') == "Yes" ): ?>
									<a href="<?php the_field("instagram_url");?>" target="_blank">
										<span class="q_social_icon_holder circle_social">
											<span class="fa-stack fa-2x" style="background-color: #e3e3e3;">
												<i class="fa fa-instagram" style=""></i>
											</span>
										</span>
									</a>
								<?php endif; ?>
							</div>
						</div>

						<div class="vc_row">
							<div class="vc_col-sm-12 wpb_column vc_column_container">
								<p class="event-hashtag"><?php the_field("event_hashtag");?></p>
							</div>
						</div>

					</div>

					<div class="vc_col-sm-6 wpb_column vc_column_container">
						<div class="vc_row">
							<p><?php the_field("description");?></p>
						</div>
						
						<?php 
						$charity_logo_src = get_field('charity_logo');
						$charity_url = get_field('charity_url');
						$charity_description = get_field('charity_description');
						if( !empty($charity_description) ): 
						?>
							<div class="vc_row">
								<div style="text-align: center;" class="vc_col-sm-2 wpb_column vc_column_container">
									<a href="<?php echo $charity_url; ?>" target="_blank">
										<img style="max-height:100px;" src="<?php echo $charity_logo_src; ?>" />
									</a>
								</div>
								<div class="vc_col-sm-10 wpb_column vc_column_container">
									<p style="text-align:center;font-size:14px;"><?php echo $charity_description; ?></p>
								</div>
							</div>
						<?php endif; ?>

						<?php

						// Load values.
						$video_recap_header = get_field('video_recap_header');
						$iframe = get_field('video_recap_url');

						// Use preg_match to find iframe src.
						preg_match('/src="(.+?)"/', $iframe, $matches);
						$src = $matches[1];

						// Add extra parameters to src and replace HTML.
						$params = array(
							'controls'  => 0,
							'hd'        => 1,
							'autohide'  => 1
						);
						$new_src = add_query_arg($params, $src);
						$iframe = str_replace($src, $new_src, $iframe);

						// Add extra attributes to iframe HTML.
						$attributes = 'frameborder="0"';
						$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
						?>
						<?php if( !empty($iframe) ): ?>
							<div class="vc_row">
								<h2><?php echo $video_recap_header; ?></h2>
								<div class="embed-container">
								<?php 
									// Display customized HTML.
									echo $iframe; 
								?>
								</div>
							</div>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>

		<!-- ////////////////////////////// -->
		<!-- event video -->
		<!-- ////////////////////////////// -->
		<div id="event-video-container" class="container" style="background-color:#161616;border-bottom: 1px solid #ed1c24;">
			<div class="container_inner clearfix event_video">
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<?php if( get_field('video_url') ): ?>
							<div class="embed-container">
								<?php the_field('video_url'); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>




		<!-- ////////////////////////////// -->
		<!-- NEW: event speakers/honorees -->
		<!-- ////////////////////////////// -->
		<?php if( have_rows('speakers') ): ?>

		<!-- ////////////////////////////// -->
		<!-- sorting alphabetically by name -->
		<!-- ////////////////////////////// -->
		<?php 
			$has_sorting = get_field('apply_sorting_to_honorees');

			// get repeater field data
			$speakers_repeater = get_field('speakers');

			// vars
			$order = array();

			// populate order
			foreach( $speakers_repeater as $i => $row ) {

				// get full name
				$full_name = trim($row['full_name']);

				// explode name a by spaces
				$parts_name = explode(' ', $full_name);

				// remove the last name from the end of the array
				// by looking for the string with a comma at the end
				// or if no comma is found use the last string in the array
				$last_name = "";
				$ignore_str = array("jr","jr.","sr","sr.");
				foreach ($parts_name as &$str) {
					if(in_array(strtolower($str), $ignore_str)) {
						break;
					}

					if (substr($str, -1) == ',') {
						$last_name = $str;
						break;
					} else {
						$last_name = $str;
					}
				}
				
				$order[ $i ] = $last_name;
				
			}

			// 0 : No Sorting
			// 1 : Sort Alphabetical (ASC)
			// 2 : Sort Alphabetical (DESC)
			if($has_sorting != 0) {

				// multisort
				array_multisort( $order, $has_sorting == 1 ? SORT_ASC : SORT_DESC, $speakers_repeater );
			}
		?>

		<div id='event_honorees' class='container' style='background-color:#161616;border-bottom: 1px solid #ed1c24;'>
			<div id="speakers" class='container_inner clearfix event_speakers'>
				<div class="wrap-event-section-header honoree">
					<h2 class='event-section-header honoree'><?php the_field('honorees_section_header'); ?></h2>
					<p class="event-section-sub-header"><?php the_field('honoree_sub_header'); ?></p>
				</div>
				<div class="grid-cols">
					<?php 
					$show_honoree_popup = get_field('show_honoree_popup');

					foreach ( $speakers_repeater as $i => $row ):
						$image_src = $row['speaker_image'];
						$name = $row['full_name'];
						$job_title = $row['job_title'];
						$company_name = htmlspecialchars($row['company_name']);
						$bio = $row['bio'];
						$special_category_title = $row['special_category_title'];
						$hide_honoree_about = true;
						$honoree_classname = $show_honoree_popup == "1" ? " honoree-clickable" : " honoree-unclickable";
					?>

					<div class="grid-item wrap-honoree<?php echo $honoree_classname; ?>"
						data-name="<?php echo $name; ?>"
						data-job-title='<?php echo $job_title; ?>'
						data-company-name="<?php echo $company_name; ?>"
						data-bio='<?php echo $bio; ?>'
						data-image-src='<?php echo $image_src; ?>'
					>
						<?php if($show_honoree_popup == "1"): ?>
							<div class="honoree-overlay"></div>
						<?php endif; ?>

						<img style="width:100%;" src="<?php echo $image_src; ?>" />
						<div class="grid-item-text-box">
							
							<?php if(!empty($special_category_title)): ?>
								<p class="grid-item-special-category-text"><?php echo $special_category_title; ?></p>
							<?php endif; ?>
						
							<p class="grid-item-name-text"><?php echo $name; ?></p>
							<p class="grid-item-company-name-text"><?php echo $company_name; ?></p>

						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div><!-- end new speakers container -->
		<?php endif; ?>




		<!-- ////////////////////////////// -->
		<!-- multiple event dates -->
		<!-- ////////////////////////////// -->
		<?php if( have_rows('event_dates') ): ?>

			<?php 
				// get repeater field data
				$event_dates_repeater = get_field('event_dates');
			?>

			<div id='event-dates' class='container' style='background-color:#161616;border-bottom: 1px solid #ed1c24;'>
				<div class='container_inner clearfix event_speakers'>
					<div class='vc_row'>
						<h2 class='event-section-header'><?php the_field('event_dates_section_header'); ?></h2>
					</div>

						<?php 
						$num_dates = count(get_field('event_dates'));
						$row_number = 1; 
						foreach ( $event_dates_repeater as $i => $row ):

							$index = $i + 1;//get_row_index();
							$num_items_per_row = 4;
							$mod = $num_items_per_row * $row_number + 1;
							$is_new_row_start = (($index == 1) || (($index % $mod) == 0));
							if($index != 1 && $is_new_row_start) { $row_number++; }
							
							$is_last_date = $index == $num_dates;
							$is_new_row_end = ($index % $num_items_per_row == 0 || $is_last_date);

							$image_src = $row['event_date_image'];//"https://via.placeholder.com/300";
							$date = $row['date'];
							$day = $row['day'];
							$location = $row['location'];
							$time = $row['time'];
							$address = $row['address'];
							$borough = $row['borough'];
							$url = $row['url'];
							$url = empty($url) ? "#" : $url;
							$special_category_title = "";//$row['special_category_title'];

						?>
							<?php if( $is_new_row_start ): ?>
								<div class='vc_row'>
							<?php endif; ?>

								<div data-last='<?php echo $is_last_date; ?>' data-index='<?php echo $index; ?>' class='vc_col-sm-3 wpb_column vc_column_container'>
									<div class='wpb_wrapper event-date-wrapper'>

										<a href="<?php echo $url; ?>" target="_blank">
											<div class='q_team event-date' style="min-height: 315px;">
												<div class='q_team_inner'>
													<div class='q_team_text'>
														<div class='q_team_text_inner'>
															<div class='q_team_title_holder honoree-text'>
																
																<div style="height:25px;">
																	<?php if(!empty($special_category_title)): ?>
																		<p style="font-size:16px;color:#f00;font-weight:700;margin:0;"><?php echo $special_category_title; ?></p>
																	<?php endif; ?>
																</div>
																
																<h2 style="color:#000;"><?php echo $borough; ?></h2>
																<h3 class='q_team_name'><?php echo $day . " " . $date; ?></h3>
																<span style="color:#ed1c24;"><?php echo $location; ?></span>
																<p style="margin:0;padding:0;"><?php echo $address; ?></p>
																<p style="margin:0;padding:0;color:#ed1c24;">Register Now</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</a>
	
									</div>
								</div>

							<?php if( $is_new_row_end ): ?>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>


				</div>
			</div><!-- end event-dates container -->
		<?php endif; ?>

		<!-- ////////////////////////////// -->
		<!-- event testimonials -->
		<!-- ////////////////////////////// -->
		<?php if( have_rows('testimonials') ): ?>
			<!-- ////////////////////////////// -->
			<!-- testimonials header -->
			<!-- ////////////////////////////// -->
			<div 
				id="events-testimonials-header-wrapper" 
				class="container events-testimonials-container"
			>
				<div class="container_inner clearfix events-testimonials">
					<div class="vc_row">
						<h2 
							class="event-section-header" 
							style="padding-top: 25px;padding-bottom: 25px;"
						><?php the_field("testimonials_header"); ?></h2>
					</div>
				</div>
			</div>

			<div class="container event-business-leaders-container">
				<div class="container_inner clearfix">
					<div class="vc_row slick-slides-container">

						<?php while ( have_rows('testimonials') ): the_row();

							$index = get_row_index();
							$leader_image_src = get_sub_field('testimonial_image');
							$title = get_sub_field('title');
							$citation = get_sub_field('headline');
							$description = get_sub_field('description');
							$leader_name = get_sub_field('name');
							$leader_title = get_sub_field('role');
							$leader_company = get_sub_field('company');

						?>

							<!-- start business leader slide -->
							<div class="event-business-leader-slide">
								<div class="vc_row" style="margin-left:0;margin-right:0;display: flex;justify-content: center;align-items: center;">
									<div class="vc_col-sm-6 wpb_column vc_column_container event-business-leader-slide-left">
										<img class="event-business-leader-image" src="<?php echo $leader_image_src; ?>" />
									</div>
									<div class="vc_col-sm-6 wpb_column vc_column_container event-business-leader-slide-right">
										<div class="event-business-leader-item">
											<p class="event-business-leader-title" id="carousel-title"><?php echo $title; ?></p>
											<h3 class="event-business-leader-headline"><?php echo $citation; ?></h3>
											<p class="event-business-leader-description"></p><p><?php echo $description; ?></p>
											
											<div class="event-business-leader-info">
												<p style="font-weight:bold;margin-bottom:0;padding-bottom:0;" class="event-business-leader-name"><?php echo $leader_name; ?></p>
												<p class="event-business-leader-title"><?php echo $leader_title."<br/>".$leader_company; ?></p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- end business leader slide -->

						<?php endwhile; ?>

					</div>
					<div id="slick-arrows-container" class="vc_row slick-arrows-container" style="text-align: right;">
						<a id="left_arrow_slide" class="on">
							<span class="fa-stack">
								<i class="qode_icon_font_awesome fa fa-arrow-left "></i>
							</span>
						</a>
						<a id="right_arrow_slide" class="on">
							<span class="fa-stack">
								<i class="qode_icon_font_awesome fa fa-arrow-right "></i>
							</span>
						</a>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<!-- ////////////////////////////// -->
		<!-- quotes section -->
		<!-- ////////////////////////////// -->
		<?php if( have_rows('quotes') ): ?>
			<div style="margin-top: 20px;border-bottom: 1px solid #ed1c24;" class="container event-quotes-container">
				<div class="container_inner clearfix">
					<div class="vc_row slick-quotes-container">
						<?php while ( have_rows('quotes') ): the_row();

							$index = get_row_index();
							$quote = get_sub_field('quote');
							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$company = get_sub_field('company');

						?>
							<div class="event-quotation-slide" style="width: 100%; display: inline-block;">
								<div class="event-quotation-item">
									<!-- <span class="event-double-quote">“</span> -->
									<h4 style="padding: 0 40px;" class="event-quotation-text"><?php echo $quote; ?></h4>
								</div>
								<div class="event-quotation-content">
									<div style="margin-left: 40px;" class="event-person-info">
										
										<p class="event-person-name">
											<?php echo $name . "" . $title . "</br>" . $company; ?>
										</p>

									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<div id="slick-arrows-container-quotes" class="vc_row slick-arrows-container" style="text-align: right;">
						<a id="left_arrow_quote" class="on">
							<span class="fa-stack">
								<i class="qode_icon_font_awesome fa fa-arrow-left "></i>
							</span>
						</a>
						<a id="right_arrow_quote" class="on">
							<span class="fa-stack">
								<i class="qode_icon_font_awesome fa fa-arrow-right "></i>
							</span>
						</a>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<!-- ////////////////////////////// -->
		<!-- event agenda -->
		<!-- ////////////////////////////// -->
		<?php if( have_rows('agenda') ): ?>
			<div id="agenda" class="container event-agenda-container" style="background-color:#161616;border-bottom: 1px solid #ed1c24;">
				<div class="container_inner clearfix event_agenda">
					<div class="vc_row">
						<h2 class="event-section-header"><?php the_field("agenda_section_header"); ?></h2>
					</div>
					<?php while ( have_rows('agenda') ): the_row();

						$index = get_row_index();
						$time = get_sub_field('time');
						$title = get_sub_field('title');
						$description = get_sub_field('description');

					?>
						<div class="vc_row event-agenda-row event-border-solid">
							<div class="vc_col-sm-6 wpb_column vc_column_container">
								<p><?php echo $time; ?>  <?php the_field("time_zone");?></p>
							</div>
							<div class="vc_col-sm-6 wpb_column vc_column_container">
								<p class="event-agenda-title"><?php echo $title; ?></p>
								<p><?php echo $description; ?></p>

								<?php if( have_rows('presenter') ): ?>
									<?php while ( have_rows('presenter') ): the_row();

										$idx = get_row_index();
										$presenter_name = get_sub_field('presenter_name');
										$presenter_job_title = get_sub_field('presenter_job_title');
										$presenter_company_name = get_sub_field('presenter_company_name');

									?>
										<p><b><?php echo $presenter_name; ?></b>, <?php echo $presenter_job_title; ?>, <?php echo $presenter_company_name; ?></p>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>

				</div>
			</div>
		<?php endif; ?>

		<!-- ////////////////////////////// -->
		<!-- event sponsors -->
		<!-- ////////////////////////////// -->
		<?php if( have_rows('sponsors') ): ?>
			<div id="sponsors" class="container event-sponsors-container" style="background-color:#fff;">
				<div class="container_inner clearfix event_sponsors">
					<div class="vc_row">
						<h2 class="event-section-header"><?php the_field("sponsors_section_header"); ?></h2>
					</div>

					<div class="vc_row">

						<?php while ( have_rows('sponsors') ): the_row();

							$idx = get_row_index();
							$img_src = get_sub_field('image');
							$sponsor_name = get_sub_field('name');
							$url = get_sub_field('link');
						?>
						<div class="vc_col-sm-3 wpb_column vc_column_container">

							<div class="wpb_wrapper event-speaker-wrapper">
								<div class="q_team">
									<div class="q_team_inner">
										<div class="q_team_image">
											<a href="<?php echo $url; ?>" target="_blank">
												<img src="<?php echo $img_src; ?>" alt="">
											</a>
										</div>
										<div class="q_team_text">
											<div class="q_team_text_inner">
												<div class="q_team_title_holder">
													<h3 class="q_team_name"><?php echo $sponsor_name; ?></h3>
												</div>
												<div class="separator small center"></div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<?php endwhile; ?>

					</div>

					<?php if( get_field('show_sponsor_button') == "Yes" ): ?>
						<div class="vc_row">
							<button
								class="qbutton"
								style="display:block;margin: 0 auto 50px auto;"
								data-tf-slider="tb5jfh"
								data-tf-width="550"
								data-tf-hidden="event_name=<?php the_field("title"); ?>"
							>
								<?php the_field("sponsor_button_text"); ?>
							</button>
						</div>
					<?php endif; ?>

				</div>
			</div>
		<?php endif; ?>

		<!-- ////////////////////////////// -->
		<!-- event gallery -->
		<!-- ////////////////////////////// -->
		<?php 
		$gallery_images = get_field('gallery');
		if( $gallery_images ): ?>
			<div id="gallery" class="container event-gallery-container" style="background-color:#161616;">
				<div class="container_inner clearfix event_sponsors">
					<div class="vc_row">
						<h2 class="event-section-header"><?php the_field("gallery_section_header"); ?></h2>
					</div>

					<div class="vc_row">
						<?php foreach( $gallery_images as $img_src ): ?>
							<div class="vc_col-sm-3 wpb_column vc_column_container">
								<div class="wpb_wrapper event-speaker-wrapper">
									<div class="q_team">
										<div class="q_team_inner">
											<a data-lightbox-gallery="eventGallery" href="<?php echo $img_src; ?>" title="Image Gallery" class="q_team_image event-gallery-image">
												<img style="height: 300px;object-fit: cover;" src="<?php echo $img_src; ?>" alt="">
											</a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

				</div>
			</div>
		<?php endif; ?>






		<!-- ////////////////////////////// -->
		<!-- event registration -->
		<!-- ////////////////////////////// -->
		<?php if( get_field('show_purchase_tickets_button') == "Yes" ): ?>
			<div id="buytickets" class="container event-registration-container" style="background-color:#161616;">
				<div class="container_inner clearfix event_registration">
					<div class="vc_row" style="border-bottom: 1px solid #fff;">
						<h2><?php echo the_field("event_registration_section_header"); ?></h2>
					</div>

					<div class="vc_row">
						<div class="vc_col-sm-12 wpb_column vc_column_container">

							<div class="wpb_wrapper event-registration-wrapper" style="text-align:center;">
								<p><?php echo the_field("event_registration_section_description"); ?></p>
								<p><a id="buyTicketButtonBottom" style="border: 1px solid #ed1c24;" class="qbutton launch-modal-btn" data-event-id="<?php echo $squadup_event_id; ?>"><?php echo the_field("event_registration_section_button_label"); ?></a></p>
							</div>
							
						</div>
					</div>

				</div>
			</div>
		<?php endif; ?>

		<!-- ////////////////////////////// -->
		<!-- event contact -->
		<!-- ////////////////////////////// -->
		<div class="container event-contact-container" style="background-color:#fff;">
			<div class="container_inner clearfix event_contact">
				<div class="vc_row">
					<h2>Get In Touch</h2>
				</div>

				<div class="vc_row">
					<div class="vc_col-sm-6 wpb_column vc_column_container">

						<div class="wpb_wrapper event-contact-wrapper" style="padding-left: 15px;min-height:180px;">
							<p>We'd love to hear from you. Here's how you can reach us.</p>
							<p><a id="contact-button" data-tf-popup="kJa03Xic" class="qbutton">Contact</a></p>
						</div>

					</div>
					<div class="vc_col-sm-3 wpb_column vc_column_container" style="border-left: 1px solid #777;padding-left: 15px;min-height:180px;">

						<div class="wpb_wrapper event-contact-wrapper">
							<h3>General Inquiries</h3>
							<p><b><?php the_field("event_contact_team");?></b></p>
							<p><i><?php the_field("event_contact_name");?></i></p>
							<p>
								<a
									class="event-contact-email"
									href="mailto:<?php the_field("event_contact_email");?>"
								>
									<?php the_field("event_contact_email"); ?>
								</a>
							<p>
						</div>

					</div>
					<div class="vc_col-sm-3 wpb_column vc_column_container" style="border-left: 1px solid #777;padding-left: 15px;min-height:180px;">

						<div class="wpb_wrapper event-contact-wrapper">
							<h3>Sponsorship Inquiries</h3>
							<p><b><?php the_field("sponsorship_contact_name"); ?></b></p>
							<p><?php the_field("sponsorship_contact_role"); ?> <?php the_field("sponsorhip_contact_company"); ?></p>
							<p><a class="event-contact-email" href="mailto:<?php the_field("sponsorship_contact_email");?>"><?php the_field("sponsorship_contact_email");?></a><p>
						</div>

					</div>
				</div>

			</div>
		</div>

		<!-- popup for honorees -->
		<div class="tingle-modal tingle-speaker">
			<div class="vc_row">
				<div class="vc_col-sm-6 wpb_column vc_column_container">
					<img class="tingle-speaker-image" src="" />
				</div>
				<div class="vc_col-sm-6 wpb_column vc_column_container">
					<p class="tingle-speaker-name"></p>
					<p class="tingle-speaker-job-title"></p>
					<p class="tingle-speaker-company-name"></p>
					<div class="tingle-speaker-bio"></div>
				</div>
			</div>
		</div>


		

	</div> <!-- End Container -->




	<?php if(isset($qode_options_proya['overlapping_content']) && $qode_options_proya['overlapping_content'] == 'yes') {?>
		</div></div>
	<?php } ?>
</div>
<?php do_action('qodef_page_after_container') ?>


<!-- BEGIN SquadUp Modal HTML -->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>X</span></button>
				<h4 class="modal-title section-header--sm">Buy Tickets</h4>
			</div>
			<div class="modal-body">

				<div id="squadup-checkout"></div>
			</div>
			<div class="modal-footer">
				<a class="hover-transition btn-ticket--outline mx-auto" href="#small-group" role="button"
					data-dismiss="modal">
					<div class="btn-text--outline">Close</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END Modal HTML-->


<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

<?php if( get_field('show_purchase_tickets_button') == "Yes" ): ?>
	<?php if( get_field('ticket_sales_platform') == "0" ): ?>
<script type="text/javascript">
	var exampleCallback = function() {
		console.log('Order complete!');
	};

	window.EBWidgets.createWidget({
		// Required
		widgetType: 'checkout',
		eventId: '<?php the_field("eventbrite_event_id"); ?>',
		iframeContainerId: 'eventbrite-widget-container-<?php the_field("eventbrite_event_id"); ?>',
		modal: true,
    	modalTriggerElementId: "buyTicketButtonTop",

		// Optional
		//iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
	window.EBWidgets.createWidget({
		// Required
		widgetType: 'checkout',
		eventId: '<?php the_field("eventbrite_event_id"); ?>',
		iframeContainerId: 'eventbrite-widget-container-<?php the_field("eventbrite_event_id"); ?>',
		modal: true,
    	modalTriggerElementId: "bar_buy_btn",

		// Optional
		//iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
	window.EBWidgets.createWidget({
		// Required
		widgetType: 'checkout',
		eventId: '<?php the_field("eventbrite_event_id"); ?>',
		iframeContainerId: 'eventbrite-widget-container-<?php the_field("eventbrite_event_id"); ?>',
		modal: true,
    	modalTriggerElementId: "buy_btn",

		// Optional
		//iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
	window.EBWidgets.createWidget({
		// Required
		widgetType: 'checkout',
		eventId: '<?php the_field("eventbrite_event_id"); ?>',
		iframeContainerId: 'eventbrite-widget-container-<?php the_field("eventbrite_event_id"); ?>',
		modal: true,
    	modalTriggerElementId: "buyTicketButtonBottom",

		// Optional
		//iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
</script>
	<?php endif; ?>
<?php endif; ?>

<script>
jQuery(document).ready(function($) {
	console.log('page is ready');

	///////////////////////////////////////////////
	// slick testimonial slider
	///////////////////////////////////////////////
	$(".slick-slides-container").slick({
		// dots: true,
		// speed: 5000,
		slidesToShow: 1,
		arrows: true,
		autoplay: false,
		prevArrow: $("#left_arrow_slide"),
		nextArrow: $("#right_arrow_slide"),
	});

	$(".slick-quotes-container").slick({
		// dots: true,
		// speed: 1500,
		slidesToShow: 1,
		arrows: true,
		autoplay: false,
		prevArrow: $("#left_arrow_quote"),
		nextArrow: $("#right_arrow_quote"),
	});

	///////////////////////////////////////////////
	// show modal when a speaker's bio is clicked
	///////////////////////////////////////////////
	var modalSpeakerContent = new tingle.modal({
		beforeOpen: function() {
			//console.log(this);
		}
	});
	// $( ".js-tingle-modal-speaker, .js-tingle-modal-speaker-img, .js-tingle-modal-speaker-text, .wrap-honoree" ).click(function() {
	// 	var image_src = $(this).data('image-src');
	// 	var name = $(this).data('name');
	// 	var job_title = $(this).data('job-title');
	// 	var company_name = $(this).data('company-name');
	// 	var bio = $(this).data('bio');

	// 	$(".tingle-speaker-image").attr("src", image_src);
	// 	$(".tingle-speaker-name").html(name);
	// 	$(".tingle-speaker-job-title").html(job_title);
	// 	$(".tingle-speaker-company-name").html(company_name);
	// 	$(".tingle-speaker-bio").html(bio);
	// 	modalSpeakerContent.open();
	// });
	// modalSpeakerContent.setContent(document.querySelector('.tingle-speaker').innerHTML);
	$( ".honoree-clickable" ).click(function() {
		var image_src = $(this).data('image-src');
		var name = $(this).data('name');
		var job_title = $(this).data('job-title');
		var company_name = $(this).data('company-name');
		var bio = $(this).data('bio');

		$(".tingle-speaker-image").attr("src", image_src);
		$(".tingle-speaker-name").html(name);
		$(".tingle-speaker-job-title").html(job_title);
		$(".tingle-speaker-company-name").html(company_name);
		$(".tingle-speaker-bio").html(bio);
		modalSpeakerContent.open();
	});
	modalSpeakerContent.setContent(document.querySelector('.tingle-speaker').innerHTML);

	///////////////////////////////////////////////
	// show modal when a gallery image is clicked
	///////////////////////////////////////////////
	$('.event-gallery-image').nivoLightbox({
		effect: 'fade'
	});

	///////////////////////////////////////////////
	// scroll to section on link click
	///////////////////////////////////////////////
	document.querySelectorAll('#event-page-navigation a[href^="#"], .event-details-banner-buttons a[href^="#"').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();

			const yOffset = -120;
			var selector = this.getAttribute("href");
			selector = selector.replace("#", "");

			var element = document.getElementById(selector);
			const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
			window.scrollTo({top: y, behavior: 'smooth'});
		});
	});

	///////////////////////////////////////////////
	// check when to show the fixed buy button
	///////////////////////////////////////////////
	$(window).scroll(function() {
		console.log($(this).scrollTop());
		if ($(this).scrollTop() > 220) {
			$('#buy_btn').fadeIn();
		} 
		else {
			$('#buy_btn').fadeOut();
		}
	});

	///////////////////////////////////////////////
	// check when to show the fixed buy bar
	///////////////////////////////////////////////
	// $(window).scroll(function() {
	// 	// console.log($(this).scrollTop());
	// 	if ($(this).scrollTop() > 220) {
	// 		$('#buy_bottom_bar').fadeIn();
	// 	} 
	// 	else {
	// 		$('#buy_bottom_bar').fadeOut();
	// 	}
	// });

});
</script>
<script src="//embed.typeform.com/next/embed.js"></script>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/1b2948b7c6ab19db3239219c9/508393cecb402f600d6deaca5.js");</script>



<?php if( get_field('show_purchase_tickets_button') == "Yes" ): ?>
	<?php if( get_field('ticket_sales_platform') == "1" ): ?>
		<?php $userId = get_field('squadup_user_id', 'options'); ?>
<!-- BEGIN SquadUP Embed Code -->
<script>
	window.squadup = {
        onDomReady: false,
        title: 'Select Tickets Below',
        // image: 'https://schnpsmediadev.wpengine.com/wp-content/uploads/2023/02/schneps-media.png',
		image: '<?php the_field('logo_image'); ?>',
        shoppingCartEnabled: true,
        root: 'squadup-checkout',
        checkoutButtonText: 'BUY NOW',
        userId: [<?php echo $userId; ?>],
        autoScrollElementId: 'squadup-checkout',
        brandingPosition: 'bottom',
    }
</script>
<script src="https://s3.amazonaws.com/checkout.squadup.com/main-v2.min.js"></script>
<!-- END SquadUP Embed Code -->
<!--Custom code to make the modal work-->
<script src="https://s3.amazonaws.com/examples.squadup.com/js/bootstrap.min.js"></script>
<script>
jQuery(document).ready(function($) {
	$('#myModal').appendTo("body")
});
</script>
<script>
jQuery(document).ready(function($) {
	// $(document).ready(function () {
        $("body").on("click", ".launch-modal-btn", function (e) {
            e.preventDefault();
            /* Set any dynamic values for the squadup object within this click handler. A typical dynamic value would
            /* be an event id that changes depending which button is clicked. The following code demonstrates how this
            /* can be accomplished.*/
            // Get event id from the attribute on the clicked button
            var eventId = $(this).attr('data-event-id');
            // Set the event id value on the squadup config object
            window.squadup = Object.assign(window.squadup, {eventId: eventId, showCheckout: false});
            console.log("SquadUP config object:", window.squadup);
            // Programmatically launch the embed widget
            document.dispatchEvent(new CustomEvent('createSquadupEmbed'));
            // Launch the modal
            $('#myModal').modal();
        }).on("click", 'a[href="#shopping-cart"]', function(e) {
            e.preventDefault();
            // Set the event id value on the squadup config object
            window.squadup = Object.assign(window.squadup, {eventId: null, showCheckout: true});
            console.log("SquadUP config object:", window.squadup);
            // Programmatically launch the embed widget
            document.dispatchEvent(new CustomEvent('createSquadupEmbed'));
            // Launch the modal
            $('#myModal').modal();
        });
        // Destroy the embed object anytime the modal is hidden
        $('#myModal').on('hide.bs.modal', function (e) {
            document.dispatchEvent(new CustomEvent('destroySquadupEmbed'));
        });
    // });
});
</script>
<!-- END Custom code to make the modal work -->
	<?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>
