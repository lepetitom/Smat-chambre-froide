<?php
/**
* Template Name: Template Accueil
*/

get_header(); ?>

<div class="page-template page-accueil page-<?php the_ID() ?>" id="page-template" data-page="accueil">

    <!-- 
    =================================
    HOME HEADER
    -->
    <div class="container home-header">
        <?php if ( have_rows( 'accueil_header' ) ) : ?>
            <?php while ( have_rows( 'accueil_header' ) ) :
                the_row(); ?>
                <div class="content">
                    <h1>
                        <span class="sub-title">
                            <?php if ( $soustitre = get_sub_field( 'soustitre' ) ) : ?>
                                <?php echo esc_html( $soustitre ); ?>
                            <?php endif; ?>
                        </span> <br>
                        <?php if ( $titre_principale = get_sub_field( 'titre_principale' ) ) : ?>
                            <?php echo esc_html( $titre_principale ); ?>
                        <?php endif; ?>
                    </h1>
                    <p>
                        <?php if ( $description = get_sub_field( 'description' ) ) : ?>
                            <?php echo $description; ?>
                        <?php endif; ?>
                    </p>
                </div>
                <?php
                $image = get_sub_field( 'image' );
                if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>


    <!-- 
    =================================
    HOME HEADER
    -->
    <div class="container services">
        <?php if ( have_rows( 'services' ) ) : ?>
            <?php while ( have_rows( 'services' ) ) :
                the_row(); ?>
            
                <h2>
                    <?php if ( $titre = get_sub_field( 'titre' ) ) : ?>
                        <?php echo esc_html( $titre ); ?>
                    <?php endif; ?>
                </h2>

                <div class="list-services">
                    <?php if ( have_rows( 'service' ) ) : ?>
                        <?php while ( have_rows( 'service' ) ) :
                            the_row(); ?>

                            <div class="service">

                                <?php
                                $image_service = get_sub_field( 'image_service' );
                                if ( $image_service ) : ?>
                                    <img src="<?php echo esc_url( $image_service['url'] ); ?>" alt="<?php echo esc_attr( $image_service['alt'] ); ?>" />
                                <?php endif; ?>

                                <div class="content">
                                    <h3>
                                        <?php if ( $titre_service = get_sub_field( 'titre_service' ) ) : ?>
                                            <?php echo esc_html( $titre_service ); ?>
                                        <?php endif; ?>
                                    </h3>
                                    <p>
                                        <?php if ( $description_service = get_sub_field( 'description_service' ) ) : ?>
                                            <?php echo esc_html( $description_service ); ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                        

                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>


    <!-- 
    =================================
    A PROPOS
    -->
    <div class="a-propos">
        <img src="<?php echo theme_url; ?>/assets/img/a-propos.jpg" alt="">
        <div class="container">
            <div class="content">

                <?php if ( have_rows( 'a_propos' ) ) : ?>
                    <?php while ( have_rows( 'a_propos' ) ) :
                        the_row(); ?>
                        
                        <h2>
                            <?php if ( $titre = get_sub_field( 'titre' ) ) : ?>
                                <?php echo esc_html( $titre ); ?>
                            <?php endif; ?>
                        </h2>
                                
                        <div class="description">
                                <?php if ( $description_1 = get_sub_field( 'description_1' ) ) : ?>
                                    <?php echo $description_1; ?>
                                <?php endif; ?>
        
                                <?php if ( $description_2 = get_sub_field( 'description_2' ) ) : ?>
                                    <?php echo $description_2; ?>
                                <?php endif; ?>
        
                                <div class="last-description">
                                    <?php if ( $description_3 = get_sub_field( 'description_3' ) ) : ?>
                                        <?php echo $description_3; ?>
                                    <?php endif; ?>
                                    <?php
                                    $link = get_sub_field( 'bouton' );
                                    if ( $link ) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <!-- 
    =================================
    REALISATION
    -->
    <div class="realisations">
        <?php if ( have_rows( 'realisations' ) ) : ?>
            <?php while ( have_rows( 'realisations' ) ) :
                    the_row(); ?>
    
                <div class="container"> 
                    <div class="content">
                        <h2>
                            <?php if ( $titre = get_sub_field( 'titre' ) ) : ?>
                                <?php echo esc_html( $titre ); ?>
                            <?php endif; ?>
                        </h2>
                        <?php if ( $texte = get_sub_field( 'texte' ) ) : ?>
                            <?php echo $texte; ?>
                        <?php endif; ?>
                    </div>
                </div>
    
                <div class="sliders">
                    <div class="slider">
                        <?php if ( have_rows( 'realisation_ligne_1' ) ) : ?>
                            <?php while ( have_rows( 'realisation_ligne_1' ) ) :
                                the_row(); ?>
                                <a class="item" target="_blank" href="<?php if ( $lien = get_sub_field( 'lien' ) ) : ?><?php echo esc_url( $lien ); ?><?php endif; ?>">
                                    <?php
                                    $image = get_sub_field( 'image' );
                                    if ( $image ) : ?>
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                    <?php endif; ?>
                                    <div class="hover">
                                        <p>
                                            <?php if ( $nom = get_sub_field( 'nom' ) ) : ?>
                                                <?php echo esc_html( $nom ); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'realisation_ligne_1' ) ) : ?>
                            <?php while ( have_rows( 'realisation_ligne_1' ) ) :
                                the_row(); ?>
                                <a class="item" target="_blank" href="<?php if ( $lien = get_sub_field( 'lien' ) ) : ?><?php echo esc_url( $lien ); ?><?php endif; ?>">
                                        <?php
                                        $image = get_sub_field( 'image' );
                                        if ( $image ) : ?>
                                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                        <?php endif; ?>
                                        <div class="hover">
                                            <p>
                                                <?php if ( $nom = get_sub_field( 'nom' ) ) : ?>
                                                    <?php echo esc_html( $nom ); ?>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <div class="slider">
                        <?php if ( have_rows( 'realisation_ligne_3' ) ) : ?>
                            <?php while ( have_rows( 'realisation_ligne_3' ) ) :
                                the_row(); ?>
                                <a class="item" target="_blank" href="<?php if ( $lien = get_sub_field( 'lien' ) ) : ?><?php echo esc_url( $lien ); ?><?php endif; ?>">
                                    <?php
                                    $image = get_sub_field( 'image' );
                                    if ( $image ) : ?>
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                    <?php endif; ?>
                                    <div class="hover">
                                        <p>
                                            <?php if ( $nom = get_sub_field( 'nom' ) ) : ?>
                                                <?php echo esc_html( $nom ); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'realisation_ligne_3' ) ) : ?>
                            <?php while ( have_rows( 'realisation_ligne_3' ) ) :
                                the_row(); ?>
                                <a class="item" target="_blank" href="<?php if ( $lien = get_sub_field( 'lien' ) ) : ?><?php echo esc_url( $lien ); ?><?php endif; ?>">
                                    <?php
                                    $image = get_sub_field( 'image' );
                                    if ( $image ) : ?>
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                    <?php endif; ?>
                                    <div class="hover">
                                        <p>
                                            <?php if ( $nom = get_sub_field( 'nom' ) ) : ?>
                                                <?php echo esc_html( $nom ); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    
</div>

<?php get_footer(); ?>