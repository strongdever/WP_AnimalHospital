<?php

	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>

    <main id="main">
                <!--  HOME SLIDER BLOCK  -->

        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="false" data-autoplay="true" data-autoplaytimeout="100000" data-bg_effect="true">

                <div class="slider_item_container" data-bg_img="<?php echo T_DIRE_URI; ?>/assets/img/home_1_slider_1.jpg" data-bg_color="#111111" data-bg_opacity="0.4" >
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-center">
                                <div class="slider-bg">                                         
                                    <div class="col-12 wow fadeInLeft " data-wow-duration="1s">         
                                        <h2 class="margin-bottom-12" data-animation-in="slideInDown" data-animation-out="animate-out zoomInDown">
                                            こんどう動物病院様で働く
                                        </h2>
                                        <h3 class="margin-bottom-24" data-animation-in="slideInUp" data-animation-out="animate-out zoomInDown">
                                            一般診療、各種予防接種、疾病予防、<br class="sp">健康診断、<br>しつけ相談、口腔ケアなど行っております。
                                        </h3>
                                        <!-- <a href="#" class="btn btn-theme btn-square" data-animation-in="zoomIn" data-animation-out="animate-out fadeOutDown">GET STARTED NOW</a> -->
                                    </div>                                            
                                </div> <!-- end .col-sm-12  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->

                <div class="slider_item_container" data-bg_img="<?php echo T_DIRE_URI; ?>/assets/img/home_1_slider_2.jpg" data-bg_color="#111111" data-bg_opacity="0.4" >
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-left">
                                    <div class="slider-bg">                                    
                                        <div class="col-12 wow fadeInDown" data-wow-duration="1s">         
                                            <h2 class="margin-bottom-12" data-animation-in="slideInLeft" data-animation-out="animate-out zoomInDown">
                                                信頼できる完全なペットケアサービス
                                            </h2>
                                            <h3 class="margin-bottom-24" data-animation-in="slideInRight" data-animation-out="animate-out zoomInDown">
                                                この街に暮らすペット・飼い主に寄り添った<br>動物医療を手がける動物病院です
                                            </h3>
                                            <!-- <a href="#" class="btn btn-theme btn-square" data-animation-in="zoomIn" data-animation-out="animate-out fadeOutRight">Learn More</a>
                                            <a href="#" class="btn btn-theme btn-theme-white btn-square" data-animation-in="zoomIn" data-animation-out="animate-out fadeOutRight">Get Started Now</a> -->
                                        </div>                                            
                                    </div> <!-- end .col-sm-12  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->

                <div class="slider_item_container" data-bg_img="<?php echo T_DIRE_URI; ?>/assets/img/home_1_slider_3.jpg" data-bg_color="#111111" data-bg_opacity="0.4" >
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-right">
                                <div class="slider-bg">                                         
                                    <div class="col-12 wow fadeInLeft" data-wow-duration="1s">         
                                        <h2 class="margin-bottom-12" data-animation-in="fadeInRight" data-animation-out="animate-out zoomInDown">
                                            慈しみの心のもとで考え、 <br>慈しむ行いを致します。
                                        </h2>
                                        <h3 class="margin-bottom-24" data-animation-in="fadeInLeft" data-animation-out="animate-out zoomInDown">
                                            ぬくもりある診療で飼い主さんと<br>伴侶動物の最良の関係をサポートします</h3>
                                        <!-- <a href="#" class="btn btn-theme btn-theme-white btn-square"  data-animation-in="zoomIn" data-animation-out="animate-out fadeOutRight">Get Started Now</a>
                                        <a href="#" class="btn btn-theme btn-square" data-animation-in="zoomIn" data-animation-out="animate-out fadeOutRight">Learn More</a> -->

                                    </div>                                            
                                </div> <!-- end .col-sm-12  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->
                

            </div> <!-- end .slider_1  -->
        </div> <!-- end .slider-wrap.  -->
        
        <!-- SECTION CVALENDAR-->
        
        <section class="section-content-block section-pure-white-bg map-schedule"  id="highlights-3">
            <div class="container">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h4 class="heading-alt-style text-capitalize text-dark-color">SCHEDULE</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="subheading-alt-style pl-lg-5 pl-0 pr-lg-5 pr-0">
                        診察スケジュール
                        </h2>
                    </div> <!-- end .col-sm-12  --> 

                </div>

                <div class="row calendar-schedule">

                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 calendar-wrapper">

                        <div id="custom-calendar">
                            
                            <div class="light">

                                <div class="calendar">
                                    <div class="calendar-header">
                                        <span class="month-picker" id="month-picker">April</span>
                                        <div class="year-picker">
                                            <span class="year-change" id="prev-year">
                                                <pre><i class="fa fa-angle-left" style="font-size:36px"></i></pre>
                                            </span>
                                            <span id="year">2022</span>
                                            <span class="year-change" id="next-year">
                                                <pre><i class="fa fa-angle-right" style="font-size:36px"></i></pre>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="calendar-body">
                                        <div class="calendar-week-day">
                                            <div>日</div>
                                            <div>月</div>
                                            <div>火</div>
                                            <div>水</div>
                                            <div>木</div>
                                            <div>金</div>
                                            <div>土</div>
                                        </div>
                                        <div class="calendar-days"></div>
                                    </div>
                                    
                                    <div class="month-list"></div>
                                </div>
                            </div>

                        </div>

                    </div> <!--  end .col-lg-6 -->   

                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 schedule-wrapper">
                        
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="highlight-layout-2">
                                    
                                    <div class="highlight-text">
                                        <h5>診療時間</h5>
                                        <div>9:00 ~ 12:00 / 16:00 ~ 19:00</div>
                                    </div> <!-- end .service-text  -->
                                    <div class="highlight-text">
                                        <h5>休診日</h5>
                                        <div>毎週火曜日、祝日</div>
                                    </div> <!-- end .service-text  -->
                                    <div class="highlight-text">
                                        <h5>スケジュールの記号</h5>
                                        <div><span class="business-day">〇</span>：診療</div>
                                        <div><span class="nonbusiness-day">ー</span>：休診</div>
                                        <div><span class="unknown-day">△</span>：お知らせ（<a href="<?php echo HOME . 'topics'; ?>">新着情報</a>をご確認ください）<br>
                                        カレンダーの上の<span class="unknown-day">△</span>マークをクリックすると、その日のスケジュール変更内容を確認することもできます。
                                    </div>
                                    </div> <!-- end .service-text  -->

                                </div> <!-- end .service-item  -->
                            </div>
                            
                        </div>

                    </div>
                            
                </div> <!--  end .row  -->         

            </div> <!--  end .container -->
        </section> 

        <section class="section-content-block block-secondary-bg top-news"  id="highlights-3">
            <div class="container">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h4 class="heading-alt-style text-capitalize text-dark-color">NEWS</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="subheading-alt-style pl-lg-5 pl-0 pr-lg-5 pr-0">
                            新 着 情 報
                        </h2>
                    </div> <!-- end .col-sm-12  --> 

                </div>

                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
                        $args = [
                            'post_type' => 'topics',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 5,
                        ];
                        $custom_query = new WP_Query( $args );
                        if( $custom_query->have_posts() ) :
                        ?>
                        <ul class="news-wrapper">
                            <?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                            <li class="news-item">
                                <ul class="item">
                                    <li>
                                        <span class="date"><?php the_time('Y.m.d'); ?></span>
                                    </li>
                                    <?php
                                    $post_cats = get_the_terms(get_the_ID(), 'topics-category');
                                    if( $post_cats) :
                                        foreach($post_cats as $post_cat) :
                                    ?>
                                    <li>
                                        <a class="category" href="<?php echo get_term_link($post_cat); ?>"><?php echo $post_cat->name; ?></a>
                                    </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <li>
                                        <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                        <a class="btn-rightarrow" href="<?php echo HOME . 'topics'; ?>">
                            ニュース記事一覧
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                            </svg>
                        </a>
                    </div>

                </div> <!--  end .row  -->         
                
            </div> <!--  end .container -->
        </section> 

        <!-- SECTION CVALENDAR-->
        
        <section class="section-content-block section-pure-white-bg map-schedule"  id="accessmap">
            <div class="container">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h4 class="heading-alt-style text-capitalize text-dark-color">ACCESS</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="subheading-alt-style pl-lg-5 pl-0 pr-lg-5 pr-0">
                            アクセス
                        </h2>
                    </div> <!-- end .col-sm-12  --> 

                </div>
       

                <div class="row map-part">
                    
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 google-map">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.776297901604!2d139.37069027577573!3d35.41079507267569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601854d0fed77f71%3A0x9e0a8cc6e370739e!2s1-ch%C5%8Dme-31-7%20Nakano%2C%20Ebina%2C%20Kanagawa%20243-0425%2C%20Japan!5e0!3m2!1sen!2sus!4v1692432546481!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div> 

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 map-wrapper">
                        <div class="highlight-layout-2">
                            <div class="highlight-text">
                                <h5>所在地: 〒243-0425</h5>
                                <div>神奈川県海老名市中野1-31-7</div>
                            </div> <!-- end .service-text  -->
                        </div>
                        <div class="highlight-layout-2">
                            <div class="highlight-text">
                                <h5>最寄駅</h5>
                                <div>JR相模線門沢橋駅から徒歩約13分</div>
                            </div> <!-- end .service-text  -->
                        </div>

                        <div class="highlight-layout-2">
                            <div class="highlight-text">
                                <h5>電話番号</h5>
                                <div class="phone-num">０４６－２３８－３７７７</div>
                            </div> <!-- end .service-text  -->
                        </div>

                        <div class="highlight-layout-2">
                            <div class="highlight-text">
                                <h5>「駐車場完備」</h5>
                            </div> <!-- end .service-text  -->
                        </div>

                    </div> <!--  end .col-lg-6 -->

                </div> <!--  end .row  -->  
            </div> <!--  end .container -->
        </section> 

        <!--  SECTION SERVICE 01 -->

        <section class="section-content-block block-secondary-bg parallax top-service" data-bg_img="<?php echo T_DIRE_URI; ?>/assets/img/service_custom_bg.jpg" data-bg_color="#FFFFFF" data-bg_opacity="0.5" data-stellar-background-ratio="0.9">

            <div class="container">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h4 class="heading-alt-style text-capitalize text-dark-color">Our Services</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="subheading-alt-style pl-lg-5 pl-0 pr-lg-5 pr-0">
                            診療内容
                        </h2>
                    </div> <!-- end .col-sm-12  --> 
                    <div class="col-md-12 col-sm-12 text-center">
                        <p class="desc pl-lg-5 pl-0 pr-lg-5 pr-0">
                            一般診療、各種予防接種、疾病予防、健康診断、<br class="sp">しつけ相談、口腔ケアなど行っております。<br>
                            症状により大学病院などの高度医療機関への<br class="sp">紹介もしております。<br>
                            健康、しつけ相談、疾病予防、<br class="sp">口腔ケアなどもしております。
                        </p>
                    </div> <!-- end .col-sm-12  --> 
                    
                </div>

                <div class="row top-service-content">

                    <div class="col-lg-4 col-sm-6 col-12">

                        <article class="service-block-1 text-center">
                            
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/service_1.jpg" alt="service" />

                                </figure>

                                <div class="service-content">
                                    <h3>診療対象</h3>
                                    <p class="desc">
                                        犬、猫の診療を行っております。
                                    </p>
                                    <a href="<?php echo HOME . 'services/#target'; ?>" class="btn btn-theme btn-small btn-inline btn-semi-rounded"><span>詳細を見る</span></a>
                                </div>
                            
                        </article>

                    </div> <!--  end .col-lg-4 col-sm-12  -->

                    <div class="col-lg-4 col-sm-6 col-12">
                        
                        <article class="service-block-1 text-center">
                            
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/service_2.jpg" alt="service" />

                                </figure>
 
                                <div class="service-content">
                                    <h3>
                                        予防接種
                                    </h3>
                                    <p class="desc">
                                        当院では、狂犬病予防接種のほか犬、猫の混合ワクチン接種を行っております。
                                    </p>
                                    <a href="<?php echo HOME . 'services/#vaccin'; ?>" class="btn btn-theme btn-small btn-inline btn-semi-rounded"><span>詳細を見る</span></a>
                                </div>
                            
                        </article>

                    </div> <!--  end .col-lg-4 col-sm-12  -->

                    <div class="col-lg-4 col-sm-6 col-12">
                        
                        <article class="service-block-1 text-center">
                            
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/service_3.jpg" alt="service" />

                                </figure>
                                
                                <div class="service-content">
                                    <h3>
                                        検査・健康診断
                                    </h3>
                                    <p class="desc">
                                        レントゲン、エコー、心電図、血液検査機器などは扱っております。
                                    </p>
                                    <a href="<?php echo HOME . 'services/#checkup'; ?>" class="btn btn-theme btn-small btn-inline btn-semi-rounded"><span>詳細を見る</span></a>
                                </div>
                            
                        </article>

                    </div> <!--  end .col-lg-4 col-sm-12  -->
                    
                    <div class="col-lg-4 col-sm-6 col-12">

                        <article class="service-block-1 text-center">
                            <figure>
                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/service_4.jpg" alt="service" />
                            </figure>

                            <div class="service-content">
                                <h3>
                                    入院設備
                                </h3>
                                <p class="desc">
                                    入院設備あり
                                </p>
                                <a href="<?php echo HOME . 'services/#facilities'; ?>" class="btn btn-theme btn-small btn-inline btn-semi-rounded"><span>詳細を見る</span></a>
                            </div> 

                        </article>
                    </div> <!--  end .col-lg-4 col-sm-12  -->
                    
                    <div class="col-lg-4 col-sm-6 col-12">

                        <article class="service-block-1 text-center">
                            <figure>
                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/service_5.jpg" alt="service" />
                            </figure>

                            <div class="service-content">
                                <h3>
                                    マイクロチップ
                                </h3>
                                <p class="desc">
                                    いざという時のためにマイクロチップの装着を！！
                                </p>
                                <a href="<?php echo HOME . 'services/#microchip'; ?>" class="btn btn-theme btn-small btn-inline btn-semi-rounded"><span>詳細を見る</span></a>
                            </div>

                        </article>

                    </div> <!--  end .col-lg-4 col-sm-12  -->

                </div>  <!--  end .row  --> 
                <div class="d-md-block steps-left">
                    <div class="stepsTrigger mtmt steps"></div>
                </div>
                <div class="row top-service-detail">
                    <a class="btn-rightarrow" href="<?php echo HOME . 'services'; ?>">
                        詳しくはこちら
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                        </svg>
                    </a>
                </div>

                <div class="d-md-block steps-right">
                    <div class="stepsTrigger mtmt steps"></div>
                </div>

            </div> <!--  end .container  -->

        </section> <!--  end .section-content-block -->    
        
        <section class="section-content-block parallax top-prevention" data-bg_img="<?php echo T_DIRE_URI; ?>/assets/img/service_custom_bg.jpg" data-bg_color="#FFFFFF" data-bg_opacity="0.5" data-stellar-background-ratio="0.9">

            <div class="container">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h4 class="heading-alt-style text-capitalize text-dark-color">Prevention</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="subheading-alt-style pl-lg-5 pl-0 pr-lg-5 pr-0">
                        予防について
                        </h2>
                    </div> <!-- end .col-sm-12  --> 
                    <div class="col-md-12 col-sm-12 text-center">
                        <p class="desc pl-lg-5 pl-0 pr-lg-5 pr-0 text-center">
                        ペットの健康管理の基本は、「予防がすべて」といっても過言ではありません。<br>
                        防げる病気を予防し、健康な心身を維持することは、<br class='pc'>
                        幸せなペットライフを送るために最も重要なポイントです。<br>
                        こんどう動物病院では、あなたのペットに最適の予防プログラムをご提案致します。
                        </p>
                    </div> <!-- end .col-sm-12  --> 
                    
                </div>

                <div class="row top-prevent-content">

                    <div class="container prevent-items">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="row item" href="<?php echo HOME . 'prevention/#vaccination'; ?>">
                                    <img class="col-3" src="<?php echo T_DIRE_URI; ?>/assets/img/icon--vaccine.webp" alt="">
                                    <div class="col-9">予防接種</div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a class="row item" href="<?php echo HOME . 'prevention/#hydrophobia'; ?>">
                                    <img class="col-3" src="<?php echo T_DIRE_URI; ?>/assets/img/icon--hydrophobia.webp" alt="">
                                    <div class="col-9">狂犬病予防注射</div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a class="row item" href="<?php echo HOME . 'prevention/#filaria'; ?>">
                                    <img class="col-3" src="<?php echo T_DIRE_URI; ?>/assets/img/icon--filaria.webp" alt="">
                                    <div class="col-9">フィラリア予防</div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a class="row item" href="<?php echo HOME . 'prevention/#nomidani'; ?>">
                                    <img class="col-3" src="<?php echo T_DIRE_URI; ?>/assets/img/icon--nomidani.webp" alt="">
                                    <div class="col-9">ノミ・ダニの予防・駆除</div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a class="row item" href="<?php echo HOME . 'prevention/#checkup'; ?>">
                                    <img class="col-3" src="<?php echo T_DIRE_URI; ?>/assets/img/icon--checkup.webp" alt="">
                                    <div class="col-9">健康診断</div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a class="row item" href="<?php echo HOME . 'prevention/#microchip'; ?>">
                                    <img class="col-3" src="<?php echo T_DIRE_URI; ?>/assets/img/icon--microchip.webp" alt="">
                                    <div class="col-9">マイクロチップ</div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a class="row item" href="<?php echo HOME . 'prevention/#eyes'; ?>">
                                    <img class="col-3" src="<?php echo T_DIRE_URI; ?>/assets/img/icon--eyes.webp" alt="">
                                    <div class="col-9">眼の病気と予防</div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a class="row item" href="<?php echo HOME . 'prevention/#skin'; ?>">
                                    <img class="col-3" src="<?php echo T_DIRE_URI; ?>/assets/img/icon--skin.webp" alt="">
                                    <div class="col-9">皮膚の病気と予防</div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>  <!--  end .row  --> 
                <div class="row top-prevent-detail">
                    <a class="btn-rightarrow" href="<?php echo HOME . 'prevention'; ?>">
                        詳しくはこちら
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                        </svg>
                    </a>
                </div>

            </div> <!--  end .container  -->

        </section> <!--  end .section-content-block -->   

        <section class="section-content-block .section-pure-white-bg top-aboutus">

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center mb-4">
                        <h4 class="heading-alt-style text-capitalize text-dark-color">ABOUT US</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="subheading-alt-style">
                            病院紹介
                        </h2>
                    </div> <!-- end .col-sm-12  --> 
                    <div class="col-md-12 col-sm-12 text-center">
                        <p class="desc text-center">
                        *クレジットカードの取り扱いも始めました。<br>
                        *ペット保険の「アニコム」と「アイペット」を取り扱っております。
                        </p>
                    </div>
                </div>                    

            </div>

            <div class="container-fluid">

                <div class="no-padding-gallery gallery-carousel owl-carousel">

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="<?php echo T_DIRE_URI; ?>/assets/img/gallery_1.webp">

                            <figure class="gallery-img">

                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/gallery_1.webp" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="<?php echo T_DIRE_URI; ?>/assets/img/gallery_2.webp">

                            <figure class="gallery-img">

                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/gallery_2.webp" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="<?php echo T_DIRE_URI; ?>/assets/img/gallery_3.webp">

                            <figure class="gallery-img">

                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/gallery_3.webp" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter spray">

                        <a class="gallery-light-box"  data-gall="myGallery" href="<?php echo T_DIRE_URI; ?>/assets/img/gallery_4.webp">

                            <figure class="gallery-img">

                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/gallery_4.webp" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="<?php echo T_DIRE_URI; ?>/assets/img/gallery_5.webp">

                            <figure class="gallery-img">

                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/gallery_5.webp" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="<?php echo T_DIRE_URI; ?>/assets/img/gallery_6.webp">

                            <figure class="gallery-img">

                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/gallery_6.webp" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="<?php echo T_DIRE_URI; ?>/assets/img/gallery_7.webp">

                            <figure class="gallery-img">

                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/gallery_7.webp" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                </div> <!-- end .row  -->
                <div class="row top-aboutus-detail">
                    <a class="btn-rightarrow" href="<?php echo HOME . 'aboutus'; ?>">
                        詳しくはこちら
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                        </svg>
                    </a>
                </div>
            </div><!-- end .container-fluid  -->

        </section> <!-- end .section-content-block  -->

        <script>
            let calendar = document.querySelector('.calendar')

            const month_names = ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']

            isLeapYear = (year) => {
                return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 ===0)
            }

            getFebDays = (year) => {
                return isLeapYear(year) ? 29 : 28
            }

            generateCalendar = (month, year) => {

                let calendar_days = calendar.querySelector('.calendar-days')
                let calendar_header_year = calendar.querySelector('#year')

                let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

                calendar_days.innerHTML = ''

                let currDate = new Date()
                if (month > 11 || month < 0) month = currDate.getMonth()
                if (!year) year = currDate.getFullYear()
                let curr_year = year

                let curr_month = `${month_names[month]}`
                month_picker.innerHTML = curr_month
                calendar_header_year.innerHTML = year

                // get first day of month
                
                let first_day = new Date(year, month, 1)
                
                for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
                    let day = document.createElement('div')
                    if (i >= first_day.getDay()) {
                        let curr_day = i - first_day.getDay() + 1
                        day.classList.add('calendar-day-hover')
                        day.innerHTML = i - first_day.getDay() + 1
                        day.innerHTML += `<span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>`
                        day.innerHTML += `<div class='business-mark'><div class='nonbusiness-day'>ー</div></div>`
                        <?php
                            $schedule_args = [
                                'post_type' => 'schedule',
                                'post_status' => 'publish',
                                'paged' => $paged,
                                'posts_per_page' => 1,
                            ];

                            $schedule_query = new WP_Query( $schedule_args );

                            if( $schedule_query->have_posts() ) :
                                while( $schedule_query->have_posts() ) : $schedule_query->the_post();
                                    $holidays=get_field("holidays");
                                    $dates=get_field("business-days");
                                endwhile;
                            endif;
                        ?>
                        <?php
                        if($dates) :
                            foreach($dates as $date) :
                            ?>
                            if((curr_day + first_day.getDay() - 1) % 7 == <?php echo $date; ?> ) {
                                day.querySelectorAll('.business-mark')[0].innerHTML = `<div class='business-day'>〇</div>`
                            }
                            <?php
                            endforeach;
                        endif;
                        ?> 
                        <?php
                        foreach($holidays as $holiday) :
                            $full_date = DateTime::createFromFormat( 'Y/m/d', $holiday['holiday-date']);
                            $dd = $full_date->format( 'd' );
                            $mm = $full_date->format( 'm' );
                        ?>
                        if(curr_month == <?php echo $mm; ?> + '月' ) {
                            if( curr_day == <?php echo $dd; ?> ) {
                                day.querySelectorAll('.business-mark')[0].innerHTML = `<div class='nonbusiness-day'>ー</div>`
                            }
                        }
                        <?php
                        endforeach; ?>   
                        
                        <?php
                            $args = [
                                'post_type' => 'topics',
                                'post_status' => 'publish',
                                'paged' => $paged,
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'topics-category',
                                        'field' => 'slug', // or 'term_id' or 'name'
                                        'terms' => 'schedule-change',
                                    ),
                                ),
                            ];
                            $custom_query = new WP_Query( $args );
                            if( $custom_query->have_posts() ) :
                                while($custom_query->have_posts()) : $custom_query->the_post();
                                    $unkown_days = get_field("change-dates");
                                    foreach ($unkown_days as $unkown_day ) :
                                        $unknown_date = DateTime::createFromFormat( 'Y/m/d', $unkown_day['change-date']);
                                        $unknown_yy = $unknown_date->format( 'Y' );
                                        $unknown_mm = $unknown_date->format( 'm' );
                                        $unknown_dd = $unknown_date->format( 'd' );
                        ?>
                        if( curr_year == <?php echo $unknown_yy; ?>) {
                            if(curr_month == <?php echo $unknown_mm; ?> + '月' ) {
                                if( curr_day == <?php echo $unknown_dd; ?> ) {
                                    day.querySelectorAll('.business-mark')[0].innerHTML = `<div class='unknown-day'><a href="<?php the_permalink(); ?>" target='_black'>△</a></div>`
                                }
                            }
                        }
                        <?php
                                    endforeach;
                                endwhile;
                            endif;
                        ?>

                        if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                            day.classList.add('curr-date')
                        }
                    }
                    calendar_days.appendChild(day)
                }
            }
            let month_list = calendar.querySelector('.month-list')

            month_names.forEach((e, index) => {
                let month = document.createElement('div')
                month.innerHTML = `<div data-month="${index}">${e}</div>`
                month.querySelector('div').onclick = () => {
                    month_list.classList.remove('show')
                    curr_month.value = index
                    generateCalendar(index, curr_year.value)
                }
                month_list.appendChild(month)
            })

            let month_picker = calendar.querySelector('#month-picker')

            month_picker.onclick = () => {
                month_list.classList.add('show')
            }

            let currDate = new Date()

            let curr_month = {value: currDate.getMonth()}
            let curr_year = {value: currDate.getFullYear()}

            generateCalendar(curr_month.value, curr_year.value)

            document.querySelector('#prev-year').onclick = () => {
                --curr_year.value
                generateCalendar(curr_month.value, curr_year.value)
            }

            document.querySelector('#next-year').onclick = () => {
                ++curr_year.value
                generateCalendar(curr_month.value, curr_year.value)
            }
        </script>
    </main>

<?php get_footer(); ?>