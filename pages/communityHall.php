<?php
require "../includes/config.php";
require pathOf('/includes/navbar.php');
?>
<!--================Forum Breadcrumb Area =================-->
<section class="doc_banner_area search-banner-light">
    <div class="container">
        <div class="doc_banner_content">
            <form action="#" class="header_search_form">
                <div class="header_search_form_info">
                    <div class="form-group">
                        <div class="input-wrapper">
                            <h1>Community Halls</h1>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="page_breadcrumb">
    <div class="container custom_container">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= urlOf('') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Community Hall</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--================End Forum Breadcrumb Area =================-->

<section class="blog_top_post_area sec_pad bg_color">
    <div class="container">
        <div class="row blog_top_post flex-row-reverse shadow">
            <div class="col-lg-7 p_top_img">
                <img class="p_img" src="img/blog-grid/top_post.jpg" alt="">
            </div>
            <div class="col-lg-5 p-0">
                <div class="b_top_post_content">
                    <div class="post_tag">
                        <a href="#">9 Min Read</a>
                        <a class="c_blue" href="#">WordPress</a>
                    </div>
                    <a href="#">
                        <h3>10 WordPress Security Issues And How to Fix Them</h3>
                    </a>
                    <p>Tinkety tonk old fruit bodge on your bike mate car boot my good sir jolly good such a fibber up the kyver golly gosh David, naff chap.!</p>
                    <a href="#" class="learn_btn">Continue Reading<i class="arrow_right"></i></a>
                    <div class="media post_author">
                        <div class="round_img">
                            <img src="img/blog-grid/ansley.jpg" alt="">
                        </div>
                        <div class="media-body author_text">
                            <h4>Jason Response</h4>
                            <div class="date">Sep 14, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doc_blog_grid_area">
    <div class="blog_grid_inner bg_color">
        <div class="container">
            <ul class="nav blog_tab">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Updates</a>
                </li>
                <li class="nav-item cat-woocommerce">
                    <a class="nav-link" href="#">WooCommerce</a>
                </li>
                <li class="nav-item cat-startups">
                    <a class="nav-link" href="#">Startups</a>
                </li>
                <li class="nav-item cat-laravel">
                    <a class="nav-link" href="#">Laravel</a>
                </li>
                <li class="nav-item cat-wordpress">
                    <a class="nav-link" href="#">WordPress</a>
                </li>
                <li class="nav-item cat-megento">
                    <a class="nav-link" href="#">Megento</a>
                </li>
                <li class="nav-item cat-startups">
                    <a class="nav-link" href="#">Startups</a>
                </li>
                <li class="nav-item cat-Docy">
                    <a class="nav-link" href="#">Docy</a>
                </li>
                <li class="nav-item cat-others">
                    <a class="nav-link" href="#">Others</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row blog_grid_tab">
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp">
                    <img src="img/blog-grid/blog_grid_post1.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">18 Min Read</a>
                            <a class="c_blue" href="#">WordPress</a>
                        </div>
                        <a href="blog-single.html">
                            <h4 class="b_title">Is Your Store Safe From Magento Killer?</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_1.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Jason Response</h4>
                                <div class="date">Sep 14, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/blog-grid/blog_grid_post2.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">18 Min Read</a>
                            <a class="cat-Docy orange" href="#">Docy</a>
                        </div>
                        <a href="blog-single.html">
                            <h4 class="b_title">70 Best Startups You Need to Watch Out for</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_2.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Druid Wensleydale</h4>
                                <div class="date">Sep 14, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.4s">
                    <img src="img/blog-grid/blog_grid_post3.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">10 Min Read</a>
                            <a class="cat-laravel green" href="#">Laravel</a>
                        </div>
                        <a href="blog-single.html">
                            <h4 class="b_title">Create Conditional Logic Forms & Publish</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_3.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Douglas Lyphe</h4>
                                <div class="date">Nov 10, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/blog-grid/blog_grid_post4.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">18 Min Read</a>
                            <a class="cat-woocommerce" href="#">WooCommerce</a>
                        </div>
                        <a href="blog-single.html">
                            <h4 class="b_title">How to Use Forms for Enhancing UX In WordPress</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_4.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Indigo Violet</h4>
                                <div class="date">March 23, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.4s">
                    <img src="img/blog-grid/blog_grid_post5.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">10 Min Read</a>
                            <a class="cat-link cat-megento" href="#">Megento</a>
                        </div>
                        <a href="blog-single.html">
                            <h4 class="b_title">Create A WordPress Multi Step Form With weForms</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_5.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Niles Peppertrout</h4>
                                <div class="date">Oct 12, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.6s">
                    <img src="img/blog-grid/blog_grid_post6.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="blog-single.html">14 Min Read</a>
                            <a class="cat-laravel" href="#">Laravel</a>
                        </div>
                        <a href="#">
                            <h4 class="b_title">The Grand Ecommerce Giveaway Worth</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_6.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Hanson Deck</h4>
                                <div class="date">Sep 17, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doc_action_area_three">
    <img class="p_absolute shadows" src="img/blog-grid/shadow_action.png" alt="">
    <img class="p_absolute b_man" src="img/blog-grid/man.png" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="action_content">
                    <h2>Want to read more about your favourite <span>topic?</span></h2>
                    <p>Get regular updates in your inbox</p>
                </div>
            </div>
            <div class="col-lg-7">
                <form action="#" class="footer_subscribe_form action_subscribe_form">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email Address">
                        <button class="s_btn" type="submit">Subcribe Now <i class="arrow_right"></i></button>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            I agree to the Docy Terms & Conditions
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="doc_blog_grid_area_two">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp">
                    <img src="img/blog-grid/blog_grid_post7.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">18 Min Read</a>
                            <a class="c_blue" href="#">WordPress</a>
                        </div>
                        <a href="#">
                            <h4 class="b_title">Create A WordPress Multi Step Form With weForms</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_1.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Jason Response</h4>
                                <div class="date">Sep 14, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/blog-grid/blog_grid_post8.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">18 Min Read</a>
                            <a class="orange" href="#">Docy</a>
                        </div>
                        <a href="#">
                            <h4 class="b_title">How to Create GDPR Consent Form In WordPress</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_2.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Druid Wensleydale</h4>
                                <div class="date">Sep 14, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.4s">
                    <img src="img/blog-grid/blog_grid_post9.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">10 Min Read</a>
                            <a class="cat-laravel" href="#">Laravel</a>
                        </div>
                        <a href="#">
                            <h4 class="b_title">Create Conditional Logic Forms & Publish</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_3.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Douglas Lyphe</h4>
                                <div class="date">Nov 10, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.3s">
                <a href="#" class="doc_border_btn all_doc_btn">Load More<i class="arrow_right"></i></a>
            </div>
        </div>
    </div>
</section>

<?php

require pathOf('includes/footer.php');
require pathOf('includes/scripts.php');
require pathOf('includes/pageend.php');

?>