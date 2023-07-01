<?php
/*
  Template Name: Parceiros 
*/
?>

<?php get_header(); ?>
<main id="parceiros">
    <div class="intro-parceiros" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Parceiros1.png);">
        <h1>Representações</h1>
        <div class="boxes-parceiros">
            <div class="box1"></div>
            <div class="box2"></div>
        </div>
        <p>
            A HCMAQ representa um grupo diversificado de empresas inovadoras em diversos setores.
            Com um compromisso compartilhado com a excelência e a qualidade, essas empresas estão
            impulsionando avanços significativos em suas respectivas indústrias. Com expertise
            em manufatura, tecnologia, engenharia e muito mais.
        </p>
    </div>
    <?php

    // Check rows existexists.
    if (have_rows('parceiros')) :

        // Loop through rows.
        while (have_rows('parceiros')) : the_row();

            // Load sub field value.
    ?>
            <div class="parceiro">
                <div class="left-parceiro">
                    <img src="<?php echo get_sub_field('imagem_parceiro'); ?>" alt="">
                </div>
                <div class="right-parceiro">
                    <img src="<?php echo get_sub_field('logo_parceiro'); ?>" alt="">
                    <div class="boxes-parceiros">
                        <div class="box1"></div>
                        <div class="box2"></div>
                    </div>
                    <p><?php echo get_sub_field('texto_parceiro'); ?></p>
                </div>
            </div>
    <?php
        // End loop.
        endwhile;

    // No value.
    else :
    // Do something...
    endif;
    ?>


</main>
<?php get_footer(); ?>