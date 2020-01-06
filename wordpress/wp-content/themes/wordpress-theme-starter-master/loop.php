<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- Dynamically adding alt text to variable -->
		<?php $thumbnail_id  = get_post_thumbnail_id( $post->ID ); ?>
		<?php $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

				<div class="placeholder bottom-line" style="background-image: url(<?php echo the_post_thumbnail_url();?>);" >
          <img src="<?php echo get_template_directory_uri();?>/img/clear-placeholders/small.png" alt="<?php echo $thumbnail_alt ?>">  
        </div>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- info box -->
		<div class="info">
			<!-- post title -->
			<h2 class="title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div>
		<!-- info box -->

	</article>
	<!-- /article -->
			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<!-- /post details -->
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
