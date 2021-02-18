<?php
get_header();

$image = get_field('photo');
$listSocialNetwork = get_field('liste_reseaux_sociaux');
$iconMail = get_field('mail');
$adressMail = get_field('adresse_mail');

?>

<div id="primary" class="site-content">
  <div id="content" role="main" class="homePage">
    <div class="blockDescription">
      <span class="avatar">
        <?php if( !empty( $image ) ): ?>
            <img class="image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </span>
      <h1 class="title"><?php the_field('texte_1'); ?></h1>
      <h2 class="subTitle"><?php the_field('texte_2'); ?></h2>
      <?php if( $listSocialNetwork ) {
        echo '<ul class="listSocialNetwork">';
        foreach( $listSocialNetwork as $row ) {
            $icon = $row['icon'];
            $link = $row['url']; ?>
            <li class="item">
                <a href="<?php echo $link; ?>">
                <i class="<?php echo $icon; ?>"></i>
                </a>
            </li>
        <?php } ?>
        <li class="item">
            <a href="mailto:<?php echo $adressMail; ?>">
            <i class="<?php echo $iconMail; ?>"></i>
            </a>
        </li>
        <?php echo '</ul>';
    }
    ?>
    </div>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content() ?>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>