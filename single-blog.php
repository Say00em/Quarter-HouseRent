<?php
/*
Template Name: Single Quarter Blog Page
*/
?>

<?php get_header(); ?>

<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:info@synexdigital.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@synexdigital.com</a></li>
                                <li><a href="#"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li class="d-none">
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- header-top-btn -->
                                        <div class="header-top-btn">
                                            <a href="<?php echo home_url('/contact-us');?>">Add Listing</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix d-none">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class="menu-icon"><a href="<?php echo home_url(); ?>">Home</a></li>
                                        <li class="menu-icon"><a href="<?php echo home_url('/about'); ?>">About</a></li>
                                        <li class="menu-icon"><a href="<?php echo home_url('/properties'); ?>">Property</a></li>
                                        <li class="menu-icon"><a href="<?php echo home_url('/blogs'); ?>">Blogs</a></li>
                                        <li><a href="<?php echo home_url('/contact-us'); ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->


    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="<?Php echo home_url();?>">Home</a></li>
                    <li><a href="<?php echo home_url('/about');?>">About</a></li>
                    <li><a href="<?php echo home_url('/properties');?>">Property</a></li>
                    <li><a href="<?php echo home_url('/blog');?>">Blogs</a></li>
                    <li><a href="<?php echo home_url('/contact-us');?>">Contact</a></li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="<?php echo get_template_directory_uri(); ?>/assets/img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Blog Details</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- PAGE DETAILS AREA START (blog-details) -->
    <div class="ltn__page-details-area ltn__blog-details-area mb-120">
        <div class="container">
            <div class="row">
                <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            $blog_category = get_post_meta(get_the_ID(), '_blog_category', true);
                            $blog_author = get_post_meta(get_the_ID(), '_blog_author', true);
                            $blog_date = get_post_meta(get_the_ID(), '_blog_date', true);
                            $short_descrp = get_post_meta(get_the_ID(), '_short_descrp', true);
                            $blog_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                ?>
                <div class="col-lg-8">
                    <div class="ltn__blog-details-wrap">
                        <div class="ltn__page-details-inner ltn__blog-details-inner">
                            <img src="<?php echo esc_url($blog_image); ?>" alt="Image" class="mb-4">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="#"><?php echo esc_html($blog_category);?></a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="ltn__blog-title"><?php the_title();?></h2>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>By: <?php echo esc_html($blog_author);?></a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i><?php echo esc_html($blog_date);?>
                                    </li>
                                    <!-- <li>
                                        <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                    </li> -->
                                </ul>
                            </div>
                            <p><?php the_content();?></p>     
                        </div>
                        <!-- blog-tags-social-media -->
                        <div class="ltn__blog-tags-social-media mt-80 row">
                            <div class="ltn__tagcloud-widget col-lg-8">
                                <h4>Releted Tags</h4>
                                <ul>
                                    <li>
                                        <a href="#">Popular</a>
                                    </li>
                                    <li>
                                        <a href="#">Business</a>
                                    </li>
                                    <li>
                                        <a href="#">ux</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media text-right text-end col-lg-4">
                                <h4>Social Share</h4>
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    
                                    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <!-- prev-next-btn -->
                        <div class="ltn__prev-next-btn row mb-50">
                            <div class="blog-prev col-lg-6">
                                <h6>Prev Post</h6>
                                <h3 class="ltn__blog-title"><a href="#">Tips On Minimalist</a></h3>
                            </div>
                            <div class="blog-prev blog-next text-right text-end col-lg-6">
                                <h6>Next Post</h6>
                                <h3 class="ltn__blog-title"><a href="#">Less Is More</a></h3>
                            </div>
                        </div>
                        <hr>
        
                        <!-- comment-area -->
                        <!-- <div class="ltn__comment-area mb-50">
                            <div class="ltn-author-introducing clearfix">
                                <div class="author-img">
                                    <img src="img/blog/author.jpg" alt="Author Image">
                                </div>
                                <div class="author-info">
                                    <h6>Written by</h6>
                                    <h2>Rosalina D. William</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation is enougn for today.</p>
                                </div>
                            </div>
                            <h4 class="title-2">03 Comments</h4>
                            <div class="ltn__comment-inner">
                                <ul>
                                    <li>
                                        <div class="ltn__comment-item clearfix">
                                            <div class="ltn__commenter-img">
                                                <img src="img/testimonial/1.jpg" alt="Image">
                                            </div>
                                            <div class="ltn__commenter-comment">
                                                <h6><a href="#">Adam Smit</a></h6>
                                                <span class="comment-date">20th May 2020</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                <a href="#" class="ltn__comment-reply-btn"><i class="icon-reply-1"></i>Reply</a>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="img/testimonial/3.jpg" alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <span class="comment-date">21th May 2020</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <a href="#" class="ltn__comment-reply-btn"><i class="icon-reply-1"></i>Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="ltn__comment-item clearfix">
                                            <div class="ltn__commenter-img">
                                                <img src="img/testimonial/4.jpg" alt="Image">
                                            </div>
                                            <div class="ltn__commenter-comment">
                                                <h6><a href="#">Adam Smit</a></h6>
                                                <span class="comment-date">25th May 2020</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                <a href="#" class="ltn__comment-reply-btn"><i class="icon-reply-1"></i>Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <hr>
                        <!-- comment-reply -->
                        <!-- <div class="ltn__comment-reply-area ltn__form-box mb-60---">
                            <h4 class="title-2">Post Comment</h4>
                            <form action="#">
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea placeholder="Type your comments...."></textarea>
                                </div>
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" placeholder="Type your name....">
                                </div>
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" placeholder="Type your email....">
                                </div>
                                <div class="input-item input-item-website ltn__custom-icon">
                                    <input type="text" name="website" placeholder="Type your website....">
                                </div>
                                <label class="mb-0 input-info-save"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                <div class="btn-wrapper">
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><i class="far fa-comments"></i> Post Comment</button>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area blog-sidebar ltn__right-sidebar">
                        <!-- Author Widget -->
                        <div class="widget ltn__author-widget">
                            <div class="ltn__author-widget-inner text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Image">
                                <h5><?php echo esc_html($blog_author);?></h5>
                                <small>Broker/Property Agent</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis distinctio, odio, eligendi suscipit reprehenderit atque.</p>
                                <div class="ltn__social-media">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        
                                        <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Social Media Widget -->
                        <div class="widget ltn__social-media-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
                            <div class="ltn__social-media-2">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- Tagcloud Widget -->
                        <div class="widget ltn__tagcloud-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Popular Tags</h4>
                            <ul>
                                <li><a href="#">Popular</a></li>
                                <li><a href="#">desgin</a></li>
                                <li><a href="#">ux</a></li>
                                <li><a href="#">usability</a></li>
                                <li><a href="#">develop</a></li>
                                <li><a href="#">icon</a></li>
                                <li><a href="#">Car</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Repairs</a></li>
                                <li><a href="#">Auto Parts</a></li>
                                <li><a href="#">Oil</a></li>
                                <li><a href="#">Dealer</a></li>
                                <li><a href="#">Oil Change</a></li>
                                <li><a href="#">Body Color</a></li>
                            </ul>
                        </div>
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src="img/banner/2.jpg" alt="#"></a>
                        </div>
                        <!-- Instagram Widget -->
                        <div class="widget ltn__instagram-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Instagram Feeds</h4>
                            <div class="ltn__instafeed ltn__instafeed-grid insta-grid-gutter"></div>
                        </div>
                        
                    </aside>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </div>
    </div>
    <!-- PAGE DETAILS AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking for a dream home?</h1>
                            <p>We can help you realize your dream of a new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="<?php echo esc_url(home_url('/properties'));?>">Explore Properties <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
        <?php get_footer(); ?>  
    <!-- FOOTER AREA END -->

    </div>
<!-- Body main wrapper end -->

</body>
</html>
