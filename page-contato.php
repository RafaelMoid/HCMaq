<?php
/*
  Template Name: Contato 
*/
?>

<?php get_header(); ?>
<main id="contato">
    <div class="head">
        <h1>Fale conosco</h1>
    </div>
    <div class="content-fl">
        <div class="form-wrapper">
            <h1>Envie uma mensagem:</h1>
            <?php
            echo do_shortcode('[contact-form-7 id="122" title="Formulário de contato 1"]');
            ?>
        </div>
        <div class="contact-wrapper">
            <h4>Nossos Contatos</h4>
            <p>
                Avenida Rio Capibaribe</br>
                Lot Integração de Muribeca, 29</br>
                Marcos Freire, Recife - PE</br>
                CEP 54365-615 </br></br>
                Telefone: (81) 99131 9496
            </p>
            <a href="https://api.whatsapp.com/send?phone=5581991319496"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/WhatsappBranco.png" alt="">Fale com um dos nossos Colaboradores</a>
        </div>
    </div>
    <div class="map-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.474348817139!2d-34.97860752414002!3d-8.15486978169392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aae26b9825f95d%3A0x868d9c4bb69d30fc!2sAv.%20Rio%20Capibaribe%20-%20Marcos%20Freire%2C%20Jaboat%C3%A3o%20dos%20Guararapes%20-%20PE%2C%2054365-030!5e0!3m2!1spt-BR!2sbr!4v1686219335855!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</main>
<?php get_footer(); ?>