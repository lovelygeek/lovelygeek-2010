<?php get_header(); ?>
<div id="content">
<?php get_sidebar(); ?>

	<div id="page">
	<?php if (have_posts()) : ?>
	
 	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	<?php /* If this is a category archive */ if (is_category()) { ?>
	<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
 	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
 	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h1>Archive for <?php the_time('F, Y'); ?></h1>
 	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h1>Archive for <?php the_time('Y'); ?></h1>
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h1>Author Archive</h1>
 	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h1>Blog Archives</h1>
 	<?php } ?>

	<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> on <?php the_time('D, F jS, Y @ g:ia') ?></h3></div>

		<div class="excerpt">
		<?php the_excerpt(); ?>
		</div>

		<p class="center"><img src="<?php bloginfo("template_url"); ?>/images/hr.png" alt="" /></p>
	<?php endwhile; ?>

	<?php else : ?>
		<h1 class="center">Not Found</h1>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php endif; ?>

		<div class="browse">
		<p class="older"><?php next_posts_link('<img src="http://www.lovelygeek.net/wp-content/themes/version01/images/left.png" alt="older posts" class="middle" /> Older Posts '); ?></p>
		<p class="newer"><?php previous_posts_link('Newer Posts <img src="http://www.lovelygeek.net/wp-content/themes/version01/images/right.png" alt="newer posts" class="middle" />'); ?></p>
		</div>
	
	</div><!--End Page-->		
</div><!--End Content-->
<?php get_footer(); ?>