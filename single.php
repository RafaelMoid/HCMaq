<?php get_header(); ?>

<main id="single">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();

      // Verificar se o post é do tipo "post"
      if (get_post_type() === 'post') {
  ?>
        <div class="header-single">
          <div class="blue-box"></div>
          <h1><?php the_title(); ?></h1>
          <div class="post-boxes">
            <div class="box1"></div>
            <div class="box2"></div>
          </div>
          <p>Recife, PE - <?php echo get_the_date(); ?></p>
        </div>
        <div id="post-style">
          <div class="left-content-post">
            <img src="<?php echo get_field('imagem_do_post'); ?>" alt="">
          </div>
          <div class="right-content-post">
            <!-- <div class="date-box">
              <span class="dia"><?php echo get_field('dia'); ?></span>
              <span class="mes"><?php echo get_field('mes'); ?></span>
            </div> -->
            <p class="resumo-post"><?php echo get_field('conteudo_do_post'); ?></p>
          </div>
        </div>
      <?php
      } else {
      ?>
        <div class="header-single">
          <h1><?php the_title(); ?></h1>
        </div>
        <section class="conteudo-single">
          <div class="left-single">
            <img src="<?php echo get_field('thumbnail_image') ?>" alt="">
          </div>
          <div class="right-single">
            <h2>Descrição:</h2>
            <p id="desc-prod"><?php echo get_field('descricao_detalhada_produto') ?></p>
            <h2>Características:</h2>
            <?php if (have_rows('lista_de_caracteristicas')) : ?>
              <ul class="slides">
                <?php while (have_rows('lista_de_caracteristicas')) : the_row();
                ?>
                  <li>
                    <p><?php the_sub_field('item_da_lista'); ?></p>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
            <a href="https://api.whatsapp.com/send?phone=5581991319496"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/WhatsappBranco.png" alt="">Fale com um dos nossos Colaboradores</a>
          </div>
        </section>
  <?php
      }
    }
  }
  ?>
  <div class="line-bottom"></div>
</main>

<?php get_footer(); ?>