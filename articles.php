<?php $page="articles"; require_once './inc/header.php';
require_once 'superadmin/MYSQLi/wbtml.php'; ?>

<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="assets/img/SA.png" style="background-image: url('assets/img/SA.png) width: max-content;">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title text-light">Our <span>Articles</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html" style="color: #f7f7f7;">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span style="color: #f7f7f7;">Articles</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- service area start here -->
    <section class="tp-service-area-three pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".3s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black">Our Articles</h5>
                        <h2 class="tp-section-title heading-color-black">Our articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">

            <?php
                $articles = EXECUTE_QUERY(SELECT_ALL("articles", "article_id"));
                foreach ($articles as $article) {
                    extract($article); ?>

                <div class="col-lg-6">
                    <div class="tp-service-three tp-service-four mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="tp-service-three-img">
                            <img src="assets/img/<?= $article_image; ?>" class="img-fluid" alt="img-not-found">
                        </div>
                        <div class="tp-service-three-text fix">
                            <h4 class="tp-service-three-title mb-20 heading-color-black-with-hover"><a href="<?= FORMAT_URL("./article-details?article=" . $article_title); ?>"><?= $article_title; ?></a></h4>
                            <p class="mb-30"><?= SUB_STRING($article_desc); ?></p>
                            <div class="tp-service-three-text-btn">
                                <a href="<?= FORMAT_URL("./article-details?article=" . $article_title); ?>" class="yellow-btn"><i class="flaticon-enter"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            <?php } ?>
                
            </div>
        </div>
    </section>
    <!-- service area end here -->

   <!-- brand area start here -->
   <div class="brand-area blue-dark-bg pt-100 pb-100">
        <div class="container">
            <div class="brand-active-two swiper-container">
                <div class="swiper-wrapper">
                    <div class="brand-wrapper-two text-center swiper-slide wow fadeInUp" data-wow-delay=".3s" data-swiper-autoplay="5000">
                        <img src="assets/img/brand/Enugu_State_Government.png" style="width: 80px; height: 80px;" class="img-fluid" alt="logo not found">
                    </div>
                    <div class="brand-wrapper-two text-center swiper-slide wow fadeInUp" data-wow-delay=".6s" data-swiper-autoplay="5000">
                        <img src="assets/img/brand/Enugu_State_Government.png" style="width: 80px; height: 80px;" class="img-fluid" alt="logo not found">
                    </div>
                    <div class="brand-wrapper-two text-center swiper-slide wow fadeInUp" data-wow-delay=".9s" data-swiper-autoplay="5000">
                        <img src="assets/img/brand/Enugu_State_Government.png" style="width: 80px; height: 80px;" class="img-fluid" alt="logo not found">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end here -->

</main>

<?php require_once './inc/footer.php'; ?>