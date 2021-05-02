<div class="page-header">

  
  <?php if ( have_rows( 'page_header' ) ) : ?>
    <?php while ( have_rows( 'page_header' ) ) :
      the_row(); ?>
      
      <div class="header-content">
        <h1>
          <span>
            <?php if ( $titre_du_haut = get_sub_field( 'titre_du_haut' ) ) : ?>
              <?php echo esc_html( $titre_du_haut ); ?>
            <?php endif; ?>
          </span>
          <span>
            <?php if ( $titre_du_bas = get_sub_field( 'titre_du_bas' ) ) : ?>
              <?php echo esc_html( $titre_du_bas ); ?>
            <?php endif; ?>
          </span>
        </h1>
        <div class="header-text">
          <?php if ( $texte_header = get_sub_field( 'texte_header' ) ) : ?>
            <?php echo $texte_header; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="header-image">
        <?php
        $image_header = get_sub_field( 'image_header' );
        if ( $image_header ) : ?>
          <img src="<?php echo esc_url( $image_header['url'] ); ?>" alt="<?php echo esc_attr( $image_header['alt'] ); ?>" />
        <?php endif; ?>
      </div>
      

      

      

      

    <?php endwhile; ?>
  <?php endif; ?>

</div>