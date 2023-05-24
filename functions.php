<?php
// Habilitar suporte a thumbnails nos posts
add_theme_support('post-thumbnails');

// Remover a barra de administração
add_filter('show_admin_bar', '__return_false');
?>