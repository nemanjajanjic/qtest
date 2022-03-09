<?php
get_header();
?>

<?php
if (have_posts()):
    echo '<div class="container">';
    while (have_posts()):
        echo '<div class="row">';
        the_post(); ?>
        <div class="post-wrapper">
            <?php echo the_title(); ?>
        </div>

    <?php endwhile;
    echo '</div>';
    echo '</div>';
endif; ?>

<?php
get_footer(); ?>