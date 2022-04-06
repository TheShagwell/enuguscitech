<?php $page="events"; require_once './inc/header.php';
require_once 'superadmin/MYSQLi/wbtml.php'; ?>

<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="assets/img/slider/breadcrumb-bg-1.jpg">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">The <span>Events</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Events</span></li>
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
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black">Upcoming Events</h5>
                        <h2 class="tp-section-title heading-color-black">Events to attend</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                    $events = EXECUTE_QUERY(SELECT_ALL("events", "event_id"));
                    foreach ($events as $event) {
                        extract($event); ?>

                        <div class="col-lg-6">
                            <div class="tp-service-three tp-service-four mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tp-service-three-img">
                                    <img src="assets/img/<?= $event_image; ?>" class="img-fluid" alt="img-not-found">
                                    <div class="tp-service-three-img-icon">
                                        <i class="flaticon-desk"></i>
                                    </div>
                                    <div class="tp-service-three-img-overlay">
                                        <div class="tp-service-three-img-overlay-icon">
                                            <i class="flaticon-desk"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-service-three-text fix">
                                    <h4 class="tp-service-three-title mb-20 heading-color-black-with-hover"><a href="<?= FORMAT_URL("./event-details?event=" . $event_title); ?>"><?= $event_title; ?></a></h4>
                                    <p class="mb-30"><?= SUB_STRING($event_desc); ?></p>
                                    <div class="tp-service-three-text-btn">
                                        <a href="<?= FORMAT_URL("./event-details?event=" . $event_title); ?>" class="yellow-btn"><i class="flaticon-enter"></i> Learn More</a>
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