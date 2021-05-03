@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
<div class="services">
    <?php if ( have_rows( 'services' ) ) : ?>
        <?php while ( have_rows( 'services' ) ) :
            the_row(); ?>
            
            <?php if ( $titre_services = get_sub_field( 'titre_services' ) ) : ?>
                <h2><?php echo esc_html( $titre_services ); ?></h2>
            <?php endif; ?>

            <?php if ( have_rows( 'services_1' ) ) : ?>
                <?php while ( have_rows( 'services_1' ) ) :
                    the_row(); ?>
                    
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if ( have_rows( 'services_2' ) ) : ?>
                <?php while ( have_rows( 'services_2' ) ) :
                    the_row(); ?>
                    
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if ( have_rows( 'services_3' ) ) : ?>
                <?php while ( have_rows( 'services_3' ) ) :
                    the_row(); ?>
                    
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if ( have_rows( 'services_4' ) ) : ?>
                <?php while ( have_rows( 'services_4' ) ) :
                    the_row(); ?>
                    
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if ( have_rows( 'services_5' ) ) : ?>
                <?php while ( have_rows( 'services_5' ) ) :
                    the_row(); ?>
                    
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if ( have_rows( 'services_6' ) ) : ?>
                <?php while ( have_rows( 'services_6' ) ) :
                    the_row(); ?>
                    
                <?php endwhile; ?>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</div>
