<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta property="og:locale" content="ja_JP">

        <!-- SEO Meta Tags -->
        <meta name="keywords" content="こんどう動物病院" />
        <meta name="description" content="神奈川県海老名の動物病院、こんどう動物病院" />

        <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
        <meta property="og:title" content="こんどう動物病院"/>
        <meta property="og:type" content="article" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="こんどう動物病院" />
        <meta property="og:description" content="神奈川県海老名の動物病院、こんどう動物病院" />
    
        <title>
        <?php
        if(is_front_page() || is_home()) {
            echo get_bloginfo('name');
        } else{
            wp_title('|',true,'right');
            echo bloginfo('name'); 
        }
        ?>      
        </title>

        <link rel="shortcut icon" href="<?php echo T_DIRE_URI; ?>/favicon.png">
        <link rel="icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.png">
        <link rel="apple-touch-icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.png">
        <?php wp_head(); ?>
    </head> 

<?php 
  global $post;
  
  if( $post->post_type != "page" ) {
    $post_slug = $post->post_type;
  } else {
    $post_slug = $post->post_name;
  }
  if( is_single() ) {
    $category_arr = get_the_category( $post->ID );
    $post_slug = $category_arr[0]->slug;
  }
?>

<?php
$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);
?>
<?php if(is_single()): ?>
<body <?php body_class();?> id="body<?php echo get_post_type(); ?>">
<?php else: ?>
<body <?php body_class();?> id="body<?php echo $path_parts['filename']; ?>">
<?php endif; ?>


    <div id="preloader">
        <span class="margin-bottom"><img src="<?php echo T_DIRE_URI; ?>/assets/img/loader.gif" alt="Loading......" /></span>
    </div>

    <!--  HEADER STYLE  02-->

    <header class="main-header-2 clearfix" data-sticky_header="true">

        <section class="header-wrapper navgiation-wrapper">

            <div class="main-top-header clearfix">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 text-left">
                            
                            <div class="top-bar-link">
                                <div class="top-bar-link">
                                    <p class="header-desc">神奈川県海老名の動物病院、こんどう動物病院</p>
                                </div>
                                
                            </div>
                            
                        </div>

                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                            <i class="fa fa-mobile-phone"></i> <strong>TEL</strong> : 046-238-3777
                        </div>  -->
                        
                    </div>   
                </div>
            </div>

            <div class="header-top">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-12 col-12 header-col-logo">
                            <div class="header-logo logo">
                                <a href="<?php echo HOME; ?>">
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" alt="こんどう動物病院様">
                                </a>
                            </div><!-- end .logo  -->
                        </div><!-- end .col-md-3  -->

                        <div class="col-md-8 col-sm-12">
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="header-icon-box">
                                        <div class="icon-container">
                                            <i class="fa fa-building-o"></i>
                                        </div>
                                        <div class="text">
                                            <span class="head-heading">所在地: 〒243-0425</span>  
                                                <span class="head-content">
                                                    神奈川県海老名市中野1-31-7
                                                </span>                                             
                                            <span class="head-content">
                                            </span>
                                        </div>
                                    </div><!-- end .repair-icon-box  -->
                                </div><!-- end .col-md-4  --> 

                                <div class="col-md-6 col-12">
                                    <div class="header-icon-box">
                                        <div class="icon-container">
                                            <i class="fa fa-calendar-check-o"></i>
                                        </div>
                                        <div class="text header-tel">
                                            <span class="head-heading">Tel&nbsp;:&nbsp;</span>                                                
                                            <span class="head-content">
                                                046-238-3777
                                            </span>
                                        </div>
                                    </div><!-- end .header-icon-box  -->
                                </div> <!-- end .col-md-4  -->

                            </div> <!-- end .row  -->
                        </div><!-- end .col-md-8  -->

                    </div><!-- end .row  -->
                </div><!-- end .container  -->                
            </div><!-- end header-top  -->

            <!--  New Code For Menu -->

            <div id="menu_area" class="menu-area border-bottom-1p-solid-light">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-light navbar-expand-lg mainmenu col-lg-9 col-12">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li><a href="<?php echo HOME . 'news'; ?>" title="新着情報">新着情報</a></li>
                                    <li><a href="<?php echo HOME . 'services'; ?>" title="診察内容">診察内容</a></li>

                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="<?php echo HOME . 'prevention'; ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">予防について</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="./prevention.html#vaccin">予防接種</a></li>
                                            <li><a href="./prevention.html#rabies">狂犬病予防注射</a></li>
                                            <li><a href="./prevention.html#filariasis">フィラリア症</a></li>
                                            <li><a href="./prevention.html#fleas">ノミ・ダニの予防・駆除 </a></li>
                                            <li><a href="./prevention.html#check">健康診断</a></li>
                                            <li><a href="./prevention.html#microchip">マイクロチップ</a></li>
                                            <li><a href="./prevention.html#eyes">眼の病気と予防</a></li>
                                            <li><a href="./prevention.html#skin">皮膚の病気と予防</a></li>
                                        </ul>
                                    </li>


                                    <li><a href="<?php echo HOME . 'aboutus'; ?>" title="病院紹介">病院紹介</a></li>
                                    

                                </ul>
                            </div>
                        </nav>
                        
                        
                        <!--  Booking Icon  -->
                        
                        <div class="navbar-header col-lg-3 col-12 header-booking">
                            <div class="navbar-contact">

                                <div class="top-bar-social mt-12">
                                    <a href="https://step.petlife.asia/petreserve/subjectlist/index/cid/s9033804?SITE_CODE=hp">
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/booking-mark.png"></img>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!--  End New Code For Menu -->

        </section>

    </header> <!-- end main-header  -->