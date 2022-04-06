<?php $page="articles"; require_once './inc/header.php'; 
require_once 'superadmin/MYSQLi/wbtml.php';

if (isset($_GET['article'])) {
    $article = $_GET['article'];
    $article_title = RETURN_URL($article);

    $articles = EXECUTE_QUERY(SELECT_WHERE("articles", "article_title", $article_title));
    foreach ($articles as $article) {
        extract($article);
    }

}



?> 

<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="https://cdn.pixabay.com/photo/2017/07/31/18/34/magazine-2559842__340.jpg" style="background-image: url(https://cdn.pixabay.com/photo/2017/07/31/18/34/magazine-2559842__340.jpg">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">Article <span>Details</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Article Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- blog details area start here -->
    <section class="blog-details-area pt-120 pb-70">
        <div class="container">
            <div class="tp-custom-container-box">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog__details--wrapper mr-50 mb-50">
                            <div class="ablog ablog-4 mb-55">
                                <div class="ablog__img wow fadeInUp">
                                    <img src="assets/img/<?= $article_image; ?>" class="img-fluid" alt="img">
                                </div>
                                <div class="ablog__text ablog__text4">
                                    <div class="ablog__meta ablog__meta4">
                                        <ul>
                                            <li><a href="blog-details.html"><i class="far fa-calendar-check"></i> <?= HUMAN_DATE($created_at); ?> </a></li>
                                            <li><a href="blog-details.html"><i class="far fa-user"></i> Admin </a></li>
                                            <!-- <li><a href="blog-details.html"><i class="fal fa-comments"></i> No Comments</a></li> -->
                                        </ul>
                                    </div>
                                    <h3 class="ablog__text--title4 mb-20"><a href="blog-details.html"><?= $article_title; ?></a></h3>
                                    <p class="mb-30"><?= $article_desc; ?></p>
                                    

                                </div>
                            </div>

                            <!-- <div class="post-comments mb-95 wow fadeInUp">
                                <div class="post-comment-title mb-40">
                                    <h3>3 Comments</h3>
                                </div>
                                <div class="latest-comments">
                                    <ul>
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/blog/b11.jpg" class="img-fluid" alt="img">
                                                </div>
                                                <div class="comments-text">
                                                    <div class="avatar-name">
                                                        <h5>David Angel Makel</h5>
                                                        <span class="post-meta">October 26, 2020</span>
                                                    </div>
                                                    <p>The bee's knees bite your arm off bits and bobs he nicked it gosh gutted mate blimey, old off his nut argy bargy vagabond buggered dropped.</p>
                                                    <a href="#" class="comment-reply"><i class="fal fa-thumbs-up"></i> Like</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

                            <!-- <div class="post-comment-form wow fadeInUp">
                                <h4>Leave a Reply </h4>
                                <span>Your email address will not be published.</span>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="post-input">
                                                <textarea placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="post-input">
                                                <input type="text" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="post-input">
                                                <input type="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="post-input">
                                                <input type="text" placeholder="Website (Optional)">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="post-check mb-40">
                                                <input type="checkbox">
                                                <span>Save my name, email, and website in this browser for the next time I comment.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Send Message</button>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ablog__sidebar mb-50">
                            <div class="widget wow fadeInUp">
                                <div class="sidebar--widget__search mb-45">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widget mb-45 wow fadeInUp">
                                <h3 class="sidebar__widget--title mb-30">Recent Articles </h3>

                                <?php
                                    $other_article = EXECUTE_QUERY(SELECT_ALL_LIMIT("articles", "article_id", 0, 3));
                                    foreach ($other_article as $other_article) { ?>

                                        <div class="sidebar--widget__post mb-20">
                                            <div class="sidebar__post--thumb">
                                                <a href="<?= FORMAT_URL("./article-details?article=" . $other_article['article_title']); ?>">
                                                    <div class="post__img" data-background="assets/img/<?= $other_article['article_image']; ?>" style="background-image: url(&quot;assets/img/<?= $other_article['article_image']; ?>&quot;);"></div>  
                                                </a>
                                            </div>
                                            <div class="sidebar__post--text">
                                                <h4 class="sidebar__post--title"><a href="<?= FORMAT_URL("./article-details?article=" . $other_article['article_title']); ?>"><?= $other_article['article_title']; ?></a></h4>
                                                <span><?= HUMAN_DATE($other_article['created_at']); ?></span>
                                            </div>
                                        </div>
                                        
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details area end here -->

</main>

<?php require_once './inc/footer.php'; ?>