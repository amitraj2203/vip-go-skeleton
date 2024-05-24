<?php
/*
Template Name: Schnps Events
*/
?>

<?php get_header(); ?>
<?php if(get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
	<script>
	var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
	</script>
<?php } ?>
	<?php get_template_part( 'title' ); ?>
<?php
$revslider = get_post_meta($id, "qode_revolution-slider", true);
if (!empty($revslider)){ ?>
	<div class="q_slider">
		<div class="q_slider_inner">
			<?php echo do_shortcode($revslider); ?>
		</div>
	</div>
<?php
}
?>

	<div class="container"<?php if($background_color != "") { echo " style='background-color:". $background_color ."'";} ?>>

		<!-- ////////////////////////////// -->
		<!-- events hero image  -->
		<!-- ////////////////////////////// -->
		<div class="events-banner-container" style="background-image: url(<?php the_field('hero_image'); ?>);">
			<div class="events-banner"></div>
			<div class="events-banner-title-text">

		 		<h2 title="<?php the_field("title"); ?>"><?php the_field("title"); ?></h2>

				<div class="events-banner-subtitle-text"><?php htmlspecialchars(the_field("description"), ENT_QUOTES); ?></div>

				<ul class="events-banner-buttons">
					<li><a class="events-banner-button" href="#upcoming-events">Upcoming Events</a></li>
					<li><a class="events-banner-button" data-tf-popup="H2kOy0" data-tf-hidden="event_name=xxxxx">Become A Sponsor</a></li>
					<li><a class="events-banner-button" data-tf-popup="QRFHUY">Nominate</a></li>
				</ul>

			</div>
		</div>


		<!-- ////////////////////////////// -->
		<!-- about events section -->
		<!-- ////////////////////////////// -->
		<div class="container event-details-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-4 wpb_column vc_column_container">
						<h2>About Our Events</h2>

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

						<?php if( get_field('show_youtube_button') == "Yes" ): ?>
							<a href="<?php the_field("youtube_url");?>" target="_blank">
								<span class="q_social_icon_holder circle_social">
									<span class="fa-stack fa-2x" style="background-color: #e3e3e3;">
										<i class="fa fa-youtube" style=""></i>
									</span>
								</span>
							</a>
						<?php endif; ?>

						<p class="event-hashtag"><?php the_field("events_hashtag"); ?></p>

						<p>Contact us to learn more and join us.</p>
						<p>
							<a 
								id="events-contact-button" 
								data-tf-popup="kJa03Xic" 
								class="qbutton events-contact-button"
							>
								Contact
							</a>
						</p>
					</div>
					<div class="vc_col-sm-8 wpb_column vc_column_container">
						<?php the_field("about_events"); ?>
					</div>
				</div>
			</div>
		</div>



		<!-- ////////////////////////////// -->
		<!-- upcoming events section -->
		<!-- ////////////////////////////// -->
		<div 
			id="upcoming-events-header-wrapper" 
			class="container upcoming-events-container"
		>
			<div class="container_inner clearfix upcoming-events">
				<div class="vc_row">
					<h2 class="event-section-header" style="padding-top: 25px;padding-bottom: 25px;">Upcoming Events</h2>
				</div>
			</div>
		</div>
		<div id="upcoming-events" class="container upcoming-events-container">
			<div class="container_inner clearfix upcoming-events">
				
				<?php
					$current_page_id = get_the_ID();
					//Today's date
					$today_date = date('Ymd', strtotime("now"));

					$args = array(
						// Arguments for your query.
						'post_type' 	=> 'page',
						'post_parent' 	=> $current_page_id,
						'posts_per_page' => 120,
						'orderby'		=> 'meta_value',
						'order'			=> 'ASC',
						'meta_query'	=> array(
							array(
								'key' 		=> 'date',
								'value' 	=> $today_date,
								'compare'	=> '>=',
							)
						)
					);

					// Custom query.
					$query = new WP_Query( $args );
				?>

				<?php if ( $query->have_posts() ): $index = 1; $num_upcoming_events = $query->post_count; ?>


					<?php $row_number = 1; while ( $query->have_posts() ): $query->the_post();

						$show_event_in_the_main_events_page = get_field("show_event_in_the_main_events_page");
						if($show_event_in_the_main_events_page == 0) {
							continue;
						}
						
						$num_items_per_row = 3;
						$mod = $num_items_per_row * $row_number + 1;
						$is_new_row_start = (($index == 1) || (($index % $mod) == 0));
						if($index != 1 && $is_new_row_start) { $row_number++; }
						$is_last_event = $query->current_post + 1 == $query->post_count;//$index == $num_upcoming_events;
						$is_new_row_end = ($index % $num_items_per_row == 0 || $is_last_event);

						$has_border_class = ($index % $num_items_per_row == 0) ? "" : " red-border-right";

						$url = get_permalink();
						$img_src = get_field("hero_image");
						$title = get_field("title");
						$max_title_length = 45;
						$title = strlen($title) > $max_title_length ? substr($title,0,$max_title_length)."..." : $title;

						$date = get_field("date");
						$date_month = date("F", strtotime($date));
						$date_day = date("d", strtotime($date));
						$description = get_field("description");
						$show_date_on_banner = get_field("show_date_on_banner") == "Yes";
						$location_name = get_field("location_name");
						//$max_description_length = 300;
						//$description = strlen($description) > $max_description_length ? substr($description,0,$max_description_length)."..." : $description;
						$TEMPLATE_PATH = get_template_directory_uri(); 

					?>
						<?php if( $is_new_row_start ): ?>
							<div 
								class="vc_row event-row-container"
							>
						<?php endif; ?>

							<div
								data-num-upcoming-events="<?php echo $num_upcoming_events; ?>"
								data-last="<?php echo $is_last_event; ?>"
								data-index="<?php echo $index; ?>"
								class="vc_col-sm-4 wpb_column vc_column_container upcoming-event-column schnps-event-preview-container"
							>

								<div class="schnps-event-preview">
									<div class="schnps-event-img-container">
										<a href="<?php echo $url; ?>">
											<?php the_post_thumbnail( 'full' ); ?>
										</a>
									</div>
									<div class="schnps-event-details-container">
										<div class="schnps-event-details-container-left">
											<div class="schnps-event-calendar-icon">
												<img src="<?php echo $TEMPLATE_PATH; ?>/img/schnps_icons/shnps_calendar_icon.jpg" alt="">
											</div>
											<div class="schnps-event-calendar-month"><?php echo $date_month; ?></div>
											<div class="schnps-event-calendar-day"><?php echo $date_day; ?></div>
										</div>
										<div class="schnps-event-details-container-right">
											<div class="schnps-event-details-title-container">
												<h3>
													<a class="schnps-event-title-link" href="<?php echo $url; ?>">
														<?php echo $title; ?>
													</a>
												</h3>
											</div>
											<div class="schnps-event-details-venue-container">
												<img src="<?php echo $TEMPLATE_PATH; ?>/img/schnps_icons/shnps_map_location_icon.png" alt="">
												<p class="schnps-event-venue"><?php echo $location_name; ?></p>
											</div>
											<a href="<?php echo $url; ?>" class="qbutton event-button schnps-event-btn">Learn More</a>
										</div>
									</div>
								</div>
							</div>

								<!-- <div 
									data-num-upcoming-events="?php echo $num_upcoming_events; ?>"
									data-last="?php echo $is_last_event; ?>" 
									data-index="?php echo $index; ?>" 
									class="vc_col-sm-4 wpb_column vc_column_container upcoming-event-column?php echo $has_border_class; ?>"
								>

									<div class="wpb_wrapper upcoming-event-wrapper">
										<div class="q_team">
											<div class="q_team_inner">
												<div 
													class="q_team_image"
												>
													<a href="?php echo $url; ?>">
														?php the_post_thumbnail( 'full' ); ?>
													</a>
												</div>
												<div class="q_team_text">
													<div class="q_team_text_inner">
														<div class="upcoming-event-text-wrapper q_team_title_holder">
															<h3><a class="upcoming-event-title-link" href="?php echo $url; ?>">?php echo $title; ?></a></h3>
															
															?php if($show_date_on_banner): ?>
																<p>?php echo $date; ?></p>
															?php else: ?>
																<p>Multiple Dates</p>
															?php endif; ?>

															<div class="upcoming-event-description" style="min-height: 417px;max-height: 417px;overflow: hidden;">?php echo $description; ?></div>
															<p><a href="?php echo $url; ?>" class="qbutton upcoming-event-button">View Event</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->

						<?php if( $is_new_row_end ): ?>
							</div>
						<?php endif; ?>
						<?php $index++; ?>
					<?php endwhile; ?>


				<?php endif; ?>

				<!-- If there are no upcoming events show a message -->
				<?php if ( !$query->have_posts() ): ?>
					<div class="vc_row">
						<div class="vc_col-sm-12 wpb_column vc_column_container">
							<div class="q_team_image">
								<img 
									style="display:block;margin:50px auto;" 
									src="https://schnpsmediadev.wpengine.com/wp-content/uploads/2021/08/no_events_scheduled_schneps.jpg" 
									alt="No events scheduled at this time. Check back soon!" 
									title="No events scheduled at this time. Check back soon!"
								/>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<?php
					// Restore original post data.
					wp_reset_postdata();
				?>

			</div>
		</div>

		<!-- ////////////////////////////// -->
		<!-- events links section -->
		<!-- ////////////////////////////// -->
		<div class="container event-details-container" style="background-color:#161616;">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<?php
						$sponsor_img_src = get_field("sponsor_image");
						//$sponsor_url = "./sponsor";

						$speaker_img_src = get_field("speaker_image");
						//$speaker_url = "./speak";

						$nominate_img_src = get_field("nominate_image");
						//$nominate_url = "./nominate";
					?>
					<div class="vc_col-sm-4 wpb_column vc_column_container">
						<div class="wpb_wrapper event-speaker-wrapper featured-event-link">
							<div class="q_team">
								<div class="q_team_inner">
									<div class="q_team_image upcoming-events-image-link-container">
										<a data-tf-popup="H2kOy0" data-tf-hidden="event_name=xxxxx">
											<img src="<?php echo $sponsor_img_src; ?>" alt="">
										</a>
									</div>
									<div class="q_team_text" style="min-height:auto;">
										<div class="q_team_text_inner">
											<div class="q_team_title_holder">
												<h3 class="q_team_name">BECOME A SPONSOR</h3>
											</div>
											<div class="separator small center"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="vc_col-sm-4 wpb_column vc_column_container">
						<div class="wpb_wrapper event-speaker-wrapper">
							<div class="q_team">
								<div class="q_team_inner">
									<div class="q_team_image upcoming-events-image-link-container">
										<a data-tf-popup="nbQSXG">
											<img src="<?php echo $speaker_img_src; ?>" alt="">
										</a>
									</div>
									<div class="q_team_text" style="min-height:auto;">
										<div class="q_team_text_inner">
											<div class="q_team_title_holder">
												<h3 class="q_team_name hover-red">SPEAK AT AN EVENT</h3>
											</div>
											<div class="separator small center"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="vc_col-sm-4 wpb_column vc_column_container">
						<div class="wpb_wrapper event-speaker-wrapper">
							<div class="q_team">
								<div class="q_team_inner">
									<div class="q_team_image upcoming-events-image-link-container">
										<a data-tf-popup="QRFHUY">
											<img src="<?php echo $nominate_img_src; ?>" alt="">
										</a>
									</div>
									<div class="q_team_text" style="min-height:auto;">
										<div class="q_team_text_inner">
											<div class="q_team_title_holder">
												<h3 class="q_team_name">NOMINATE</h3>
											</div>
											<div class="separator small center"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- ////////////////////////////// -->
		<!-- business leaders section -->
		<!-- ////////////////////////////// -->
		<?php if( have_rows('business_leaders') ): ?>
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
						><?php the_field("leaders_header"); ?></h2>
					</div>
				</div>
			</div>

			<div class="container event-business-leaders-container">
				<div class="container_inner clearfix">
					<div class="vc_row slick-slides-container">

						<?php while ( have_rows('business_leaders') ): the_row();

							$index = get_row_index();
							$leader_image_src = get_sub_field('leader_image');
							$title = get_sub_field('title');
							$headline = get_sub_field('headline');
							$description = get_sub_field('description');
							$leader_name = get_sub_field('leader_name');
							$leader_title = get_sub_field('leader_title');

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
											<h3 class="event-business-leader-headline"><?php echo $headline; ?></h3>
											<p class="event-business-leader-description"></p><p><?php echo $description; ?></p>
											
											<div class="event-business-leader-info">
												<p class="event-business-leader-name"><?php echo $leader_name; ?></p>
												<p class="event-business-leader-title"><?php echo $leader_title; ?></p>
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
			<div 
				id="events-quotes-header-wrapper" 
				class="container events-quotes-container"
			>
				<div class="container_inner clearfix events-quotes">
					<div class="vc_row">
						<h2 
							class="event-section-header" 
							style="padding-top: 25px;padding-bottom: 25px;"
						>Testimonials</h2>
					</div>
				</div>
			</div>

			<div class="container event-quotes-container">
				<div class="container_inner clearfix">
					<div class="vc_row slick-quotes-container">
						<?php while ( have_rows('quotes') ): the_row();

							$index = get_row_index();
							$quote = get_sub_field('quote');
							$citation = get_sub_field('citation');

						?>
							<div class="event-quotation-slide" style="width: 100%; display: inline-block;">
								<div class="event-quotation-item">
									<span class="event-double-quote">“</span>
									<h4 class="event-quotation-text"><?php echo $quote; ?><span>”</span></h4>
								</div>
								<div class="event-quotation-content">
									<div class="event-person-info">
										<p class="event-person-name"><?php echo $citation; ?></p>
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
		<!-- past events section -->
		<!-- ////////////////////////////// -->
		<?php
			$current_page_id = get_the_ID();
			//Today's date
			$today_date = date('Ymd', strtotime("now"));

			$args = array(
				// Arguments for your query.
				'post_type' 	=> 'page',
				'post_parent' 	=> $current_page_id,
				'orderby'		=> 'meta_value',
				'order'			=> 'DESC',
				'posts_per_page' => 60,
				'meta_query'	=> array(
					array(
						'key' 		=> 'date',
						'value' 	=> $today_date,
						'compare'	=> '<',
					)
				)
			);

			// Custom query.
			$query = new WP_Query( $args );
		?>
		<?php if ( $query->have_posts() ): $index = 1; $num_past_events = $query->post_count; ?>
			<div id="past-events" class="container past-events-container" style="background-color:#161616;">
				<div class="container_inner clearfix past-events">
					<div class="vc_row" style="border-bottom: 1px solid #ed1c24;margin-bottom: 25px;">
						<h2 class="event-section-header" style="padding-top: 25px;padding-bottom: 25px;">Past Events</h2>
					</div>

					<?php $row_number = 1; while ( $query->have_posts() ): $query->the_post();
						
						$num_items_per_row = 3;
						$mod = $num_items_per_row * $row_number + 1;
						$is_new_row_start = (($index == 1) || (($index % $mod) == 0));
						if($index != 1 && $is_new_row_start) { $row_number++; }
						$is_last_event = $index == $num_past_events;
						$is_new_row_end = ($index % $num_items_per_row == 0 || $is_last_event);
						
						$has_border_class = ($index % $num_items_per_row == 0) ? "" : " red-border-right";
						
						

						$url = get_permalink();
						$img_src = get_field("hero_image");
						$title = get_field("title");
						$max_title_length = 45;
						$title = strlen($title) > $max_title_length ? substr($title,0,$max_title_length)."..." : $title;
						$location_name = get_field("location_name");
						$date = get_field("date");
						$date_month = date("F", strtotime($date));
						$date_day = date("d", strtotime($date));
						$description = get_field("description");//htmlspecialchars(the_field("description"), ENT_QUOTES);
						//$max_description_length = 300;
						//$description = strlen($description) > $max_description_length ? substr($description,0,$max_description_length)."..." : $description;

					?>
						<?php if( $is_new_row_start ): ?>
							<div class="vc_row  event-row-container">
						<?php endif; ?>

							<div
								data-num-past-events="<?php echo $num_past_events; ?>"
								data-last="<?php echo $is_last_event; ?>"
								data-index="<?php echo $index; ?>"
								class="vc_col-sm-4 wpb_column vc_column_container upcoming-event-column schnps-event-preview-container"
							>
								<div class="schnps-event-preview">
									<div class="schnps-event-img-container">
										<a href="<?php echo $url; ?>">
											<?php the_post_thumbnail( 'full' ); ?>
										</a>
									</div>
									<div class="schnps-event-details-container">
										<div class="schnps-event-details-container-left">
											<div class="schnps-event-calendar-icon">
												<img src="<?php echo $TEMPLATE_PATH; ?>/img/schnps_icons/shnps_calendar_icon.jpg" alt="">
											</div>
											<div class="schnps-event-calendar-month"><?php echo $date_month; ?></div>
											<div class="schnps-event-calendar-day"><?php echo $date_day; ?></div>
										</div>
										<div class="schnps-event-details-container-right">
											<div class="schnps-event-details-title-container">
												<h3>
													<a class="schnps-event-title-link" href="<?php echo $url; ?>">
														<?php echo $title; ?>
													</a>
												</h3>
											</div>
											<div class="schnps-event-details-venue-container">
												<img src="<?php echo $TEMPLATE_PATH; ?>/img/schnps_icons/shnps_map_location_icon.png" alt="">
												<p class="schnps-event-venue"><?php echo $location_name; ?></p>
											</div>
											<a href="<?php echo $url; ?>" class="qbutton event-button schnps-event-btn">Learn More</a>
										</div>
									</div>
								</div>
							</div>

							<!-- <div 
								data-index="?php echo $index; ?>"
								data-num-past-events="?php echo $num_past_events; ?>" 
								data-last="?php echo $is_last_event; ?>" 
								class="vc_col-sm-4 wpb_column vc_column_container upcoming-event-column?php echo $has_border_class; ?>">

								<div class="wpb_wrapper upcoming-event-wrapper">
									<div class="q_team">
										<div class="q_team_inner">
											<div class="q_team_image">
												<a href="?php echo $url; ?>">
													?php the_post_thumbnail( 'full' ); ?>
												</a>
											</div>
											<div class="q_team_text">
												<div class="q_team_text_inner">
													<div class="upcoming-event-text-wrapper q_team_title_holder">
														<h3><a class="upcoming-event-title-link" href="?php echo $url; ?>">?php echo $title; ?></a></h3>
														<p>?php echo $date; ?></p>
														<div class="upcoming-event-description" style="min-height: 417px;max-height: 417px;overflow: hidden;">?php echo $description; ?></div>
														<p><a href="?php echo $url; ?>" class="qbutton upcoming-event-button">View Event</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div> -->
							
						<?php if( $is_new_row_end ): ?>
							</div>
						<?php endif; ?>
						<?php $index++; ?>
					<?php endwhile; ?>

					<?php
						// Restore original post data.
						wp_reset_postdata();
					?>
				</div>
			</div>
		<?php endif; ?>


	</div><!-- End Container -->

</div>
<?php if(isset($qode_options_proya['overlapping_content']) && $qode_options_proya['overlapping_content'] == 'yes') {?>
	</div></div>
<?php } ?>
<?php do_action('qodef_page_after_container') ?>
<!-- <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/1b2948b7c6ab19db3239219c9/de5231281915ea86207774446.js");</script> -->
<script>
jQuery(document).ready(function($) {
  	console.log('page is fully loaded');

	$(".slick-slides-container").slick({
		dots: false,
		// speed: 5000,
		slidesToShow: 1,
		arrows: true,
		autoplay: false,
		// appendArrows: $("#slick-arrows-container"),
		// appendDots: $("#slick-arrows-container"),
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

	// scroll to section on link click
  	document.querySelectorAll('.events-banner-buttons a[href^="#"]').forEach(anchor => {
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

});
</script>
<script src="//embed.typeform.com/next/embed.js"></script>
<?php get_footer(); ?>
