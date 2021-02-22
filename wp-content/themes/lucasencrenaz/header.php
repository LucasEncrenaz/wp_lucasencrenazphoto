<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php get_site_icon_url(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<header class="header">
    <?php 
    $variable = get_field('menu', 'option');

    if( $variable ) {
        echo '<ul class="menuHeader">';
        foreach( $variable as $row ) {
            $text = $row['texte'];
            $link = $row['lien']; ?>
            <li class="item">
                <a href="<?php echo $link; ?>"><?php echo $text; ?></a>
            </li>
        <?php }
        echo '</ul>';
    }
    ?>
</header>
<?php 
    $variable = get_field('image_background', 'option');
?>
<body <?php body_class(); ?> style="background-image: url(<?php echo $variable['url']; ?>)">
    
    <?php wp_body_open(); ?>