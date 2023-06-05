<?php
/*
  Template Name: Produtos 
*/
?>

<?php get_header(); ?>

<main id="produtos">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/produtos-banner-1.png);">
                <div class="slide1-content">
                    <h2>
                        ELEVE SUA <br />
                        EMPRESA <br />
                        AO PRÓXIMO <br />
                        NÍVEL <br />
                        COM A HCMAQ. <br />
                    </h2>
                    <p>
                        Especialista em guindautos
                    </p>
                    <div class="blue-little-box"></div>
                </div>
            </div>
            <!-- <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div> -->
        </div>
    </div>
    <section class="third-content">
        <h5>Conheça nossas opções</h5>
        <h3>Guindautos Semi-Novos</h3>
        <div class="lines">
            <div class="line1"></div>
            <div class="line2"></div>
        </div>
        <p>A HCMAQ tem uma seleção de peças Semi-Novas para todas as suas necessidades.</p>
        <!-- Grid com produtos Usados-->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper-produtos-carrossel">
                    <?php
                    $args = array(
                        'post_type'      => 'usado',
                        'posts_per_page' => -1
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                    ?>

                            <div class="produto">
                                <div class="hover-produto">
                                    <h2><?php echo get_field('nome') ?></h2>
                                    <h3><?php echo get_field('resumo_thumb') ?></h3>
                                    <a href="<?php echo get_permalink(); ?>">Saiba mais</a>
                                </div>
                                <img src="<?php echo get_field('thumbnail_image') ?>" alt="<?php echo get_field('titulo_thumb') ?>">
                            </div>

                    <?php
                        }
                    }

                    wp_reset_postdata();
                    ?>
                </div>
                <!-- <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div> -->
            </div>
        </div>
        <!-- Grid com produtos Usados-->
    </section>
    <!-- Grid com Acessorios para Guindauto -->
    <section class="acessorios-guindauto">
        <h5>Conheça nossas opções</h5>
        <h3>Guindautos Semi-Novos</h3>
        <div class="lines">
            <div class="line1"></div>
            <div class="line2"></div>
        </div>
        <div class="acessorios-wrapper">
            <?php
            $args = array(
                'post_type'      => 'acessorio-guindauto',
                'posts_per_page' => -1
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>

                    <div class="produto">
                        <div class="hover-produto">
                            <h2><?php echo get_field('nome') ?></h2>
                            <h4><?php echo get_field('resumo_thumb') ?></h3>
                            <a href="<?php echo get_permalink(); ?>">Saiba mais</a>
                        </div>
                        <img src="<?php echo get_field('thumbnail_image') ?>" alt="">
                    </div>

            <?php
                }
            }

            wp_reset_postdata();
            ?>
        </div>
    </section>
    <!-- Grid com Acessorios para Guindauto -->
    <!-- Grid com Acessorios para diversos -->
    <section class="acessorios-guindauto">
        <h5>Conheça nossas opções</h5>
        <h3>Guindautos Semi-Novos</h3>
        <div class="lines">
            <div class="line1"></div>
            <div class="line2"></div>
        </div>
        <div class="acessorios-wrapper">
            <?php
            $args = array(
                'post_type'      => 'acessorio',
                'posts_per_page' => -1
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>

                    <div class="produto">
                        <div class="hover-produto">
                            <h2><?php echo get_field('nome', $post->ID) ?></h2>
                            <h4><?php echo get_field('resumo_thumb', $post->ID) ?></h4>
                            <a href="<?php echo get_permalink(); ?>">Saiba mais</a>
                        </div>
                        <img src="<?php echo get_field('thumbnail_image', $post->ID) ?>" alt="<?php echo get_field('titulo_thumb') ?>">
                    </div>

            <?php
                }
            }

            wp_reset_postdata();
            ?>
        </div>
    </section>
    <!-- Grid com Acessorios diversos -->
</main>

<?php get_footer(); ?>