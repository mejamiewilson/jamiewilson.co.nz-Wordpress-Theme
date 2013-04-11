<?php get_header('Blog'); ?>
	
	<!-- Section -->
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div class="container clearfix">

				<div class="col col1 gutter"></div>

				<div class="col col8 content">
					<div class="header">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>					
					</div>									
				</div>

				<div class="col col2 sidebar"></div>
				<div class="col col1 gutter"></div>

			</div>
			<div class="container clearfix">

				<div class="col col1 gutter"></div>

				<div class="col col8 content">
					<?php the_content(); // Dynamic Content ?>
					
				</div>


			<div class="col col2 sidebar">

				<ul class="icon-list">
					<li><span class="ss-calendar icon"></span><?php the_time('F j, Y'); ?></li>
					<li><span class="ss-clock icon"></span><?php the_time('g:i a'); ?></li>
				</ul>

				<!--<aside>
					<h3>Sidebar</h3>
					<p>It's Groundhog Day, which means that January is over. January, of course, is official diet book month, the time of year that formerly young.</p>
				</aside>-->
			</div>

			<div class="col col1 gutter"></div>

			</div>


			
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>
	
	<!-- /Section -->
	

<?php get_footer(); ?>