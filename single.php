<?php get_header(); ?>
<div id="content">
<?php get_sidebar(); ?>
<div id="page">	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="subject"><a href="<?php trackback_url(); ?>"><?php the_title(); ?></a></div>
			<div class="commentlink"><?php the_time('l, F jS, Y') ?> <img src="<?php bloginfo( 'template_url' ); ?>/images/comments.png" alt="" class="middle" /> <?php wp_link_pages(); ?><a href="<?php comments_link(); ?>"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a>  
			<?php edit_post_link('Edit &raquo;', '&oslash; ', ''); ?></div>
		</div>
		
		<!--storycontent-->
		<?php the_content('Read the rest of this entry &raquo;'); ?>
		<!--storycontent-->

		<?php comments_template(); // Get wp-comments.php template ?>
		<div class="browse">
		<p class="next"><?php next_post_link('%link <img src="http://www.lovelygeek.net/wp-content/themes/version01/images/right.png" alt="right" class="middle" />'); ?></p>
		<p class="previous"><?php previous_post_link('<img src="http://www.lovelygeek.net/wp-content/themes/version01/images/left.png" alt="left" class="middle" /> %link'); ?></p>
		</div>
		<?php endwhile; endif; ?>
		
	</div><!--End Page-->		
</div><!--End Content-->
<?php get_footer(); ?>