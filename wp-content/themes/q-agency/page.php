<?php
get_header();
?>

    <div class="container">
        <h1><?php echo the_title(); ?></h1>
        <section id="content">
            <?php echo the_content(); ?>
        </section>
    </div>
<?php
get_footer(); ?>