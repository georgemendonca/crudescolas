<?php
/*
Plugin Name: GowpCRUDEscolas
Description: Exemplo didático de contrução de plugins em WordPress
Version: 1.0
Author: Gerge Mendonça (http://www.georgemendonca.com.br)
Organização: http://gowordpress.org/
*/

// Itens do menu
add_action('admin_menu','gowp_crudescolas_modifymenu');
function gowp_crudescolas_modifymenu()
{	
	// Item principal do menu
	add_menu_page(
        'Escolas',                 // Título da página
        'Escolas',                 // Título do menu
        'manage_options',          // Recursos
        'gowp_crudescolas_listar', // Slug do menu
        'gowp_crudescolas_listar'  // Função
	);
	
	// Submenu
	add_submenu_page(
        'gowp_crudescolas_listar', // parent slug
        'Adicionar',               // Título da página
        'Adicionar Escola',        // Título do menu
        'manage_options',          // Recursos
        'gowp_crudescolas_criar',  // Slug do menu
        'gowp_crudescolas_criar'   // Função
    );
	
	// Este submenu está escondido (HIDDEN - null), no entanto, é preciso adicioná-lo de qualquer maneira.
	add_submenu_page(
        null,                      //parent slug
        'Atualizar',               // Título da página
        'Atualizar Escola',        // Título do menu
        'manage_options',          // Recursos
        'gowp_crudescolas_atualizar', // Slug do menu
        'gowp_crudescolas_atualizar'  // Função
    );
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'escola-listar.php');
require_once(ROOTDIR . 'estola-criar.php');
require_once(ROOTDIR . 'escola-atualizar.php');