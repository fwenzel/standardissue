<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar();
    // own search box
    register_sidebar_widget(__('Search'), 'widget_standardissue_search');
}

function widget_standardissue_search() {
    ?>
    <li>
    <h2>Search</h2>
    <form method="get" action="<?php bloginfo('url'); ?>/">
        <fieldset>
        <input type="text" id="s" name="s" value="<?php the_search_query(); ?>" accesskey="f" />
        <input type="submit" id="x" value="Search" />
        </fieldset>
    </form>
    </li>
    <?php
}
/*
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
*/
