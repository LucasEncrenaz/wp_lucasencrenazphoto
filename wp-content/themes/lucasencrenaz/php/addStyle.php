<?php

wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'style',
    get_template_directory_uri().'/style.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'header',
    get_template_directory_uri().'/assets/css/header.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'frontPage',
    get_template_directory_uri().'/assets/css/frontPage.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'gallery',
    get_template_directory_uri().'/assets/css/gallery.css',
    array(),
    '1.0',
);