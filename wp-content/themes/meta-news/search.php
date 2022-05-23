<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Meta News
 */

get_header();

	meta_news_layout_primary(); ?>
	<div class="column-inner">
		<main id="main" class="site-main">
			
			<?php 
			get_template_part( 'template-parts/content', 'none' );
			?>

		</main><!-- #main -->
	</div><!-- .column-inner -->	
	</div><!-- #primary -->

<?php
do_action('meta_news_sidebar');
get_footer();
