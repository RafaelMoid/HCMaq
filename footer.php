<footer id="footer">
  <div class="footer-top">
    <div class="left">
      <div class="img-footer-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Marca Web Cabeçalho 1.png" alt="">
      </div>
      <p>A HCMAQ é uma empresa que tem como missão atender os seus clientes com qualidade, rapidez
        e eficiência, apresentando o que há de melhor em produtos e serviços relacionados a guindauto
        e acessórios.</p>
      <p class="cut-mob-footer">Para cumprir essa missão, a empresa se dedica a oferecer soluções personalizadas
        e inovadoras, que atendam às necessidades específicas de cada cliente. </p>
    </div>
    <div class="middle">
      <div class="footer-icons">
        <div class="icon-wrapper">
          <div class="icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-localizacao.png" alt="">
          </div>
          <div class="icon-text">
            <h4>Endereço</h4>
            <a href="https://goo.gl/maps/2DJUurHwiUaumbTJ7" target="_blank">Avenida Rio Capibaribe</br>
              Lot Integração de Muribeca, 29 Marcos Freire, Recife - PE</a>
          </div>
        </div>
        <div class="icon-wrapper">
          <div class="icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-telefone.png" alt="">
          </div>
          <div class="icon-text">
            <h4>Contato</h4>
            <a href="tel:+5581991319496">(81) 99131 9496</a>
            <a href="mailto:User0123@example.com">User0123@example.com</a>
          </div>
        </div>
      </div>
    </div>
    <div class="right">
      <h4>Postagens Recentes</h4>
      <div class="footer-blog-posts">
        <?php
        $args = array(
          'post_type' => 'post', // Defina o tipo de postagem que você deseja recuperar
          'posts_per_page' => 2 // -1 para obter todos os posts ou defina um número específico
        );

        $posts_query = new WP_Query($args);

        if ($posts_query->have_posts()) {
          while ($posts_query->have_posts()) {
            $posts_query->the_post();
        ?>
            <a href="<?php echo get_post_permalink() ?>">
              <div class="img-wrapper" style="background-image: url('<?php echo get_field('imagem_do_post'); ?>')"></div>
              <p class="resumo-post"><?php echo get_field('resumo_footer'); ?></p>
            </a>
        <?php
          }
        } else {
          echo 'Nenhum post encontrado.';
        }

        wp_reset_postdata();
        ?>


      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>MANAD, 2023 TODOS OS DIREITOS RESERVADOS.</p>
  </div>
</footer>
<!-- Script para esconder o menu na versão mobile deitada -->
<script>
  var prevScrollPos = window.pageYOffset;
  var menu = document.getElementById("header");

  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (window.matchMedia("(max-width: 1000px) and (max-height: 600px)").matches) {
      if (prevScrollPos > currentScrollPos) {
        menu.classList.remove("hidden");
      } else {
        menu.classList.add("hidden");
      }
    }

    prevScrollPos = currentScrollPos;
  }
</script>
<!-- Script para esconder o menu na versão mobile deitada -->
</body>

</html>