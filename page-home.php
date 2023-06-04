<?php
/*
  Template Name: Home 
*/
?>

<?php get_header(); ?>

<main id="main-home">
  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner01.jpg);">
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
  <!-- Slider main container -->
  <!-- Segunda seção -->
  <section class="second-content">
    <div class="blue-box-wrapper">
      <div class="second-image-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Rectangle.png" alt="">
      </div>
      <div>
        <h4>Especialista em Guindautos</h4>
        <h3>Excelência e Ética</h3>
        <p>A HCMAQ nasceu em 2007 pela mãos de Hugo Chaves,<br />
          que se especializou em guindautos a partir da experiência com<br />
          o tio, e que
          hoje representa a TKA Kranes, uma das melhores<br />
          e mais conceituadas indústrias internacionalmente.<br />
          Um empresa que está presente em mais de 20 países no mundo,<br />
          com uma linha completa
          de Guindautos e Acessórios.</p>
        <!-- Adicionar aqui o Link para o sobre? -->
        <a href="">Saiba mais</a>
        <!-- Adicionar aqui o Link para o sobre? -->
      </div>
  </section>
  <!-- Segunda seção -->
  <!-- Terceira seção -->
  <section class="third-content">
    <h5>Conheça nossos produtos</h5>
    <h3>Guindautos e Acessórios</h3>
    <div class="lines">
      <div class="line1"></div>
      <div class="line2"></div>
    </div>
    <p>Somos representantes das empresas TKA, Bristol, Ter Brasil, Casappa, Qualimax, Alfatronic, Rodobras, entre outras.<br />
      Além de máquinas e produtos seminovos.</p>
    <!-- Grid com produtos -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide swiper-produtos-carrossel">
          <?php
          $args = array(
            'post_type'      => 'produto',
            'posts_per_page' => 3
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
    <!-- Grid com produtos -->
  </section>
  <!-- Terceira seção -->
  <!-- Divisão fale conosco -->
  <div class="fale-conosco-div">
    <h3>Fale conosco a qualquer momento</h3>
    <a href="">Clique Aqui</a>
  </div>
  <!-- Divisão fale conosco -->
  <!-- Seção de diferenciais -->
  <section class="diferenciais">
    <?php
    // Verifica se o repeater "diferenciais" tem linhas
    if (have_rows('diferenciais')) {
      // Loop através das linhas do repeater "diferenciais"
      while (have_rows('diferenciais')) {
        the_row();
    ?>

        <div class="diferencial">
          <img src="<?php echo get_sub_field('foto') ?>">
          <div class="dif-wrapper">
            <h2><?php echo get_sub_field('titulo'); ?></h2>
            <h3><?php echo get_sub_field('subtitulo'); ?></h3>
            <div class="linha-dif"></div>
            <p><?php echo get_sub_field('resumo'); ?></p>
            <a href="">Saiba mais</a>
          </div>
        </div>

    <?php
      }
    }
    ?>
  </section>
  <!-- Seção de diferenciais -->
  <!-- Seção parceiro -->
  <section class="partners">
    <h2>Nossos Parceiros</h2>
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-TKA.png" alt=""></div>
          <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-Bristol.png" alt=""></div>
          <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-Ter.png" alt=""></div>
          <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-Casappa.png" alt=""></div>
          <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-Qualimax.png" alt=""></div>
          <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-rodobras.png" alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Seção parceiro -->
  <!-- Seção Depoimentos -->
  <section class="depoimentos">
    <h4>Depoimentos</h4>
    <h3>O que estão falando de nós</h3>
    <div class="line-depo">
      <div></div>
      <div></div>
    </div>
    <div class="display-depo">
      <div class="depo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-HC.png');">
        <div class="texto-depo">
          <div class="little-boxes">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="nome-depo">
          <span>EDDIE ADKINS</span>
          <p class="role">Owner / President</p>
        </div>
      </div>
      <div class="depo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-HC.png');">
        <div class="texto-depo">
          <div class="little-boxes">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="nome-depo">
          <span>PHILIP KARSON</span>
          <p class="role">Architect</p>
        </div>
      </div>
      <div class="depo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-HC.png');">
        <div class="texto-depo">
          <div class="little-boxes">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="nome-depo">
          <span>JONATHAN CART</span>
          <p class="role">Executive Director</p>
        </div>
      </div>
      <div class="depo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-HC.png');">
        <div class="texto-depo">
          <div class="little-boxes">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="nome-depo">
          <span>KELLI ORLANDO</span>
          <p class="role">Account Manager</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Seção Depoimentos -->
  <!-- Seção Blog -->
  <section class="blog">
    <h4>Nosso Blog</h4>
    <h3>Notícias e Dicas Quinzenais</h3>
    <div class="line-depo">
      <div></div>
      <div></div>
    </div>
    <div class="display-blog-posts">
      <?php
      $args = array(
        'post_type' => 'post', // Defina o tipo de postagem que você deseja recuperar
        'posts_per_page' => -1 // -1 para obter todos os posts ou defina um número específico
      );

      $posts_query = new WP_Query($args);

      if ($posts_query->have_posts()) {
        while ($posts_query->have_posts()) {
          $posts_query->the_post();
      ?>
          <div>
            <img src="<?php echo get_field('imagem_do_post'); ?>" alt="">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="date-box">
              <span class="dia"><?php echo get_field('dia'); ?></span>
              <span class="mes"><?php echo get_field('mes'); ?></span>
            </div>
            <p class="resumo-post"><?php echo get_field('resumo_do_post'); ?></p>
            <a href="<?php echo get_post_permalink() ?>">Saiba mais</a>
          </div>
      <?php
        }
      } else {
        echo 'Nenhum post encontrado.';
      }

      wp_reset_postdata();
      ?>


    </div>
  </section>
  <!-- Seção Blog -->
</main>

<?php get_footer(); ?>