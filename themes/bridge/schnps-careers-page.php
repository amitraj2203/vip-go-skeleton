<?php
/*
Template Name: Schnps Careers
*/
?>

<?php get_header(); ?>
<?php if(get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
	<script>
	var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
	</script>
<?php } ?>
	<?php //get_template_part( 'title' ); ?>
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
		<!-- careers header section -->
		<!-- ////////////////////////////// -->
		<section class="container careers-header-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h2 class="careers-header"><?php the_field('main_header'); ?></h2>

						<div class="careers-description"><?php the_field('header_description'); ?></div>

						<!-- <a href="#"><php the_field('header_button_text'); ?></a> -->

					</div>
				</div>
			</div>
		</section>

		<!-- ////////////////////////////// -->
		<!-- available careers section -->
		<!-- ////////////////////////////// -->
		<section class="container careers-category-container">
			<div class="container_inner clearfix">
				

				<?php if( have_rows('careers_flex_content') ): ?>
					<?php while( have_rows('careers_flex_content') ): the_row(); ?>
						<div class="vc_row careers-category-row">

							<h2 class="category-header"><?php the_sub_field('section_header'); ?></h2>

							<?php if( have_rows('jobs') ): ?>

								<?php while ( have_rows('jobs') ): the_row();

									$index = get_row_index();
									$job_title = get_sub_field('job_title');
									$url = get_sub_field('url');
									$location = get_sub_field('location');
								?>
									<div class="vc_col-xs-12 vc_col-sm-9 wpb_column vc_column_container career-title-container">
										<a href="<?php echo $url; ?>"><?php echo $job_title; ?></a>				
									</div>
									<div class="vc_col-xs-12 vc_col-sm-3 wpb_column vc_column_container career-location-container">
										<span><?php echo $location; ?></span>						
									</div>
								<?php endwhile; ?>

							<?php endif; ?>

						</div>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>

		<!-- ////////////////////////////// -->
		<!-- careers bottom section -->
		<!-- ////////////////////////////// -->
		<section class="container careers-header-container">
			<div class="container_inner clearfix">
				<div class="vc_row">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<h2 class="careers-header"><?php the_field('bottom_header'); ?></h2>

						<p class="careers-description"><?php the_field('bottom_description'); ?></p>

						<a href="https://schnepsmedia.typeform.com/to/cMusNCyF"><?php the_field('bottom_button_text'); ?></a>

					</div>
				</div>
			</div>
		</section>


	</div><!-- End Container -->

</div>
<?php if(isset($qode_options_proya['overlapping_content']) && $qode_options_proya['overlapping_content'] == 'yes') {?>
	</div></div>
<?php } ?>
<?php do_action('qodef_page_after_container') ?>
<script>
jQuery(document).ready(function($) {
  	console.log('page is fully loaded');

});
</script>
<script src="//embed.typeform.com/next/embed.js"></script>
<?php get_footer(); ?>
