<?php get_header(); ?>

    <header>Welcome</header>

    <div class='content row'>
        <div class="col-md-9 mt-md-0 mt-3">
            <?php include('postList.php'); ?>
        </div>

        <div class="col-md-3 mt-md-0 mt-3">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>