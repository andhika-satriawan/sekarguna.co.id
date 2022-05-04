<?php /* Template Name: Jobs */ ?>

<?php get_header('page'); ?>

<div class="container">
    <div class="content-jobs">
        <h1>Jobs PT. Sekarguna Medika</h1>
        <?= do_shortcode('[jobpost]'); ?>
    </div>
</div>

<?php get_footer(); ?>