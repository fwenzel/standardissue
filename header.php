<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="googlebot" content="index,follow,noarchive" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />

<?php wp_head(); ?>
</head>
<body>
<!-- start header -->
<div id="header">
    <div id="logo">
        <h1><a href="<?php bloginfo('url');?>/"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
    </div>
    <div id="menu">
        <ul>
            <li <?php if (is_home()) echo 'class="active"';?>><a href="<?php bloginfo('url');?>/">home</a></li>
            <li><a href="http://flickr.com/freeed">photos</a></li>
            <?php /* <li <?php if (is_page('projects')) echo 'class="active"';?>><a href="<?php bloginfo('url');?>/projects">my projects</a></li> */ ?>
            <li <?php if (is_page('about-me')) echo 'class="active"';?>><a href="<?php bloginfo('url');?>/about-me">about</a></li>
            <?php /* <li <?php if (is_page('impressum')) echo 'class="active"';?>><a href="<?php bloginfo('url');?>/impressum">impressum</a></li> */ ?>
        </ul>
    </div>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
