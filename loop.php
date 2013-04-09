<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	

	<!-- Article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="container clearfix">

			<div class="col col1 gutter"></div>
 
			<div class="col col8 content">
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>					
				</h2>
			</div>

			<div class="col col2 sidebar"></div>
			<div class="col col1 gutter"></div>

		</div>
		
		<div class="container clearfix">

			<div class="col col1 gutter"></div>
 
			<div class="col col8 content">
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>				
				<?php echo html5wp_view_article(); ?>
			</div>

			<div class="col col2 sidebar">				
				<ul class="icon-list">
					<li><span class="ss-calendar icon"></span><?php the_time('F j, Y'); ?></li>
					<li><span class="ss-clock icon"></span><?php the_time('g:i a'); ?></li>
				</ul>
			</div>

			<div class="col col1 gutter"></div>

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