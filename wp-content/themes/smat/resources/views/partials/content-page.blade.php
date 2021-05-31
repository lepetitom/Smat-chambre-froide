@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
<div class="services">
    <div id="box"></div>
    <?php if ( have_rows( 'services' ) ) : ?>
	<?php while ( have_rows( 'services' ) ) :
		the_row(); ?>
        <div class="services-title">
            <?php if ( $titre_services = get_sub_field( 'titre_services' ) ) : ?>
                <h2><?php echo esc_html( $titre_services ); ?></h2>
            <?php endif; ?>
        </div>  

        <div class="services-content">
            <div class="service">
                <div class="service-image">
                    <?php
                        $image_service_1 = get_sub_field( 'image_service_1' );
                        if ( $image_service_1 ) : ?>
                            <img src="<?php echo esc_url( $image_service_1['url'] ); ?>" alt="<?php echo esc_attr( $image_service_1['alt'] ); ?>" />
                        <?php endif; ?>
                </div>
                <div class="service-content">
                    <h3>
                        <?php if ( $titre_service_1 = get_sub_field( 'titre_service_1' ) ) : ?>
                            <?php echo esc_html( $titre_service_1 ); ?>
                        <?php endif; ?>
                    </h3>

                    <?php if ( $texte_service_1 = get_sub_field( 'texte_service_1' ) ) : ?>
                        <?php echo esc_html( $texte_service_1 ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="service">
                <div class="service-image">
                    <?php
                        $image_service_1 = get_sub_field( 'image_service_1' );
                        if ( $image_service_1 ) : ?>
                            <img src="<?php echo esc_url( $image_service_1['url'] ); ?>" alt="<?php echo esc_attr( $image_service_1['alt'] ); ?>" />
                        <?php endif; ?>
                </div>
                <div class="service-content">
                    <h3>
                        <?php if ( $titre_service_1 = get_sub_field( 'titre_service_1' ) ) : ?>
                            <?php echo esc_html( $titre_service_1 ); ?>
                        <?php endif; ?>
                    </h3>

                    <?php if ( $texte_service_1 = get_sub_field( 'texte_service_1' ) ) : ?>
                        <?php echo esc_html( $texte_service_1 ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="service">
                <div class="service-image">
                    <?php
                        $image_service_1 = get_sub_field( 'image_service_1' );
                        if ( $image_service_1 ) : ?>
                            <img src="<?php echo esc_url( $image_service_1['url'] ); ?>" alt="<?php echo esc_attr( $image_service_1['alt'] ); ?>" />
                        <?php endif; ?>
                </div>
                <div class="service-content">
                    <h3>
                        <?php if ( $titre_service_1 = get_sub_field( 'titre_service_1' ) ) : ?>
                            <?php echo esc_html( $titre_service_1 ); ?>
                        <?php endif; ?>
                    </h3>

                    <?php if ( $texte_service_1 = get_sub_field( 'texte_service_1' ) ) : ?>
                        <?php echo esc_html( $texte_service_1 ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="service">
                <div class="service-image">
                    <?php
                        $image_service_1 = get_sub_field( 'image_service_1' );
                        if ( $image_service_1 ) : ?>
                            <img src="<?php echo esc_url( $image_service_1['url'] ); ?>" alt="<?php echo esc_attr( $image_service_1['alt'] ); ?>" />
                        <?php endif; ?>
                </div>
                <div class="service-content">
                    <h3>
                        <?php if ( $titre_service_1 = get_sub_field( 'titre_service_1' ) ) : ?>
                            <?php echo esc_html( $titre_service_1 ); ?>
                        <?php endif; ?>
                    </h3>

                    <?php if ( $texte_service_1 = get_sub_field( 'texte_service_1' ) ) : ?>
                        <?php echo esc_html( $texte_service_1 ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="service">
                <div class="service-image">
                    <?php
                        $image_service_1 = get_sub_field( 'image_service_1' );
                        if ( $image_service_1 ) : ?>
                            <img src="<?php echo esc_url( $image_service_1['url'] ); ?>" alt="<?php echo esc_attr( $image_service_1['alt'] ); ?>" />
                        <?php endif; ?>
                </div>
                <div class="service-content">
                    <h3>
                        <?php if ( $titre_service_1 = get_sub_field( 'titre_service_1' ) ) : ?>
                            <?php echo esc_html( $titre_service_1 ); ?>
                        <?php endif; ?>
                    </h3>

                    <?php if ( $texte_service_1 = get_sub_field( 'texte_service_1' ) ) : ?>
                        <?php echo esc_html( $texte_service_1 ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="service">
                <div class="service-image">
                    <?php
                        $image_service_1 = get_sub_field( 'image_service_1' );
                        if ( $image_service_1 ) : ?>
                            <img src="<?php echo esc_url( $image_service_1['url'] ); ?>" alt="<?php echo esc_attr( $image_service_1['alt'] ); ?>" />
                        <?php endif; ?>
                </div>
                <div class="service-content">
                    <h3>
                        <?php if ( $titre_service_1 = get_sub_field( 'titre_service_1' ) ) : ?>
                            <?php echo esc_html( $titre_service_1 ); ?>
                        <?php endif; ?>
                    </h3>

                    <?php if ( $texte_service_1 = get_sub_field( 'texte_service_1' ) ) : ?>
                        <?php echo esc_html( $texte_service_1 ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>                
        <?php endwhile; ?>
    <?php endif; ?>
</div>



<!-- Bloc qui permet d'avoir le fond gris -->
<div class="second-part">

    <div class="image-about">
        <?php
            $image_de_fond_about = get_field( 'image_de_fond_about' );
            if ( $image_de_fond_about ) : ?>
                <img src="<?php echo esc_url( $image_de_fond_about['url'] ); ?>" alt="<?php echo esc_attr( $image_de_fond_about['alt'] ); ?>" />
        <?php endif; ?>
    </div>


    <div class="about-content">
        <?php if ( $titre_a_propos = get_field( 'titre_a_propos' ) ) : ?>
            <h2><?php echo esc_html( $titre_a_propos ); ?></h2>
        <?php endif; ?>
        <div class="paragraphes-about">
            <div class="paragraphe">
                <?php if ( $paragraphe_1 = get_field( 'paragraphe_1' ) ) : ?>
                    <?php echo $paragraphe_1; ?>
                <?php endif; ?>
            </div>      
            <div class="paragraphe">
                <?php if ( $paragraphe_2 = get_field( 'paragraphe_2' ) ) : ?>
                    <?php echo $paragraphe_2; ?>
                <?php endif; ?>
            </div>      
            <div class="paragraphe">
                <?php if ( $paragraphe_3 = get_field( 'paragraphe_3' ) ) : ?>
                    <?php echo $paragraphe_3; ?>
                <?php endif; ?>
                <?php
                $link = get_field( 'bouton' );
                if ( $link ) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>      
        </div>
    </div>

    <div class="nos-realisations container">
        <div class="intro-realisations">
            <h2>
                <?php if ( $titre_nos_realisations = get_field( 'titre_nos_realisations' ) ) : ?>
                    <?php echo esc_html( $titre_nos_realisations ); ?>
                <?php endif; ?>
            </h2>
            <p>
                <?php if ( $texte_dintroduction = get_field( 'texte_dintroduction' ) ) : ?>
                    <?php echo esc_html( $texte_dintroduction ); ?>
                <?php endif; ?>
            </p>
        </div>
        
        
    </div>
    
    <div class="realisations-content">
        <div class="slider-line">
            <div class="item">
                
                <?php
                $image_1_slide_1 = get_field( 'image_1_slide_1' );
                if ( $image_1_slide_1 ) : ?>
                    <img src="<?php echo esc_url( $image_1_slide_1['url'] ); ?>" alt="<?php echo esc_attr( $image_1_slide_1['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            
            <div class="item">
                <?php
                $image_2_slide_1 = get_field( 'image_2_slide_1' );
                if ( $image_2_slide_1 ) : ?>
                    <img src="<?php echo esc_url( $image_2_slide_1['url'] ); ?>" alt="<?php echo esc_attr( $image_2_slide_1['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            
            <div class="item">
                <?php
                $image_3_slide_1 = get_field( 'image_3_slide_1' );
                if ( $image_3_slide_1 ) : ?>
                    <img src="<?php echo esc_url( $image_3_slide_1['url'] ); ?>" alt="<?php echo esc_attr( $image_3_slide_1['alt'] ); ?>" />
                <?php endif; ?>
            </div>

            <div class="item">
                <?php
                $image_4_slide_1 = get_field( 'image_4_slide_1' );
                if ( $image_4_slide_1 ) : ?>
                    <img src="<?php echo esc_url( $image_4_slide_1['url'] ); ?>" alt="<?php echo esc_attr( $image_4_slide_1['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            
            <div class="item">
                <?php
                $image_5_slide_1 = get_field( 'image_5_slide_1' );
                if ( $image_5_slide_1 ) : ?>
                    <img src="<?php echo esc_url( $image_5_slide_1['url'] ); ?>" alt="<?php echo esc_attr( $image_5_slide_1['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <div class="slider-line-2" dir="rtl">
            <div class="item">
                <?php
                $image_1_slide_2 = get_field( 'image_1_slide_2' );
                if ( $image_1_slide_2 ) : ?>
                    <img src="<?php echo esc_url( $image_1_slide_2['url'] ); ?>" alt="<?php echo esc_attr( $image_1_slide_2['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            
            <div class="item">
                <?php
                $image_2_slide_2 = get_field( 'image_2_slide_2' );
                if ( $image_2_slide_2 ) : ?>
                    <img src="<?php echo esc_url( $image_2_slide_2['url'] ); ?>" alt="<?php echo esc_attr( $image_2_slide_2['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            
            <div class="item">
                <?php
                $image_3_slide_2 = get_field( 'image_3_slide_2' );
                if ( $image_3_slide_2 ) : ?>
                    <img src="<?php echo esc_url( $image_3_slide_2['url'] ); ?>" alt="<?php echo esc_attr( $image_3_slide_2['alt'] ); ?>" />
                <?php endif; ?>
            </div>

            <div class="item">
                <?php
                $image_4_slide_2 = get_field( 'image_4_slide_2' );
                if ( $image_4_slide_2 ) : ?>
                    <img src="<?php echo esc_url( $image_4_slide_2['url'] ); ?>" alt="<?php echo esc_attr( $image_4_slide_2['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            
            <div class="item">
                <?php
                $image_5_slide_2 = get_field( 'image_5_slide_2' );
                if ( $image_5_slide_2 ) : ?>
                    <img src="<?php echo esc_url( $image_5_slide_2['url'] ); ?>" alt="<?php echo esc_attr( $image_5_slide_2['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <div class="slider-line">
            <div class="item">
                <?php
                $image_1_slide_3 = get_field( 'image_1_slide_3' );
                if ( $image_1_slide_3 ) : ?>
                    <img src="<?php echo esc_url( $image_1_slide_3['url'] ); ?>" alt="<?php echo esc_attr( $image_1_slide_3['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            
            <div class="item">
                <?php
                $image_2_slide_3 = get_field( 'image_2_slide_3' );
                if ( $image_2_slide_3 ) : ?>
                    <img src="<?php echo esc_url( $image_2_slide_3['url'] ); ?>" alt="<?php echo esc_attr( $image_2_slide_3['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            
            <div class="item">
                <?php
                $image_3_slide_3 = get_field( 'image_3_slide_3' );
                if ( $image_3_slide_3 ) : ?>
                    <img src="<?php echo esc_url( $image_3_slide_3['url'] ); ?>" alt="<?php echo esc_attr( $image_3_slide_3['alt'] ); ?>" />
                <?php endif; ?>
            </div>

            <div class="item">
                <?php
                $image_4_slide_3 = get_field( 'image_4_slide_3' );
                if ( $image_4_slide_3 ) : ?>
                    <img src="<?php echo esc_url( $image_4_slide_3['url'] ); ?>" alt="<?php echo esc_attr( $image_4_slide_3['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            
            <div class="item">
                <?php
                $image_5_slide_3 = get_field( 'image_5_slide_3' );
                if ( $image_5_slide_3 ) : ?>
                    <img src="<?php echo esc_url( $image_5_slide_3['url'] ); ?>" alt="<?php echo esc_attr( $image_5_slide_3['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>