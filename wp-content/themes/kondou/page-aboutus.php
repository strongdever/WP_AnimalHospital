<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 Union Theme - Version: 1.4
*/

get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('topics-category') ? get_query_var('topics-category') : "";
?>

<main id="aboutus-page" class="aboutus-page">
    <?php the_content(); ?>
</main>

<?php get_footer();?>