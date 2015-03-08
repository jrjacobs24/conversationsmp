<?php
/**
 * Template Name: Landing Page
 *
 * @package WordPress
 * @subpackage Conversations Made Possible Template
 * @since Conversations Made Possible Template 1.0
 */
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="cover-container">

			<div class="masthead clearfix">
            <div class="inner">
              <div class="masthead-brand">
              	<?php if ( of_get_option( 'logo_image' ) ): ?>

              		<div id="logo-container" class="aligncenter">
              			<img class="logo img-responsive aligncenter" alt="<?php echo get_bloginfo( 'name' ); ?>" src="<?php echo of_get_option( 'logo_image' ); ?>">
              		</div>
              	
              	<?php else: ?>

              		<h1 class="text-center"><?php echo get_bloginfo( 'name' ); ?></h1>

              	<?php endif; ?>
              </div>
            </div>
          </div>

			<div class="inner cover">

				<?php the_content(); ?>

			</div>

			<?php edit_post_link(__('Edit','convomp'), '<p>', '</p>'); ?>		

	<?php endwhile; endif; ?>

<?php get_footer(); ?>