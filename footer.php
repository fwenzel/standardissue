</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<?php if (!is_single()): ?>
	<div class="wrap">
		<div id="fbox1" class="box2">
			<h2>About <?php bloginfo('name'); ?></h2>
			<p><a href="<?php bloginfo('url');?>/">Fred</a> is a student in Information Engineering and Management, Open Source developer and musician. <?php bloginfo('name');?> is his blog about the things he runs across between American West Coast and the beautiful German southwest.</p>
		</div>
		<div id="fbox2" class="box2">
			<h2>Subscribe</h2>
			<ul id="subscribe">
				<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
			</ul>
		</div>
		<div id="fbox3" class="box2">
			<h2>Blogroll</h2>
			<ul id="people">
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
			</ul>
		</div>
	</div>
	<?php endif; ?>
	<p id="legal">Copyright &copy; <?php echo date('Y'), ' '; bloginfo('name'); ?> | Powered by <a href="http://wordpress.org/">WordPress</a> | Based on design work by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> and <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> | Some icons by <a href="http://www.famfamfam.com/lab/icons/silk/">famfamfam</a></p>
</div>
<!-- end footer -->
<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
<?php wp_footer(); ?>
</body>
</html>
