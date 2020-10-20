<?php get_header(); ?>

<div class="content">
    <?php if (have_rows('components')) :
        while (have_rows('components')) : the_row();
            get_template_part('components/' . get_row_layout());
        endwhile;
    else : ?>
        <div class="container">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>