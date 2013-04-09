

<?php get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" class="clearfix">
		
			<div class="container clearfix">


			<div class="col col1 gutter"></div>
 
			<div class="col col8 content">

				<?php the_content(); ?>
			
			</div>

			<div class="col col2 sidebar">
				<!--<aside>
					<h3>Sidebar</h3>
					<p>It's Groundhog Day, which means that January is over. January, of course, is official diet book month, the time of year that formerly young.</p>
				</aside>-->
			</div>

			<div class="col col1 gutter"></div>

			<br clear="all" />
		</div>
	</article>

<?php endwhile; ?>
	
	<?php else: ?>
	

		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</article>
	
	<?php endif; ?>



<?php get_footer(); ?>

<?php return false; ?>


				<?php //get_sidebar(); ?>






<?php get_header(); ?>
	
	<!-- Section -->
	<section>
	
		<h1><?php the_title(); ?></h1>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php the_content(); ?>
			
			<?php comments_template( '', true ); // Remove if you don't want comments ?>
			
			<br class="clear">
			
			<?php edit_post_link(); ?>
			
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
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>