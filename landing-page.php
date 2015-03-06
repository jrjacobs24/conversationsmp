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

			<div class="inner cover">

				<?php the_content(); ?>

			</div>

		</div>		

		<?php edit_post_link(__('Edit this entry','convomp'), '<p>', '</p>'); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>