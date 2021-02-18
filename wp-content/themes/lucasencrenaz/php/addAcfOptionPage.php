<?php

if( function_exists('acf_add_options_page') ) {

acf_add_options_page(array(
    'page_title'    => 'Options',
    'menu_title'    => 'Options',
    'menu_slug'     => 'options-generales',
    'capability'    => 'edit_posts',
    'redirect'      => true
));

acf_add_options_sub_page(array(
    'page_title'    => 'Options d\'Entête',
    'menu_title'    => 'Entête',
    'parent_slug'   => 'options-generales',
));

acf_add_options_sub_page(array(
    'page_title'    => 'Options de Pied de Page',
    'menu_title'    => 'Pied de page',
    'parent_slug'   => 'options-generales',
));

}