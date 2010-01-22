</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
    <?php if (!is_single()): ?>
    <div class="wrap">
        <div id="fbox1" class="box2">
            <h2>About <?php bloginfo('name'); ?></h2>
            <p><a href="<?php bloginfo('url');?>/about-me">Fred Wenzel</a> is a Software Engineer at <a href="http://mozilla.com">Mozilla</a>. <?php bloginfo('name');?> is his blog about the things he runs across between American West Coast and southern Germany.</p>
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
                <?php wp_list_bookmarks('title_li=&categorize=0&category_name=Blogroll&orderby=rand&limit=5'); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <p id="legal">Copyright &copy; <?php echo date('Y'), ' '; bloginfo('name'); ?> | Powered by <a href="http://wordpress.org/">WordPress</a> | Based on design work by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> and <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> | Some icons by <a href="http://www.famfamfam.com/lab/icons/silk/">famfamfam</a></p>
</div>
<!-- end footer -->

<!-- Google analytics -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-291336-2");
pageTracker._trackPageview();
</script>
<!-- end analytics -->

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
<?php wp_footer(); ?>
</body>
</html>
