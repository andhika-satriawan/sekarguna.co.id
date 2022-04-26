<?php get_header('page'); ?>

<div class="page-archive-jobs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="box-jobs">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <a target="_blank" href="<?= get_home_url(); ?>/apply-job?title=<?php the_title(); ?>">Apply Now</a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>