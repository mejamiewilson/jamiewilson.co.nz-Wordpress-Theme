<?php /* Template Name: Resume Template */ ?>

<?php get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" class="clearfix">
		

		<div class="container clearfix">
			<div class="col col1 gutter"></div>

			<div class="col col10 content">
<div class='part'>
<p>I am currently employed as a Front End Developer but have worked across interface design, user experience design, development and project management. I can build in Javascript, HTML, CSS, C# and give you something put together in Objective-C. I am a versatile designer and developer who loves driving the core of a product and being part of new features.
</p>
<p>My dislikes list really only consists of email templates</p>
</div>
			</div>
		</div class="col col1 gutter"></div>
		</div>
			<div class="container clearfix">

			<div class="col col1 gutter"></div>
 
			<div class="col col8 content">

				<?php the_content(); ?>
			
			</div>

			<div class="col col2 sidebar">
				<aside>
					<div class="part">
						<h3>Work availability</h3>
						<p>I am currently based in Wellington, New Zealand looking to relocate to San Francisco.</p>
					</div>
					<div class="part">
						<h3>References</h3>
						<p>Available on request</p>
					</div>
				</aside>
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