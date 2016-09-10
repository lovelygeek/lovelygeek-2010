<?php get_header(); ?>
<div id="content">
<?php get_sidebar(); ?>
<div id="page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
			<div class="entry"><?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?></div>
	</div>
	
		<?php endwhile; endif; ?>
</div><!--End Page-->		
</div><!--End Content-->	
<?php get_footer(); ?>