<?php get_header(); ?>

	<!-- start content -->
	<div id="content">
		<?php
		/* this box may be useful, some time.
		<div class="box1">
			<p><img src="images/img04.jpg" alt="" width="74" height="79" class="left" /><strong>Volutpat at varius</strong> sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum eros. Cras lobortis <a href="#">eget nonummy</a>. Vestibulum vel purus. In eget odio in sapien adipiscing sed blandit. Quisque augue tortor, facilisis sit amet, aliquam.</p>
		</div>
		*/ ?>
		<?php
		if (have_posts()) :
			$count = 0;
		?>
		<?php while (have_posts()) : the_post(); $h_tag = ((++$counter)==1?'h1':'h2'); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<<?=$h_tag?> class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></<?=$h_tag?>>
			<div class="entry">
				<p>This is StandardIssue 1.0, a free, fully standards-compliant CSS template designed by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> for <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attributions 2.5</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
				<p>Be sure to check out some of my commercial work over at <a href="http://www.4templates.com/?aff=nodethirtythree">4Templates</a>. This template is also available as a <a href="http://www.freewpthemes.net/preview/standardissue/">WordPress theme</a> at <a href="http://www.freewpthemes.net/">Free WordPress Themes</a>.</p>
			</div>
			<div class="meta">
				<p class="byline">Posted on July 21, 2007 by NodeThirtyThree</p>
				<p class="links"><a href="#" class="more">Read full article</a> <b>|</b> <a href="#" class="comments">Comments (32)</a></p>
			</div>
		</div>
		<div class="post">
			<h2 class="title">Lorem Ipsum Dolor Volutpat</h2>
			<div class="entry">
				<p>Curabitur tellus. Phasellus tellus turpis, iaculis in, faucibus lobortis, posuere in, lorem. Donec a ante. Donec neque purus, adipiscing id, eleifend a, cursus vel, odio. Vivamus varius justo sit amet leo. Morbi sed libero. Vestibulum blandit augue at mi. Praesent fermentum lectus eget diam. Nam cursus, orci sit amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi elit a mauris. In hac habitasse platea.</p>
			</div>
			<div class="meta">
				<p class="byline">Posted on July 18, 2007 by NodeThirtyThree</p>
				<p class="links"><a href="#" class="more">Read full article</a> <b>|</b> <a href="#" class="comments">Comments (32)</a></p>
			</div>
		</div>
		
		<?php else : ?>
		
		<h1>Nothing Found</h1>
		<p>Sorry, but you've either searched for something that wasn't found, or for some other reason I don't know what do show you right now.</p>
		<p>If you want, you can <a href="<?=get_option('home');?>/">start over on the front page</a>, or try your luck searching:</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		
		<?php endif; ?>
	</div>
	<!-- end content -->
	
	<?php get_sidebar(); ?>
	
	<div style="clear: both;">&nbsp;</div>

<?php get_footer(); ?>
