<?php get_header('page'); ?>

<div class="container">
    <?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach ($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ($the_query->have_posts()) :
    ?>
        <!-- the loop -->

        <ul class="box-content-search">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                        <div class="row">
                            <div class="col p-4"><?php the_post_thumbnail(); ?></div>
                            <div class="col p-4"><?php the_excerpt(); ?></div>
                        </div>


                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
        <!-- end of the loop -->

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>