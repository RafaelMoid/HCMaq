<?php
// Habilitar suporte a thumbnails nos posts
add_theme_support('post-thumbnails');

// Remover a barra de administração
add_filter('show_admin_bar', '__return_false');

function registrar_post_type_produto() {
    $labels = array(
        'name'               => 'Produtos',
        'singular_name'      => 'Produto',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Produto',
        'edit_item'          => 'Editar Produto',
        'new_item'           => 'Novo Produto',
        'view_item'          => 'Visualizar Produto',
        'search_items'       => 'Buscar Produtos',
        'not_found'          => 'Nenhum produto encontrado',
        'not_found_in_trash' => 'Nenhum produto encontrado na lixeira',
        'parent_item_colon'  => '',
        'menu_name'          => 'Produtos'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'produto' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cart',
    );

    register_post_type( 'produto', $args );

    $labels_taxonomia = array(
        'name'              => 'Categorias de Produto',
        'singular_name'     => 'Categoria de Produto',
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
        'rewrite'             => array( 'slug' => 'categoria-produto' )
    );

    register_taxonomy( 'categoria-produto', 'produto', $args_taxonomia );
}
add_action( 'init', 'registrar_post_type_produto' );

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
        'rewrite'             => array( 'slug' => 'categoria-produto' )
    );

    register_taxonomy( 'categoria-usado', 'usado', $args_taxonomia );
}
add_action( 'init', 'registrar_post_type_usado' );
 
 
 ?>
