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
        <?php while (have_posts()) : the_post(); $extraclass = (++$count==1?' first':''); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <h1 class="title<?=$extraclass?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <div class="entry">
                <?php the_content('Read on &raquo;'); ?>
            </div>
            <?php if (!is_page()) : ?>
            <div class="meta">
                <p class="byline"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></p>
                <p class="links"><a href="<?php the_permalink() ?>" class="more">Permalink</a> <b>|</b> <a href="<?php comments_link(); ?>" class="comments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a></p>
                <p class="categories">Categories: <?php the_category(', '); the_tags(' | Tags: ', ', ', ''); ?></p>
                <?php edit_post_link('Edit', '<p class="links admin">', '</p>'); ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>

        <?php if (is_single()) : ?>

        <div id="page-switch">
            <div class="alignleft"><?php previous_post_link() ?></div>
            <div class="alignright"><?php next_post_link() ?></div>
        </div>
        <?php comments_template(); ?>

        <?php else : ?>
        <div id="page-switch">
            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </div>
        <?php endif; ?>

        <?php else : ?>

        <h1>Nothing Found</h1>
        <p>Sorry, but you've either searched for something that wasn't found,
        or for some other reason I don't know what to show you right now. So
        let me show you a picture of my dog to ease the pain:</p>
        <p><img src="<?php bloginfo('template_url')?>/images/dog_content.jpg" width="500" height="333" title="Dog content" alt="Dog Content"/></p>
        <p>If you want, you can <a href="<?=get_option('home');?>/">start over on the front page</a>, or try your luck searching:</p>
        <?php include (TEMPLATEPATH . "/searchform.php"); ?>

        <?php endif; ?>
    </div>
    <!-- end content -->

    <?php get_sidebar(); ?>

    <div style="clear: both;">&nbsp;</div>

<?php get_footer(); ?>
