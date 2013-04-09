<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	

	<!-- Article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="container clearfix">

			<div class="col col1 gutter">
				<!-- Post Thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /Post Thumbnail -->
			</div>
 
			<div class="col col8 content">
				<!-- Post Title -->
				<h2 class="post-title">
					<!--<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>-->
					<?php the_title(); ?>
				</h2>
				<!-- /Post Title -->
					
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				
				<?php echo html5wp_view_article(); ?>

			</div>

			<div class="col col2 sidebar">
				<!-- Post Details -->
				<ul>
					<li><?php the_time('F j, Y'); ?></li>
					<li><?php the_time('g:i a'); ?></li>
				</ul>
				<!--
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				 /Post Details -->
			</div>

			<div class="col col1 gutter">

			</div>

		</div>

		
	</article>
	<!-- /Article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- Article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /Article -->

<?php endif; ?>