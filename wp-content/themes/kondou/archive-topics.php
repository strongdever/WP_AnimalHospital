<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 Union Theme - Version: 1.4
*/

get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('topics-category') ? get_query_var('topics-category') : "";
?>

<main id="topics-page" class="topics-page">
    <section class="page-header news-header">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        NEWS
                    </h3>

                    <p class="page-breadcrumb">
                        <div>新着情報</div>
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->

    <section class="main-content">

        <div class="container">

            <div class="row">
            <?php
            $args = [
                'post_type' => 'topics',
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => 12,
                'orderby' => 'post_date',
                'order' => 'DESC'
            ];
            $tax_query = [];

            if( $cat_slug ) {
                $tax_query[] = [
                    'taxonomy' => 'topics-category',
                    'field' => 'slug',
                    'terms' => $cat_slug
                ];
            }
        
            if ( !empty($tax_query) ) {
                $args['tax_query'] = $tax_query;
            }
            $custom_query = new WP_Query( $args );
            if( $custom_query->have_posts() ) :
            ?>
                <div class="col-md-8 col-sm-12">
                    <?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    <article class="post single-post">
                        
                        <div class="single-post-title">

                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2> <!--  end blog-post-title  -->

                            <p class="single-post-meta">
                            <?php 
                            $post_cats = get_the_terms(get_the_ID(), "topics-category");
                            if($post_cats) :
                                foreach($post_cats as $post_cat) :
                            ?>
                                <a class="category" href="<?php echo get_term_link($post_cat); ?>"><?php echo $post_cat->name; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                                &nbsp;<i class="fa fa-calendar"></i>
                                &nbsp;<?php the_time('Y.m.d'); ?>
                            </p>

                            <p><?php the_excerpt(); ?></p>


                        </div> <!-- end col-sm-8  -->

                    </article>

                    <?php endwhile; ?>


                    <div class="blog-pagination text-center clearfix">                

                        <?php the_posts_pagination( array(
                            'next_text' => '<i class="fa fa-angle-right" style="font-size:36px"></i>',
                            'prev_text' => '<i class="fa fa-angle-left" style="font-size:36px"></i>',
                        ) ); ?>
        	        <?php wp_reset_query(); ?> <!-- end pagination  -->

                    </div> <!--  end blog-pagination -->

                </div> <!--  end col-sm-8 -->
                <?php endif; ?>


                <div class="col-md-4 col-sm-12">

                    <div class="widget site-sidebar">

                    <?php  
                        $cats_args = [
                            'taxonomy' => 'topics-category',
                            'hide_empty' => false,
                        ];
                        $cats = get_terms( $cats_args );
                        if($cats) :
                    ?>
                        <h2 class="widget-title">カテゴリ</h2>
                        
                        <ul class="widget-post-category clearfix">
                            <li>
                                <a class="<?php echo $cat_slug ? '' : ' active'; ?>" href="<?php echo HOME; ?>/topics">全て</a>
                                <span class="float-right badge">
                                    <!-- getting the count of all the posts -->
                                    <?php
                                    $category_slug = $cat->slug;
                                    $args = array(
                                        'post_type' => 'topics',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                    );

                                    $query = new WP_Query($args);

                                    $post_count = $query->post_count;
                                    echo $post_count;
                                    ?>
                                </span>
                            </li>
                            <?php foreach($cats as $cat) : ?>
                            <li>
                                <a class="<?php if($cat_slug == $cat->slug ){ echo ' active'; } else { echo ''; } ?>" title="View all posts filed under Environment" href="<?php echo get_term_link($cat); ?>"><?php echo $cat->name; ?></a>
                                <span class="float-right badge">
                                    <!-- getting the count of all the posts by category-->
                                    <?php
                                    $category_slug = $cat->slug;
                                    $args = array(
                                        'post_type' => 'topics',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'topics-category',
                                                'field' => 'slug',
                                                'terms' => $category_slug
                                            )
                                        )
                                    );

                                    $query = new WP_Query($args);

                                    $post_count = $query->post_count;
                                    echo $post_count;
                                    ?>
                                </span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                    </div> <!--  end .widget -->

                    <div class="widget site-sidebar">
                    <?php
                        $args = [
                            'post_type' => 'topics',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 5,
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                        ];
                        $custom_query = new WP_Query( $args );
                        if( $custom_query->have_posts() ) :
                        ?>
                        <h2 class="widget-title">最近の投稿</h2>
                        <?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <div class="single-recent-post">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span><i class="fa fa-calendar"></i>&nbsp; <?php the_time('Y.m.d'); ?></span>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div> <!--  end .widget -->

                </div> <!-- end .col-sm-4  -->

            </div> <!--  end row  -->

        </div> <!--  end container -->

    </section> <!-- end .main-content  -->
</main>

</main>

<?php get_footer();?>