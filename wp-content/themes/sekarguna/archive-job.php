<?php get_header('page'); ?>

<div class="page-archive-jobs">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6">
                        <div class="box-jobs">
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                            <a target="_blank" href="<?= the_permalink(); ?>">See Details</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>