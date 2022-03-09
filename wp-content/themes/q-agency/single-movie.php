<?php
get_header('pages');
?>


    <h1 class="text-center"><?php echo the_title(); ?></h1>
    <section id="movie-info">
        <div class="container">
            <?php
            $movie_title = get_post_meta(get_the_ID(), 'movie_title', true);
            if (!empty($movie_title)) {
                ?>
                <div class="movie-content">
                    <h2 style='text-align:center;'><?php echo $movie_title; ?></h2>
                </div>
            <?php } ?>
            <div class="col-md-12">
                <?php echo the_content(); ?>
            </div>
        </div>
    </section>

<?php
get_footer();
?>