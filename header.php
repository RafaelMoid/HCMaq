<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta Tags para Open Graph  -->
    <!-- <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/fiabesa-og-image.png" />
	<meta property="og:image:secure_url" content="<?php echo get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/fiabesa-og-image.png" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="519" />
	<meta property="og:image:height" content="260" />
	<meta property="og:image:alt" content="Fiabesa tecnologia em ráfia" /> -->
    <!-- Meta Tags para Open Graph  -->

    <title>HC Maq</title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-16x16.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-jUGGJhxYKNS9Dk8vtUHKfP36uE6JKyV6KlR10dZV7bZzoe3Zq9r/AzQ5PY5H2mp5lKlJ/rFTrwWf7ZpZOe0m0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Header Wordpress -->
    <?php wp_head(); ?>
    <!-- Fecha Header Wordpress -->
    <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>
</head>

<body>

    <header id="header">
        <div class="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-HC.png" alt="">
        </div>
        <nav>
            <ul>
                <li <?php if (is_page('')) {
                        echo 'class="active-header"';
                    } else {} ?>><a href="">Home</a></li>
                <li <?php if (is_page('historico')) {
                        echo 'class="active-header"';
                    } else {} ?>><a href="">Histórico</a></li>
                <li <?php if (is_page('produtos')) {
                        echo 'class="active-header"';
                    } else {} ?>><a href="">Produtos</a></li>
                <li <?php if (is_page('parceiros')) {
                        echo 'class="active-header"';
                    } else { } ?>><a href="">Parceiros</a></li>
                <li <?php if (is_page('blog')) {
                        echo 'class="active-header"';
                    } else {} ?>><a href="">Blog</a></li>
                <li <?php if (is_page('contato')) {
                        echo 'class="active-header"';
                    } else {} ?>><a href="">Contato</a></li>
            </ul>

        </nav>
    </header>