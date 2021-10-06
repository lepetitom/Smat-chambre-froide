<?php

get_header(); ?>

<div class="index page-<?php the_ID() ?>" id="page" data-page="index">

    <div class="container">
        <?php the_content();  ?>
    </div>



</div>

<?php get_footer(); ?>