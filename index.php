<?php get_header(); ?>

    <?php echo get_template_part('template-part/slider'); ?>

        <!-- News Headline Container -->
        <div class="news-bar white-bg">
            <div class="container">
                <div class="row">

                    <!-- news -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 r-full-width">
                        <div class="headline-wrap">

                            <span class="badge">just in</span>

                            <!-- news ticker -->
                            <div id="ticker">
                                <div class="clip">
                                    <div class="today">
                                        <ul>
                                            <?php 
                                        if(have_posts()):
                                            while(have_posts()):the_post()
                                        ?>
                                                <li>
                                                    <?= the_title(); ?>
                                                </li>
                                                <?php endwhile; endif ?>
                                                    <?php wp_reset_query(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- news ticker -->

                            <!-- ticker spinner -->
                            <div class="alert-spinner">
                                <div class="double-bounce1"></div>
                                <div class="double-bounce2"></div>
                            </div>
                            <!-- ticker spinner -->

                        </div>
                    </div>
                    <!-- news -->

                    <!-- time clock -->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 r-full-width">
                        <div class="time-clock">
                            <div id="clock"></div>
                        </div>
                    </div>
                    <!-- time clock -->

                    <!-- Wheather forecast -->
                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <div class="weather-holder">
                            <img src="<?php echo  get_template_directory_uri(); ?>/images/cloud.png" alt="">
                            <span class="weather-state">Cloudy USA, Natha</span>
                            <span class="temp"><i class="fa fa-plus"></i> 18<sup>0</sup> C</span>
                        </div>
                    </div>
                    <!-- Wheather forecast -->

                </div>
            </div>
        </div>
        <!-- News Headline Container -->

        <!-- Main Content -->
        <main class="wrapper">
            <div class="theme-padding">
                <div class="container">

                    <!-- latest  news slider -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-widget mb-60">

                                <!-- Heading -->
                                <div class="primary-heading">
                                    <h2>what's hot right now</h2>
                                </div>
                                <!-- Heading -->

                                <!-- post slider -->
                                <div class="white-bg p-30 light-shadow slider-post" id="sliderPost">
                                    <div id="post-slider-1">
                                        <?php 
                                    //post query
                                        $args= array(
                                            'post_type'         => 'post',
                                            'post_status'       => 'publish',
                                            'category_name'     => 'technology',
                                            'posts_per_page'    => 10
                                        );
                                        $myQuery=new WP_Query($args);
                                        if($myQuery->have_posts()){
                                            while($myQuery->have_posts()): $myQuery->the_post();

                                        ?>
                                            <!-- post -->
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb">
                                                    <?php the_post_thumbnail('spc_post_cat',array('class'=>'spc-img-class')); ?>
                                                        <span class="post-badge"><?= the_category(','); ?></span>
                                                        <div class="thumb-hover">
                                                            <div class="position-center-center">
                                                                <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h4>
                                                    <ul class="post-meta m-0">
                                                        <li><i class="fa fa-user"></i>
                                                            <?= the_author(); ?>
                                                        </li>
                                                        <li><i class="fa fa-clock-o"></i>
                                                            <?= the_date(); ?>
                                                        </li>
                                                        <li><i class="fa fa-thumbs-o-up"></i>
                                                            <?php comments_popup_link('No Comments','1 comment','%Comments');?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                            <!-- post -->
                                            <?php endwhile; } ?>
                                                <?php wp_reset_query(); ?>

                                    </div>
                                </div>
                                <!-- post slider -->

                            </div>
                        </div>
                    </div>
                    <!-- Slider Widget -->

                    <!-- Main Content Row -->
                    <div class="row">

                        <!-- small sidebar -->
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 r-hidden">

                            <!-- add widget -->
                            <div class="aside-add">
                                <a href="<?php echo  get_template_directory_uri(); ?>/#"><img src="<?php echo  get_template_directory_uri(); ?>/images/aside-add.jpg" alt=""></a>
                            </div>
                            <!-- add widget -->

                            <aside class="aside">

                                <!-- trending -->
                                <div class="widget">
                                    <h3>trending</h3>

                                    <div class="trending-list">
                                        <ul class="trending-slider">

                                            <li>
                                                <div class="post style-1">

                                                    <!-- post img -->
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-01.jpg" alt="">
                                                        <span class="post-badge">post</span>
                                                    </div>
                                                    <!-- post img -->

                                                    <!-- post details -->
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                    </div>
                                                    <!-- post details -->

                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">

                                                    <!-- post img -->
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-02.jpg" alt="">
                                                        <span class="post-badge">post</span>
                                                    </div>
                                                    <!-- post img -->

                                                    <!-- post details -->
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                    </div>
                                                    <!-- post details -->

                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">

                                                    <!-- post img -->
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-03.jpg" alt="">
                                                        <span class="post-badge">post</span>
                                                    </div>
                                                    <!-- post img -->

                                                    <!-- post details -->
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                    </div>
                                                    <!-- post details -->

                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">

                                                    <!-- post img -->
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-04.jpg" alt="">
                                                        <span class="post-badge">post</span>
                                                    </div>
                                                    <!-- post img -->

                                                    <!-- post details -->
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                    </div>
                                                    <!-- post details -->

                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">

                                                    <!-- post img -->
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-05.jpg" alt="">
                                                        <span class="post-badge">post</span>
                                                    </div>
                                                    <!-- post img -->

                                                    <!-- post details -->
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                    </div>
                                                    <!-- post details -->

                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">

                                                    <!-- post img -->
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-06.jpg" alt="">
                                                        <span class="post-badge">post</span>
                                                    </div>
                                                    <!-- post img -->

                                                    <!-- post details -->
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                    </div>
                                                    <!-- post details -->

                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">

                                                    <!-- post img -->
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-01.jpg" alt="">
                                                        <span class="post-badge">post</span>
                                                    </div>
                                                    <!-- post img -->

                                                    <!-- post details -->
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                    </div>
                                                    <!-- post details -->

                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">

                                                    <!-- post img -->
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-02.jpg" alt="">
                                                        <span class="post-badge">post</span>
                                                    </div>
                                                    <!-- post img -->

                                                    <!-- post details -->
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                    </div>
                                                    <!-- post details -->

                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">

                                                    <!-- post img -->
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-03.jpg" alt="">
                                                        <span class="post-badge">post</span>
                                                    </div>
                                                    <!-- post img -->

                                                    <!-- post details -->
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                    </div>
                                                    <!-- post details -->

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- trending -->

                                <!-- reviews -->
                                <div class="widget">
                                    <h3>top reviews</h3>

                                    <div class="user-reviews">
                                        <ul>
                                            <li class="review-wrap">
                                                <span class="review-badge bg-green"><i class="fa fa-star"></i>4.5</span>
                                                <div class="wrap">
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                    <span class="name">by john doe</span>
                                                </div>
                                            </li>

                                            <li class="review-wrap">
                                                <span class="review-badge bg-masterd"><i class="fa fa-star"></i>4.5</span>
                                                <div class="wrap">
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                    <span class="name">by john doe</span>
                                                </div>
                                            </li>

                                            <li class="review-wrap">
                                                <span class="review-badge bg-p-green"><i class="fa fa-star"></i>4.5</span>
                                                <div class="wrap">
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                    <span class="name">by john doe</span>
                                                </div>
                                            </li>

                                            <li class="review-wrap">
                                                <span class="review-badge bg-gray"><i class="fa fa-star"></i>4.5</span>
                                                <div class="wrap">
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                    <span class="name">by john doe</span>
                                                </div>
                                            </li>

                                            <li class="review-wrap">
                                                <span class="review-badge bg-orange"><i class="fa fa-star"></i>4.5</span>
                                                <div class="wrap">
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                    <span class="name">by john doe</span>
                                                </div>
                                            </li>

                                            <li class="review-wrap">
                                                <span class="review-badge bg-purpel"><i class="fa fa-star"></i>4.5</span>
                                                <div class="wrap">
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                    <span class="name">by john doe</span>
                                                </div>
                                            </li>

                                            <li class="review-wrap">
                                                <span class="review-badge bg-purpel"><i class="fa fa-star"></i>4.5</span>
                                                <div class="wrap">
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                    <span class="name">by john doe</span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- reviews -->

                                <!-- video posts -->
                                <div class="widget">
                                    <h3>video posts</h3>

                                    <div class="video-posts">
                                        <ul>
                                            <li>
                                                <div class="post style-1">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-01.jpg" alt="">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-02.jpg" alt="">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-03.jpg" alt="">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-04.jpg" alt="">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-05.jpg" alt="">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="post style-1">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-06.jpg" alt="">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- video posts -->
                            </aside>
                        </div>
                        <!-- small sidebar -->

                        <!-- Content -->
                        <div class="col-lg-7 col-md-7 col-sm-9 col-xs-8 r-full-width">

                            <!-- Detail Post Widget -->
                            <div class="post-widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <!-- Secondary Heading -->
                                        <div class="primary-heading">
                                            <h2>technology</h2>
                                        </div>
                                        <!-- Secondary Heading -->

                                        <!-- Post -->
                                        <div class="post style-2 white-bg light-shadow">

                                            <!-- Post Img -->

                                            <?php
                                        //the same post display here
                                        global $post; 
                                        //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'technology',
                                                'posts_per_page'    => 1
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                            ?>
                                                <div class="post-thumb">
                                                    <?php the_post_thumbnail('spc_post_cat',array('class'=>'spc-img-class')); ?>
                                                        <span class="post-badge"><?= the_category(); ?></span>
                                                        <div class="thumb-hover">
                                                            <div class="position-center-center">
                                                                <a href="<?= the_permalink(); ?>" class="fa fa-link"></a>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!-- Post Img -->
                                                <?php endforeach ?>
                                                    <?php wp_reset_query(); ?>

                                                        <!-- Post Detil -->
                                                        <div class="post-content cat-listing">
                                                            <?php
                                        //main post display here
                                        global $post; 
                                        //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'technology',
                                                'posts_per_page'    => 1
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                            ?>

                                                                <h4><a href="<?=the_permalink(); ?>"><?=the_title(); ?></a></h4>
                                                                <p>
                                                                    <?=the_excerpt(); ?>
                                                                </p>
                                                                <?php endforeach ?>
                                                                    <?php wp_reset_query(); ?>

                                                                        <ul class="post-wrap-list">
                                                                            <?php
                                            //main post display here
                                            global $post; 
                                            $i=0;
                                            //post query
                                                $args= array(
                                                    'post_type'         => 'post',
                                                    'post_status'       => 'publish',
                                                    'category_name'     => 'technology',
                                                    'posts_per_page'    => 2
                                                );
                                                $all_posts=get_posts($args);
                                                foreach ($all_posts as $post):setup_postdata($post);
                                                    $i++;
                                                ?>

                                                                                <!-- thumb small post -->
                                                                                <?php if($i!=1) {?>
                                                                                    <li class="post-wrap big-post">
                                                                                        <div class="post-thumb">
                                                                                            <?php the_post_thumbnail('home_thum_page_image',array('class'=>'home-thum-img-class')); ?>
                                                                                        </div>
                                                                                        <div class="post-content">
                                                                                            <h4><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h4>
                                                                                            <ul class="post-meta">
                                                                                                <li><i class="fa fa-clock-o"></i>
                                                                                                    <?= the_time('M,d,Y'); ?>
                                                                                                </li>
                                                                                                <li><i class="fa fa-comments-o"></i>
                                                                                                    <?php comments_popup_link('No Comments','1 comment','%Comments');?>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </li>
                                                                                    <?php } ?>
                                                                                        <!-- thumb small post -->
                                                                                        <?php endforeach ?>
                                                                                            <?php wp_reset_query(); ?>

                                                                        </ul>
                                                        </div>
                                                        <!-- Post Detail -->

                                        </div>
                                        <!-- Post -->

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <!-- Secondary Heading -->
                                        <div class="primary-heading">
                                            <h2>world news</h2>
                                        </div>
                                        <!-- Secondary Heading -->

                                        <!-- Post -->
                                        <div class="post style-2 white-bg light-shadow">

                                            <!-- Post Img -->

                                            <?php
                                        //the same post display here
                                        global $post; 
                                        //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'technology',
                                                'posts_per_page'    => 1
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                            ?>
                                                <div class="post-thumb">
                                                    <?php the_post_thumbnail('spc_post_cat',array('class'=>'spc-img-class')); ?>
                                                        <span class="post-badge"><?= the_category(); ?></span>
                                                        <div class="thumb-hover">
                                                            <div class="position-center-center">
                                                                <a href="<?= the_permalink(); ?>" class="fa fa-link"></a>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!-- Post Img -->
                                                <?php endforeach ?>
                                                    <?php wp_reset_query(); ?>

                                                        <!-- Post Detil -->
                                                        <div class="post-content cat-listing">
                                                            <?php
                                        //main post display here
                                        global $post; 
                                        //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'technology',
                                                'posts_per_page'    => 1
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                            ?>

                                                                <h4><a href="<?=the_permalink(); ?>"><?=the_title(); ?></a></h4>
                                                                <p>
                                                                    <?=the_excerpt(); ?>
                                                                </p>
                                                                <?php endforeach ?>
                                                                    <?php wp_reset_query(); ?>

                                                                        <ul class="post-wrap-list">
                                                                            <?php
                                            //main post display here
                                            global $post; 
                                            $i=0;
                                            //post query
                                                $args= array(
                                                    'post_type'         => 'post',
                                                    'post_status'       => 'publish',
                                                    'category_name'     => 'technology',
                                                    'posts_per_page'    => 2
                                                );
                                                $all_posts=get_posts($args);
                                                foreach ($all_posts as $post):setup_postdata($post);
                                                    $i++;
                                                ?>

                                                                                <!-- thumb small post -->
                                                                                <?php if($i!=1){ ?>
                                                                                    <li class="post-wrap big-post">
                                                                                        <div class="post-thumb">
                                                                                            <?php the_post_thumbnail('home_thum_page_image',array('class'=>'home-thum-img-class')); ?>
                                                                                        </div>
                                                                                        <div class="post-content">
                                                                                            <h4><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h4>
                                                                                            <ul class="post-meta">
                                                                                                <li><i class="fa fa-clock-o"></i>
                                                                                                    <?= the_time('M,d,Y'); ?>
                                                                                                </li>
                                                                                                <li><i class="fa fa-comments-o"></i>
                                                                                                    <?php comments_popup_link('No Comments','1 comment','%Comments');?>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </li>
                                                                                    <?php }; ?>
                                                                                        <!-- thumb small post -->
                                                                                        <?php endforeach ?>
                                                                                            <?php wp_reset_query(); ?>

                                                                        </ul>
                                                        </div>
                                                        <!-- Post Detail -->

                                        </div>
                                        <!-- Post -->

                                    </div>
                                </div>
                            </div>
                            <!-- Detail Post Widget -->

                            <!-- list posts -->
                            <div class="post-widget">

                                <!-- Main Heading -->
                                <div class="primary-heading">
                                    <h2>sports news</h2>
                                </div>
                                <!-- Main Heading -->

                                <!-- List Post -->
                                <div class="p-30 light-shadow white-bg">
                                    <ul class="list-posts">
                                        <?php
                                        //main post display here
                                    global $post; 
                                    $i=0;
                                    //post query
                                    $args= array(
                                        'post_type'         => 'post',
                                        'post_status'       => 'publish',
                                        'category_name'     => 'technology',
                                        'posts_per_page'    => 3
                                    );
                                    $all_posts=get_posts($args);
                                    foreach ($all_posts as $post):setup_postdata($post);
                                        $i++;
                                    ?>

                                            <li class="row no-gutters">

                                                <!-- thumbnail -->
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class="post-thumb">
                                                        <?php the_post_thumbnail('spc_post_cat',array('class'=>'spc-img-class')); ?>
                                                            <span class="post-badge"><?= the_category(); ?></span>
                                                            <div class="thumb-hover">
                                                                <div class="position-center-center">
                                                                    <a href="<?= the_permalink(); ?>" class="fa fa-link"></a>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <!-- thumbnail -->

                                                <!-- post detail -->
                                                <div class="col-sm-8 col-xs-12">
                                                    <div class="post-content">
                                                        <h4><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-user"></i>
                                                                <?= the_author(); ?>
                                                            </li>
                                                            <li><i class="fa fa-clock-o"></i>
                                                                <?= the_time('d,M,Y') ?>
                                                            </li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="fa fa-comments-o"></i>
                                                                <?php comments_popup_link('No Comments','1 comment','%Comments');?>
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            <?= the_excerpt(); ?><a href="<?= the_permalink(); ?>" class="read-more">read more...</a></p>
                                                    </div>
                                                </div>
                                                <!-- post detail -->

                                            </li>
                                            <?php endforeach ?>
                                                <?php wp_reset_query(); ?>
                                    </ul>
                                </div>
                                <!-- List Post -->

                            </div>
                            <!--  list posts -->

                            <!-- Detail list post -->
                            <div class="post-widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <!-- main heading -->
                                        <div class="primary-heading">
                                            <h2>FOOD</h2>
                                        </div>
                                        <!-- main heading -->

                                        <!-- list of features -->
                                        <div class="post style-2 featured-single-post white-bg light-shadow">
                                            <?php
                                        //main post display here
                                            global $post; 
                                            $i=0;
                                            //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'news',
                                                'posts_per_page'    => 1
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                                $i++;
                                            ?>
                                                <div class="post-thumb">
                                                    <?php the_post_thumbnail('spc_post_cat',array('class'=>'spc-img-class')); ?>
                                                        <span class="post-badge"><?= the_category(); ?></span>
                                                        <div class="thumb-hover">
                                                            <div class="position-center-center">
                                                                <a href="<?php the_permalink(); ?>" class="fa fa-link"></a>
                                                            </div>
                                                        </div>
                                                </div>
                                                <?php endforeach ?>
                                                    <?php wp_reset_query(); ?>
                                                        <div class="post-content">
                                                            <?php
                                        //main post display here
                                            global $post; 
                                            $i=0;
                                            //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'news',
                                                'posts_per_page'    => 3
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                                $i++;
                                            ?>
                                                                <h4><a href="<?=the_permalink(); ?>"><?= the_title(); ?></a></h4>
                                                                <?php endforeach ?>
                                                                    <?php wp_reset_query(); ?>
                                                                        <ul class="post-features">
                                                                            <?php
                                        //main post display here
                                            global $post; 
                                            $i=0;
                                            //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'news',
                                                'posts_per_page'    => 4
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                                $i++;
                                            ?>
                                                                                <li>
                                                                                    <?= the_title(); ?>
                                                                                </li>
                                                                                <?php endforeach ?>
                                                                                    <?php wp_reset_query(); ?>
                                                                        </ul>
                                                        </div>

                                        </div>
                                        <!-- list of features -->

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <!-- main heading -->
                                        <div class="primary-heading">
                                            <h2>Health</h2>
                                        </div>
                                        <!-- main heading -->

                                        <!-- list of features -->
                                        <div class="post style-2 featured-single-post white-bg light-shadow">
                                            <?php
                                        //main post display here
                                            global $post; 
                                            $i=0;
                                            //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'news',
                                                'posts_per_page'    => 1
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                                $i++;
                                            ?>
                                                <div class="post-thumb">
                                                    <?php the_post_thumbnail('spc_post_cat',array('class'=>'spc-img-class')); ?>
                                                        <span class="post-badge"><?= the_category(); ?></span>
                                                        <div class="thumb-hover">
                                                            <div class="position-center-center">
                                                                <a href="<?php the_permalink(); ?>" class="fa fa-link"></a>
                                                            </div>
                                                        </div>
                                                </div>
                                                <?php endforeach ?>
                                                    <?php wp_reset_query(); ?>
                                                        <div class="post-content">
                                                            <?php
                                        //main post display here
                                            global $post; 
                                            $i=0;
                                            //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'news',
                                                'posts_per_page'    => 3
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                                $i++;
                                            ?>
                                        <h4><a href="<?=the_permalink(); ?>"><?= the_title(); ?></a></h4>
                                        <?php endforeach ?>
                                            <?php wp_reset_query(); ?>
                                        <ul class="post-features">
                                        <?php
                                        //main post display here
                                            global $post; 
                                            $i=0;
                                            //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'news',
                                                'posts_per_page'    => 4
                                            );
                                            $all_posts=get_posts($args);
                                            foreach ($all_posts as $post):setup_postdata($post);
                                                $i++;
                                            ?>
                                            <li>
                                                <?= the_title(); ?>
                                            </li>
                                            <?php endforeach ?>
                                                <?php wp_reset_query(); ?>
                                        </ul>
                                    </div>

                                        </div>
                                        <!-- list of features -->

                                    </div>

                                </div>
                            </div>
                            <!-- Detail list post -->

                            <!-- add Banner -->
                            <div class="add-banner text-center post-widget p-0">
                                <img src="<?php echo  get_template_directory_uri(); ?>/images/add-3.jpg" alt="">
                            </div>
                            <!-- add Banner -->

                            <!-- post thumbs detail widget -->
                            <div class="post-widget">

                                <!-- Heading -->
                                <div class="primary-heading">
                                    <h2>Fashion</h2>
                                </div>
                                <!-- Heading -->

                                <!-- post details -->
                                <div class="post-detail-wrap white-bg light-shadow p-30">
                                    <div class="row">

                                        <?php
                                        //main post display here
                                            global $post; 
                                            $i=0;
                                            //post query
                                            $args= array(
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
                                                'category_name'     => 'technology',
                                                'posts_per_page'    => 1,
                                                'order'             => 'DESC'
                                            );
                                            $my_result=new WP_Query($args);
                                            if($my_result->have_posts()){
                                                while($my_result->have_posts()):$my_result->the_post();
                                            ?>

                                        <!-- long post -->
                                        <div class="col-lg-6 col-sm-6 col-xs-12 smb-30">
                                            <div class="post style-1">

                                                <!-- Post Img -->
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/post-detail/img-04.jpg" alt="detail">
                                                    <span class="post-badge"><?= the_category(); ?></span>
                                                    <div class="thumb-hover">
                                                        <div class="position-center-center">
                                                            <a href="<?= the_permalink(); ?>" class="fa fa-link"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Img -->

                                                <!-- Post Detail -->
                                                <div class="post-content">
                                                    <h4><a href="<?= the_permalink(); ?>"><?= the_title() ?></a></h4>
                                                    <ul class="post-meta">
                                                        <li><i class="icon-user"></i><?= the_author();?></li>
                                                        <li><i class="icon-clock"></i><?= the_time('d,M,Y'); ?></li>
                                                        <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                        <li><i class="icon-speech-bubble"></i>20</li>
                                                    </ul>
                                                    <p><?= the_excerpt(); ?>
                                                        <a href="<?=the_permalink(); ?>/post-detail.html" class="read-more">read more</a></p>
                                                </div>
                                                <!-- Post Detail -->

                                            </div>
                                        </div>
                                        <!-- long post -->
                                    <?php endwhile;  } ?>

                                        <!-- Post List -->
                                        <div class="col-lg-6 col-sm-6 col-xs-12">
                                            <ul class="post-wrap-list">
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-detail/nav/img-01.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica</li>
                                                            <li><i class="icon-clock"></i>2 Min ago</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-detail/nav/img-02.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica</li>
                                                            <li><i class="icon-clock"></i>2 Min ago</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-detail/nav/img-03.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica</li>
                                                            <li><i class="icon-clock"></i>2 Min ago</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo  get_template_directory_uri(); ?>/images/post-detail/nav/img-04.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica</li>
                                                            <li><i class="icon-clock"></i>2 Min ago</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Post List -->

                                    </div>
                                </div>
                                <!-- post details -->

                            </div>
                            <!-- post thumbs detail widget -->

                            <!-- Gallery Widget -->
                            <div class="post-widget">

                                <!-- Heading -->
                                <div class="primary-heading">
                                    <h2>gallery style</h2>
                                </div>
                                <!-- Heading -->

                                <div class="gallery-widget">

                                    <!-- gallery slides -->
                                    <ul class="gallery-slider" id="gallery-slider">
                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-01.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-02.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-03.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-04.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-05.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-06.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-01.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-02.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-03.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-04.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-05.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/img-06.jpg" alt="">
                                                <div class="thumb-over">
                                                    <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                    <h4><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <!-- gallery slides -->

                                    <!-- gallery thumbs -->
                                    <ul id="gallery-slider-thumb" class="gallery-slider-thumb">
                                        <li data-slideIndex="0">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-01.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="1">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-02.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="2">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-03.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="3">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-04.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="4">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-05.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="5">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-06.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="0">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-01.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="1">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-02.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="2">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-03.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="3">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-04.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="4">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-05.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li data-slideIndex="5">
                                            <a href="<?php echo  get_template_directory_uri(); ?>/#">
                                                <div class="post-thumb">
                                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/gallery/thumbs/img-06.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                    <!-- gallery thumbs -->

                                </div>

                            </div>
                            <!-- Gallery Widget -->

                            <!-- Slider Widget -->
                            <div class="post-widget">

                                <!-- Heading -->
                                <div class="primary-heading">
                                    <h2>most viewed posts</h2>
                                </div>
                                <!-- Heading -->

                                <!-- post slider -->
                                <div class="light-shadow white-bg p-30 slider-post">
                                    <div id="post-slider-2">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-01.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-02.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-03.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-04.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-01.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-02.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-03.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-04.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/post-1/img-01.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>

                                </div>
                                <!-- post slider -->

                            </div>
                            <!-- Slider Widget -->

                            <!-- archieve widget -->
                            <div class="post-widget">

                                <!-- Heading -->
                                <div class="primary-heading">
                                    <h2>archieve posts</h2>
                                </div>
                                <!-- Heading -->

                                <!-- archieve -->
                                <div class="light-shadow white-bg">
                                    <div class="archieve-tabs">

                                        <!-- Tabs Nav -->
                                        <div class="cate-tab-navs">
                                            <ul class="nav-justified">
                                                <li class="active">
                                                    <a href="<?php echo  get_template_directory_uri(); ?>/#january" data-toggle="tab">january</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo  get_template_directory_uri(); ?>/#february" data-toggle="tab">february</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo  get_template_directory_uri(); ?>/#march" data-toggle="tab">march</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo  get_template_directory_uri(); ?>/#april" data-toggle="tab">april</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo  get_template_directory_uri(); ?>/#may" data-toggle="tab">may</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo  get_template_directory_uri(); ?>/#june" data-toggle="tab">june</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo  get_template_directory_uri(); ?>/#july" data-toggle="tab">july</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo  get_template_directory_uri(); ?>/#august" data-toggle="tab">august</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Tabs Nav -->

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade active in" id="january">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                        <div class="post">
                                                            <div class="post-thumb">
                                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/health/img-01.jpg" alt="">
                                                                <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                                <div class="thumb-over">
                                                                    <p><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                                </div>
                                                            </div>

                                                            <ul class="post-meta">
                                                                <li><i class="icon-user"></i>jessica alex</li>
                                                                <li><i class="icon-clock"></i>10 Min ago</li>
                                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                                <li><i class="icon-speech-bubble"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                                        <div class="archieve-list">
                                                            <ul>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">James blake fires the officer who did.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">prison incident follows earlier bollow.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">common persons mistakes should  ignore.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hurbagh loses his mind on sideline.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hinted at murder before cellmate.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">sports is being latest trend in news.</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="february">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                        <div class="post">
                                                            <div class="post-thumb">
                                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/health/img-06.jpg" alt="">
                                                                <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                                <div class="thumb-over">
                                                                    <p><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                                </div>
                                                            </div>

                                                            <ul class="post-meta">
                                                                <li><i class="icon-user"></i>jessica alex</li>
                                                                <li><i class="icon-clock"></i>10 Min ago</li>
                                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                                <li><i class="icon-speech-bubble"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                                        <div class="archieve-list">
                                                            <ul>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">James blake fires the officer who did.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">prison incident follows earlier bollow.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">common persons mistakes should  ignore.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hurbagh loses his mind on sideline.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hinted at murder before cellmate.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">sports is being latest trend in news.</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="march">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                        <div class="post">
                                                            <div class="post-thumb">
                                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/lifestyle/img-06.jpg" alt="">
                                                                <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                                <div class="thumb-over">
                                                                    <p><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                                </div>
                                                            </div>

                                                            <ul class="post-meta">
                                                                <li><i class="icon-user"></i>jessica alex</li>
                                                                <li><i class="icon-clock"></i>10 Min ago</li>
                                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                                <li><i class="icon-speech-bubble"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                                        <div class="archieve-list">
                                                            <ul>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">James blake fires the officer who did.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">prison incident follows earlier bollow.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">common persons mistakes should  ignore.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hurbagh loses his mind on sideline.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hinted at murder before cellmate.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">sports is being latest trend in news.</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="april">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                        <div class="post">
                                                            <div class="post-thumb">
                                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/lifestyle/img-01.jpg" alt="">
                                                                <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                                <div class="thumb-over">
                                                                    <p><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                                </div>
                                                            </div>

                                                            <ul class="post-meta">
                                                                <li><i class="icon-user"></i>jessica alex</li>
                                                                <li><i class="icon-clock"></i>10 Min ago</li>
                                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                                <li><i class="icon-speech-bubble"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                                        <div class="archieve-list">
                                                            <ul>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">James blake fires the officer who did.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">prison incident follows earlier bollow.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">common persons mistakes should  ignore.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hurbagh loses his mind on sideline.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hinted at murder before cellmate.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">sports is being latest trend in news.</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="may">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                        <div class="post">
                                                            <div class="post-thumb">
                                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/sports/img-06.jpg" alt="">
                                                                <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                                <div class="thumb-over">
                                                                    <p><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                                </div>
                                                            </div>

                                                            <ul class="post-meta">
                                                                <li><i class="icon-user"></i>jessica alex</li>
                                                                <li><i class="icon-clock"></i>10 Min ago</li>
                                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                                <li><i class="icon-speech-bubble"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                                        <div class="archieve-list">
                                                            <ul>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">James blake fires the officer who did.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">prison incident follows earlier bollow.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">common persons mistakes should  ignore.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hurbagh loses his mind on sideline.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hinted at murder before cellmate.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">sports is being latest trend in news.</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="june">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                        <div class="post">
                                                            <div class="post-thumb">
                                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/sports/img-01.jpg" alt="">
                                                                <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                                <div class="thumb-over">
                                                                    <p><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                                </div>
                                                            </div>

                                                            <ul class="post-meta">
                                                                <li><i class="icon-user"></i>jessica alex</li>
                                                                <li><i class="icon-clock"></i>10 Min ago</li>
                                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                                <li><i class="icon-speech-bubble"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                                        <div class="archieve-list">
                                                            <ul>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">James blake fires the officer who did.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">prison incident follows earlier bollow.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">common persons mistakes should  ignore.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hurbagh loses his mind on sideline.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hinted at murder before cellmate.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">sports is being latest trend in news.</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="july">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                        <div class="post">
                                                            <div class="post-thumb">
                                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/fashion/img-06.jpg" alt="">
                                                                <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                                <div class="thumb-over">
                                                                    <p><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                                </div>
                                                            </div>

                                                            <ul class="post-meta">
                                                                <li><i class="icon-user"></i>jessica alex</li>
                                                                <li><i class="icon-clock"></i>10 Min ago</li>
                                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                                <li><i class="icon-speech-bubble"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                                        <div class="archieve-list">
                                                            <ul>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">James blake fires the officer who did.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">prison incident follows earlier bollow.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">common persons mistakes should  ignore.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hurbagh loses his mind on sideline.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hinted at murder before cellmate.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">sports is being latest trend in news.</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="august">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                        <div class="post">
                                                            <div class="post-thumb">
                                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/world/img-06.jpg" alt="">
                                                                <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                                <div class="thumb-over">
                                                                    <p><a href="<?php echo  get_template_directory_uri(); ?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                                </div>
                                                            </div>

                                                            <ul class="post-meta">
                                                                <li><i class="icon-user"></i>jessica alex</li>
                                                                <li><i class="icon-clock"></i>10 Min ago</li>
                                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                                <li><i class="icon-speech-bubble"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                                        <div class="archieve-list">
                                                            <ul>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">James blake fires the officer who did.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">prison incident follows earlier bollow.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">common persons mistakes should  ignore.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hurbagh loses his mind on sideline.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">hinted at murder before cellmate.</a></li>
                                                                <li><a href="<?php echo  get_template_directory_uri(); ?>/#">sports is being latest trend in news.</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Tab panes -->

                                    </div>
                                </div>
                                <!-- archieve -->

                            </div>
                            <!-- archieve widget -->

                            <!-- add banner -->
                            <div class="add-banner text-center m-0 p-0">
                                <img src="<?php echo  get_template_directory_uri(); ?>/images/add-3.jpg" alt="">
                            </div>
                            <!-- add banner -->

                        </div>
                        <!-- Content -->
                        <?php echo get_template_part('template-part/sidebar'); ?>

                    </div>
                    <!-- Main Content Row -->

                </div>
            </div>

            <!-- categories posts -->
            <div class="post-widget m-0 white-bg">
                <div class="cate-tab-navs">
                    <div class="container">
                        <ul class="nav-justified">
                            <li class="active"><a data-target="#politics" data-toggle="tab">politics</a></li>
                            <li><a data-target="#technology" data-toggle="tab">technology</a></li>
                            <li><a data-target="#fashion" data-toggle="tab">fashion</a></li>
                            <li><a data-target="#international" data-toggle="tab">international</a></li>
                            <li><a data-target="#admin" data-toggle="tab">admin pick</a></li>
                            <li><a data-target="#top" data-toggle="tab">top posts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="cate-tab-content theme-padding">
                    <div class="container">
                        <div class="tab-content">
                            <div class="tab-pane active fade in" id="politics">
                                <div class="row slider-post">
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/world/img-01.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/world/img-02.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/world/img-03.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/world/img-05.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="technology">
                                <div class="row slider-post">
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/technology/img-05.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/technology/img-02.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/technology/img-03.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/technology/img-04.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="fashion">
                                <div class="row slider-post">
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/fashion/img-05.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/fashion/img-04.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo  get_template_directory_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/fashion/img-03.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/fashion/img-08.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="international">
                                <div class="row slider-post">
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/world/img-08.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/world/img-07.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/fashion/img-06.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/world/img-05.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="admin">
                                <div class="row slider-post">
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/sports/img-08.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/sports/img-07.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/technology/img-08.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/lifestyle/img-08.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top">
                                <div class="row slider-post">
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/technology/img-04.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/lifestyle/img-05.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/technology/img-02.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                    <div class="col-sm-3 col-xs-6">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- post img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo  get_template_directory_uri(); ?>/images/health/img-03.jpg" alt="">
                                                <span class="post-badge">post</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post img -->

                                            <!-- post details -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                                <ul class="post-meta m-0">
                                                    <li><i class="icon-user"></i>jessica</li>
                                                    <li><i class="icon-clock"></i>2 Min ago</li>
                                                </ul>
                                            </div>
                                            <!-- post details -->

                                        </div>
                                        <!-- post -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- categories posts -->

        </main>
        <!-- main content -->

        <?php get_footer(); ?>