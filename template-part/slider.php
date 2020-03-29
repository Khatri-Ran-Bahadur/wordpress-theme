<!-- Banner slider -->
    <div class="banner-slider">
        
        <!-- slider main slides -->
        <div id="ninja-slider" class="ninja-slider">
            <div class="slider-inner">
                <ul>
                    <?php 
                      global $post;
                      $args=  array('post_per_page'=>-1,'post_type'=>'slider-item','page'=>$paged,'order'=>'DESC');
                      $allInfo=get_posts(); 

                      foreach ($allInfo as $post): setup_postdata($post);

                        $bannerImageURL=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slider-item');

                    ?>
                    <li>
                        <a class="ns-img" href="<?php echo  $bannerImageURL[0]; ?>"></a>
                        <!-- caption -->
                        <div class="caption-holder">
                            <div class="container p-relative">
                                <div class="caption">
                                    <span>lifestyle</span>
                                    <h2><a href="<?php the_permalink(); ?>"><?= the_title(); ?></a></h2>
                                    <div class="post-meta">
                                        <span><i class="icon-user"></i><?= the_author(); ?></span>
                                        <span><i class="icon-clock"></i>10 Min ago</span>
                                        <span><i class="fa fa-thumbs-o-up"></i>20</span>
                                        <span><i class="icon-speech-bubble"></i><?php comments_popup_link('No Comments','1 comment','%Comments');?></span>
                                    </div>
                                    <p><?= the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- caption -->
                    </li>

                <?php endforeach ?>
                    
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
        <!-- slider main slides -->
        
        <!-- Banner Thumnail -->
        <div class="banner-thumbnail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6 pull-right">
                        <div id="thumbnail-slider">
                            <div class="inner">
                                <ul class="post-wrap-list">

                                     <?php 
                                      global $post;
                                      $args=  array('post_per_page'=>-1,'post_type'=>'slider-item','page'=>$paged,'order'=>'DESC');
                                      $allInfo=get_posts(); 

                                      foreach ($allInfo as $post): setup_postdata($post);

                                        $thumbnailImageURL=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slider-item-featured');

                                    ?>

                                    <li class="active">
                                        <div class="post-wrap small-post">

                                            <div class="post-thumb">
                                                <img src="<?php echo  $thumbnailImageURL[0]; ?>" alt="post">
                                            </div>
                                            <div class="post-content">
                                                <h4><a href="<?php echo  get_template_directory_uri(); ?>/#"><?= the_title(); ?></a></h4>
                                                <ul class="post-meta">
                                                    <li><i class="icon-clock"></i>10 Min ago</li>
                                                    <li><i class="icon-speech-bubble"></i>20</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!-- Banner Thumnail -->

    </div>
    <!-- Banner slider -->