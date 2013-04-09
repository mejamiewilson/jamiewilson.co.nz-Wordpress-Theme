<?php get_header('Blog'); ?>
	
	<!-- Section -->
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div class="container clearfix">

			<div class="col col1 gutter"></div>

			<div class="col col8 content">
				<div class="header">
					<!-- Post Title -->
					<h2>
						<?php the_title(); ?>
						<!--<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">	</a>-->
					</h2>
					
					<!-- Post Details
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
					/Post Details -->
					
				</div>

				<!-- Post Thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
				<!-- /Post Thumbnail -->
				
				
				
				
				<?php the_content(); // Dynamic Content ?>
				
				
				<br class="clear">
				
				<?php //the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
				
		<!--		<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			-->	
<!--				<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
	-->			
				<?php //edit_post_link(); // Always handy to have Edit Post Links available ?>
				
				<?php //comments_template(); ?>
			
			</div>

			<div class="col col2 sidebar">

				<ul>
					<li><?php the_time('F j, Y'); ?></li>
					<li><?php the_time('g:i a'); ?></li>
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