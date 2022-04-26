<?php /* Template Name: Form Apply */ ?>

<?php get_header('page'); ?>

<?php
$title = $_GET['title'];
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="" method="POST" id="form-apply">
                <div class="form-group">
                    <label for="title">Title :</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $title; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="additional information for the company"></textarea>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Resume</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <br>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>