<?php
// Habilitar suporte a thumbnails nos posts
add_theme_support('post-thumbnails');

// Remover a barra de administração
add_filter('show_admin_bar', '__return_false');

function registrar_post_type_produto_destaque() {
    $labels = array(
        'name'               => 'Produtos Destaque',
        'singular_name'      => 'Produto Destaque',
        'add_new'            => 'Adicionar Novo Destaque',
        'add_new_item'       => 'Adicionar Novo Produto Destaque',
        'edit_item'          => 'Editar Produto Destaque',
        'new_item'           => 'Novo Produto Destaque',
        'view_item'          => 'Visualizar Produto Destaque',
        'search_items'       => 'Buscar Produtos Destaque',
        'not_found'          => 'Nenhum produto Destaque encontrado',
        'not_found_in_trash' => 'Nenhum produto Destaque encontrado na lixeira',
        'parent_item_colon'  => '',
        'menu_name'          => 'Produtos Destaque'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'produto-destaque' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cart',
    );

    register_post_type( 'produto-destaque', $args );

    $labels_taxonomia = array(
        'name'              => 'Categorias de Produto Destaque',
        'singular_name'     => 'Categoria de Produto Destaque',
        'search_items'      => 'Buscar Categorias de Destaque',
        'all_items'         => 'Todas as Categorias de Destaque',
        'parent_item'       => 'Categoria Pai',
        'parent_item_colon' => 'Categoria Pai:',
        'edit_item'         => 'Editar Categoria de Destaque',
        'update_item'       => 'Atualizar Categoria de Destaque',
        'add_new_item'      => 'Adicionar Nova Categoria de Destaque',
        'new_item_name'     => 'Nome da Nova Categoria de Destaque',
        'menu_name'         => 'Categorias de Destaque'
    );

    $args_taxonomia = array(
        'labels'              => $labels_taxonomia,
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_nav_menus'   => true,
        'show_tagcloud'       => false,
        'rewrite'             => array( 'slug' => 'categoria-produto' )
    );

    register_taxonomy( 'categoria-produto', 'produto-destaque', $args_taxonomia );
}
add_action( 'init', 'registrar_post_type_produto_destaque' );

function registrar_post_type_usado() {
    $labels = array(
        'name'               => 'Usados',
        'singular_name'      => 'Usado',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Produto',
        'edit_item'          => 'Editar Usado',
        'new_item'           => 'Novo Usado',
        'view_item'          => 'Visualizar Usado',
        'search_items'       => 'Buscar Usados',
        'not_found'          => 'Nenhum produto usado encontrado',
        'not_found_in_trash' => 'Nenhum produto usado encontrado na lixeira',
        'parent_item_colon'  => '',
        'menu_name'          => 'Usados'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'usado' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cart',
    );

    register_post_type( 'usado', $args );

    $labels_taxonomia = array(
        'name'              => 'Categorias de Usado',
        'singular_name'     => 'Categoria de Usado',
        'search_items'      => 'Buscar Categorias',
        'all_items'         => 'Todas as Categorias',
        'parent_item'       => 'Categoria Pai',
        'parent_item_colon' => 'Categoria Pai:',
        'edit_item'         => 'Editar Categoria',
        'update_item'       => 'Atualizar Categoria',
        'add_new_item'      => 'Adicionar Nova Categoria',
        'new_item_name'     => 'Nome da Nova Categoria',
        'menu_name'         => 'Categorias'
    );

    $args_taxonomia = array(
        'labels'              => $labels_taxonomia,
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_nav_menus'   => true,
        'show_tagcloud'       => false,
        'rewrite'             => array( 'slug' => 'usado' )
    );

    register_taxonomy( 'categoria-usado', 'usado', $args_taxonomia );
}
add_action( 'init', 'registrar_post_type_usado' );
 
function registrar_post_type_acessorio_guindauto() {
    $labels = array(
        'name'               => 'Acessorios Guindauto',
        'singular_name'      => 'Acessorio Guindauto',
        'add_new'            => 'Adicionar Novo Acessorio',
        'add_new_item'       => 'Adicionar Novo Acessorio',
        'edit_item'          => 'Editar Acessorio',
        'new_item'           => 'Novo Acessorio',
        'view_item'          => 'Visualizar Acessorio',
        'search_items'       => 'Buscar Acessorio',
        'not_found'          => 'Nenhum Acessorio encontrado',
        'not_found_in_trash' => 'Nenhum Acessorio encontrado na lixeira',
        'parent_item_colon'  => '',
        'menu_name'          => 'Acessorios Guindauto'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'acessorio' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cart',
    );

    register_post_type( 'acessorio-guindauto', $args );

    $labels_taxonomia = array(
        'name'              => 'Categorias de Acessorio Guindauto',
        'singular_name'     => 'Categoria de Acessorio Guindauto',
        'search_items'      => 'Buscar Categorias de Acessorio Guindauto',
        'all_items'         => 'Todas as Categorias de Acessorio Guindauto',
        'parent_item'       => 'Categoria Pai',
        'parent_item_colon' => 'Categoria Pai:',
        'edit_item'         => 'Editar Categoria de Acessorio Guindauto',
        'update_item'       => 'Atualizar Categoria de Acessorio Guindauto',
        'add_new_item'      => 'Adicionar Nova Categoria de Acessorio Guindauto',
        'new_item_name'     => 'Nome da Nova Categoria de Acessorio Guindauto',
        'menu_name'         => 'Categorias de Acessorio Guindauto'
    );

    $args_taxonomia = array(
        'labels'              => $labels_taxonomia,
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_nav_menus'   => true,
        'show_tagcloud'       => false,
        'rewrite'             => array( 'slug' => 'acessorio-guindauto' )
    );

    register_taxonomy( 'categoria-guindauto', 'acessorio-guindauto', $args_taxonomia );
}
add_action( 'init', 'registrar_post_type_acessorio_guindauto' );
 
function registrar_post_type_acessorio() {
    $labels = array(
        'name'               => 'Acessorios',
        'singular_name'      => 'Acessorio',
        'add_new'            => 'Adicionar Novo Acessorio',
        'add_new_item'       => 'Adicionar Novo Acessorio',
        'edit_item'          => 'Editar Acessorio',
        'new_item'           => 'Novo Acessorio',
        'view_item'          => 'Visualizar Acessorio',
        'search_items'       => 'Buscar Acessorio',
        'not_found'          => 'Nenhum Acessorio encontrado',
        'not_found_in_trash' => 'Nenhum Acessorio encontrado na lixeira',
        'parent_item_colon'  => '',
        'menu_name'          => 'Acessorios'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'acessorio' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cart',
    );

    register_post_type( 'acessorio', $args );

    $labels_taxonomia = array(
        'name'              => 'Categorias de Acessorio',
        'singular_name'     => 'Categoria de Acessorio',
        'search_items'      => 'Buscar Categorias de Acessorio',
        'all_items'         => 'Todas as Categorias de Acessorio',
        'parent_item'       => 'Categoria Pai',
        'parent_item_colon' => 'Categoria Pai:',
        'edit_item'         => 'Editar Categoria de Acessorio',
        'update_item'       => 'Atualizar Categoria de Acessorio',
        'add_new_item'      => 'Adicionar Nova Categoria de Acessorio',
        'new_item_name'     => 'Nome da Nova Categoria de Acessorio',
        'menu_name'         => 'Categorias de Acessorio'
    );

    $args_taxonomia = array(
        'labels'              => $labels_taxonomia,
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_nav_menus'   => true,
        'show_tagcloud'       => false,
        'rewrite'             => array( 'slug' => 'acessorio' )
    );

    register_taxonomy( 'categoria-acessorio', 'acessorio', $args_taxonomia );
}
add_action( 'init', 'registrar_post_type_acessorio' );
 
 ?>
