<?php get_header(); ?>

<main id="single">
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
</main>

<?php get_footer(); ?>