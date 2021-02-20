<?php
get_header();

$image = get_field('photo');
$listSocialNetwork = get_field('liste_reseaux_sociaux');
$iconMail = get_field('mail');
$adressMail = get_field('adresse_mail');
$images1 = get_field('colonne_1');
$images2 = get_field('colonne_2');
$images3 = get_field('colonne_3');

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
    <div class="galery">
      <?php 
      if( $images1 ): ?>
          <ul class="list_galery">
              <?php foreach( $images1 as $image1 ): ?>
                  <li class="item_galery">
                      <a class="link_galery" href="<?php echo esc_url($image1['url']); ?>">
                          <img class="img_galery" src="<?php echo esc_url($image1['sizes']['large']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
                      </a>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>
  
      <?php 
      if( $images2 ): ?>
          <ul class="list_galery">
              <?php foreach( $images2 as $image2 ): ?>
                  <li class="item_galery">
                      <a class="link_galery" href="<?php echo esc_url($image2['url']); ?>">
                          <img class="img_galery" src="<?php echo esc_url($image2['sizes']['large']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
                      </a>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>

      <?php 
      if( $images3 ): ?>
          <ul class="list_galery">
              <?php foreach( $images3 as $image3 ): ?>
                  <li class="item_galery">
                      <a class="link_galery" href="<?php echo esc_url($image3['url']); ?>">
                          <img class="img_galery" src="<?php echo esc_url($image3['sizes']['large']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
                      </a>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>