   

        </div><!-- /#main -->

        <footer id="contact"><!-- footer -->
            <div class="container">
                <h2>
                    <?php if ( $titre = get_field( 'titre', 'options' ) ) : ?>
                        <?php echo esc_html( $titre ); ?>
                    <?php endif; ?>
                </h2>
                <div class="formulaire">
                    <?php if ( $formulaire = get_field( 'formulaire', 'options' ) ) : ?>
                        <?php echo $formulaire; ?>
                    <?php endif; ?>
                </div>
                <hr>
                <div class="content">
                    <div class="description">
                        <?php if ( $description = get_field( 'description', 'options' ) ) : ?>
                            <?php echo $description; ?>
                        <?php endif; ?>
                    </div>
                    <div class="contact">
                        <?php if ( $adresse = get_field( 'adresse', 'options' ) ) : ?>
                            <?php echo $adresse; ?>
                        <?php endif; ?>
                        <?php if ( $email_telephone = get_field( 'email_telephone', 'options' ) ) : ?>
                            <?php echo $email_telephone; ?>
                        <?php endif; ?>
                        <?php if ( $horaires = get_field( 'horaires', 'options' ) ) : ?>
                            <?php echo $horaires; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </footer><!-- /footer -->

    </div><!-- /#page --> 

<?php wp_footer() ?>
</body><!-- /body -->
</html>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */