<?php
/*
Template Name: Welcome
*/
?>
<?php get_header(); ?>

	<div id="content">
		<div id="index">
			<div class="mbp"><img src="<?php bloginfo('template_url'); ?>/images/anim.gif" alt="slideshow" class="anim" /></div>

			<div class="hello">
			My name is Cristina Robinson, and I am a web designer based in Sacramento. I like to design web sites that are clean, simple, and use web standards. <a class="large awesome" href="<?php bloginfo('url'); ?>/about/">See more about me &raquo;</a>
			</div>
		</div><!--End Index-->
	</div><!--End Content-->
	
			<div class="twitterbox">
			<h2>Tweet Tweet</h2>
			<?php twitter_messages("darthcena", 3, true); ?>
			</div>

			<div class="deliciousbox">
			<h2>Tasty Web Bytes</h2>
			<?php delicious_bookmarks("darthcena", 5); ?>
			</div>
			
			<div class="servicesbox">
			<h2>What I'm Working On</h2>
			<p class="center"><img src="<?php bloginfo('template_url'); ?>/images/workingon.png" alt="what I'm working" class="working" />
			Spa micro-site for school.
			</p>
			</div>

<?php get_footer(); ?>