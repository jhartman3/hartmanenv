<?php
/**
 * Content Search Template
 *
 *
 * @file           content-search.php
 * @package        DK Responsive
 * @author         Dipali Dhole
 * @copyright      2014 Zenant
 * @license        license.txt
 * @version        Release: 1.0
 */
?>

<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
<?php if ( 'post' == get_post_type() ) : ?>
<div class="entry-meta">
	<?php dk_posted_on(); ?>
	 <?php
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'dk-responsive' ) );
		if ( $tags_list ) :
	?>
	<span class="tags-links">
		<?php printf( __( '%1$s', 'dk-responsive' ), $tags_list ); ?>
	</span>
	<?php endif; // End if $tags_list ?>

</div><!-- .entry-meta -->
<?php endif; ?>
        
	

<div class="entry-summary">
	<?php the_excerpt(); ?>
</div><!-- .entry-summary -->

<footer class="entry-footer">
	<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'dk-responsive' ) );
			if ( $categories_list && dk_categorized_blog() ) :
		?>
		<span class="cat-links">
			<?php printf( __( 'Posted in %1$s', 'dk-responsive' ), $categories_list ); ?>
		</span>
		<?php endif; // End if categories ?>

		
	<?php endif; // End if 'post' == get_post_type() ?>

	<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
	<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'dk-responsive' ), __( '1 Comment', 'dk-responsive' ), __( '% Comments', 'dk-responsive' ) ); ?></span>
	<?php endif; ?>

	<?php edit_post_link( __( 'Edit', 'dk-responsive' ), '<span class="edit-link">', '</span>' ); ?>
</footer><!-- .entry-footer -->