<?php
get_header('pages');
?>


    <h1 class="text-white text-center"><?php echo the_title(); ?></h1>
    <section id="project-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>