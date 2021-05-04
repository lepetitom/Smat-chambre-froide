@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
<div class="services">

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

	<?php endwhile; ?>
<?php endif; ?>
</div>
