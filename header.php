<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<title>Lovely Geek - The Design Portfolio of Cristina Robinson</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Cristina Assenza Robinson" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="http://lovelygeek.net/favicon.ico" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body>

<div id="container">
	
<div id="header"></div>
	
<div id="navigation">
	<ul id="topnav">
	<li><a href="<?php bloginfo('url'); ?>/" class="first">Home</a></li>
	<li><a href="<?php bloginfo('url'); ?>/about/">About</a></li>
	<li><a href="<?php bloginfo('url'); ?>/work/">Work</a></li>
    <li><a href="<?php bloginfo('url'); ?>/blog/">Blog</a></li>
	<li><a href="<?php bloginfo('url'); ?>/contact/" class="last">Contact</a></li>
	</ul>
</div>

<div id="search">
	<form method="get" id="searchform" action="http://lovelygeek.net/">
	<div id="s">
	<input type="text" value="" name="s" class="input" />
	</div>	
	</form> 
</div>