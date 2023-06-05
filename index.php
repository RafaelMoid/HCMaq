<?php get_header(); ?>

<!-- Aqui você pode adicionar o código HTML e CSS para a aparência da página -->
<main id="index">
    <?php
    // Loop padrão do WordPress para exibir o conteúdo do post
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>

            <!-- Aqui você pode exibir o conteúdo do post -->
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>

    <?php
        }
    } ?>
</main>


<?php get_footer(); ?>