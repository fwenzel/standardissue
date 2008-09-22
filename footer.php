</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<div class="wrap">
		<div id="fbox1" class="box2">
			<h2>About <?php bloginfo('name'); ?></h2>
			<p>Curabitur tellus. Phasellus tellus <a href="#">turpis iaculis</a> in, faucibus lobortis, posuere in, lorem. Donec a ante. Donec neque purus, adipiscing id <a href="#">eleifend a cursus</a> vel odio. Vivamus varius justo amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi elit a mauris. In hac habitasse platea.</p>
		</div>
		<div id="fbox2" class="box2">
			<h2>Subscribe</h2>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
			</ul>
		</div>
		<div id="fbox3" class="box2">
			<h2>People</h2>
			<ul>
				<li><a href="#">John Doe</a></li>
				<li><a href="#">Jane Doe</a></li>
				<li><a href="#">Uncle Sam</a></li>
				<li><a href="#">Santa Claus</a></li>
			</ul>
		</div>
	</div>
	<p id="legal">Copyright &copy; <?php echo date('Y'), ' '; bloginfo('name'); ?>. Based on design work by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> and <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. Powered by <a href="http://wordpress.org/">WordPress</a>.</p>
</div>
<!-- end footer -->
<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
<?php wp_footer(); ?>
</body>
</html>
