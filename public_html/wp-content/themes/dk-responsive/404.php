<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * 
 * 404 Template
 *
 *
 * @file           404.php
 * @package        DK Responsive
 * @author         Dipali Dhole
 * @copyright      2014 Zenant
 * @license        license.txt
 * @version        Release: 1.0
 */

get_header(); ?>
<div id="primary" class="main-content-area col-md-12">
	<div class="main-content-wrapper"> 
		<article > 
			<section class="error-404 not-found">				
				<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'dk-responsive' ); ?></h1>			
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dk-responsive' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( dk_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'dk-responsive' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>
					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'dk-responsive' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>
					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
	        </article><!-- #post-## -->
        </div>
</div><!-- #primary -->

<?php get_footer(); ?>
