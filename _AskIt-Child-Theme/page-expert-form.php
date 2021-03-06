<?php
/*
Template Name: Expert Form Page
*/
?>

<?php get_header(); ?>

<div id="main-area" class="fullwidth">
<div class="question-table">
	<?php // get_template_part('includes/breadcrumbs'); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php if (get_option('askit_integration_single_top') <> '' && get_option('askit_integrate_singletop_enable') == 'on') echo(get_option('askit_integration_single_top')); ?>

		<div class="entry page">
			<div class="entry-top">
				<div class="entry-content">
					<h2 class="title"><?php the_title(); ?></h2>
					<div class="clear"></div>

					<div class="page-separator"></div>

					<div class="post-content">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => '<p><strong>'.esc_html__('Pages','AskIt').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php edit_post_link(esc_html__('Edit this page','AskIt')); ?>

						<div class="clear"></div>
					</div>
				</div> <!-- end .entry-content -->
			</div> <!-- end .entry-top -->
		</div> <!-- end .entry -->

		<div class="clear"></div>

		<?php if (get_option('askit_integration_single_bottom') <> '' && get_option('askit_integrate_singlebottom_enable') == 'on') echo(get_option('askit_integration_single_bottom')); ?>

			<?php if (get_option('askit_468_enable') == 'on') { ?>
			<?php if(get_option('askit_468_adsense') <> '') echo ( get_option('askit_468_adsense') );
			else { ?>
				<a href="<?php echo esc_url(get_option('askit_468_url')); ?>"><img src="<?php echo esc_url(get_option('askit_468_image')); ?>" alt="Microsys Ad" class="foursixeight" /></a>
			<?php } ?>
		<?php } ?>

		<?php endwhile; endif; ?>
</div>
</div> <!-- end #main-area -->

<?php get_footer(); ?>