<?php $page="home"; require_once './inc/header.php';
require_once 'superadmin/MYSQLi/wbtml.php'; ?>

<main>
    <!-- hero area start here -->
    <section class="tp-slider-area-three fix">
        <div class="tp-slider-active swiper-container">
            <div class="swiper-wrapper">
                <div class="tp-single-slider-three tp-slider-height-three d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                    <div class="slide-bg" data-background="assets/img/slider/slider-bg-3.jpg"></div>
                    <div class="slider-img-three">
                        <img src="assets/img/slider/naassom-azevedo-Q_Sei-TqSlc-unsplash.jpg" style="width: 1018x; height: 850px; object-fit: cover;" class="img-fluid tp-about-img-three-second" alt="img-not-found">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tp-slider-three z-index">
                                    <h6 class="tp-slider-three-subtitle" data-animation="fadeInUp" data-delay=".3s"><img src="assets/img/icon/slider-icon-1.png" class="img-fluid" alt="img not found"> Science and Technology Initiative</h6>
                                    <h1 class="tp-slider-three-title" data-animation="fadeInUp" data-delay=".6s">Education, <br>Programming <br>Guaranteed!</h1>
                                    <div class="tp-slider-three-btn" data-animation="fadeInUp" data-delay=".9s">
                                        <a href="about" class="yellow-btn"><i class="flaticon-enter"></i> Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tp-single-slider-three tp-slider-height-three d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                                <div class="slide-bg" data-background="assets/img/slider/slider-bg-3.jpg"></div>
                                <div class="slider-img-three">
                                    <img src="assets/img/slider/slider-img-3.png" class="img-fluid" alt="img not found">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="tp-slider-three z-index">
                                                <h6 class="tp-slider-three-subtitle" data-animation="fadeInUp" data-delay=".3s"><img src="assets/img/icon/slider-icon-1.png" class="img-fluid" alt="img not found"> Fast and efficient service</h6>
                                                <h1 class="tp-slider-three-title" data-animation="fadeInUp" data-delay=".6s">Cleaning <br>Excellence <br>Guaranteed!</h1>
                                                <div class="tp-slider-three-btn" data-animation="fadeInUp" data-delay=".9s">
                                                    <a href="about.html" class="yellow-btn"><i class="flaticon-enter"></i> Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-single-slider-three tp-slider-height-three d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                                <div class="slide-bg" data-background="assets/img/slider/slider-bg-3.jpg"></div>
                                <div class="slider-img-three">
                                    <img src="assets/img/slider/slider-img-3.png" class="img-fluid" alt="img not found">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="tp-slider-three z-index">
                                                <h6 class="tp-slider-three-subtitle" data-animation="fadeInUp" data-delay=".3s"><img src="assets/img/icon/slider-icon-1.png" class="img-fluid" alt="img not found"> Fast and efficient service</h6>
                                                <h1 class="tp-slider-three-title" data-animation="fadeInUp" data-delay=".6s">Cleaning <br>Excellence <br>Guaranteed!</h1>
                                                <div class="tp-slider-three-btn" data-animation="fadeInUp" data-delay=".9s">
                                                    <a href="about.html" class="yellow-btn"><i class="flaticon-enter"></i> Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev slide-prev"><i class="far fa-long-arrow-left"></i></div>
                        <div class="swiper-button-next slide-next"><i class="far fa-long-arrow-right"></i></div>
        </div>
    </section>
    <!-- hero area end here -->

    <!-- feature area start here -->
    <section class="tp-feature-area-three pt-115 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle-three mb-20"> _ _ How We Works _ _</h5>
                        <h2 class="tp-section-title-two color-theme-blue">Empowering Science and Technology<br>Projects in the State</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="tp-feature-three text-center mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tp-feature-three-icon mb-30">
                            <img src="assets/img/icon/feature-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-booking"></i>
                        </div>
                        <div class="tp-feature-three-text">
                            <h4 class="tp-feature-three-title mb-20">Internet of Things (IoT)</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="tp-feature-three text-center mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="tp-feature-three-icon mb-30">
                            <img src="assets/img/icon/feature-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-delivery-box"></i>
                        </div>
                        <div class="tp-feature-three-text">
                            <h4 class="tp-feature-three-title mb-20">Science <br>(From any Level)</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="tp-feature-three text-center mb-30 wow fadeInUp" data-wow-delay="1s">
                        <div class="tp-feature-three-icon mb-30">
                            <img src="assets/img/icon/feature-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-boy"></i>
                        </div>
                        <div class="tp-feature-three-text">
                            <h4 class="tp-feature-three-title mb-20">Tech Programming <br>(AI, ML, Python, Web etc)</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="tp-feature-three text-center mb-30 wow fadeInUp" data-wow-delay="1.3s">
                        <div class="tp-feature-three-icon mb-30">
                            <img src="assets/img/icon/feature-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-cleaning"></i>
                        </div>
                        <div class="tp-feature-three-text">
                            <h4 class="tp-feature-three-title mb-20">Hackaton Programs <br>(The Hunt of the Unelievables in the State)</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end here -->

    <!-- about area start here -->
    <section class="tp-about-area-two position-relative pt-120 pb-85 bg-gray-light">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-md-center">
                <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
                    <div class="tp-about-img-three pt-40 position-relative mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/about/Group-29.jpg" style="width: 490px; height: 603px; object-fit: cover; object-position: center;" class="img-fluid" alt="img-not-found">
                        <img src="assets/img/about/about-img-shape-3.png" class="img-fluid tp-about-img-three-third" alt="img-not-found">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-md-10">
                    <div class="tp-about-text tp-about-text-three mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="section-title-wrapper mb-25">
                            <h5 class="tp-section-subtitle-three mb-20">Purpose of EnuguSciTech Official Website _</h5>
                            <h2 class="tp-section-title-two color-theme-blue">Collaborate with Science and Tech</h2>
                        </div>
                        <p class="mb-40">The Ultimate goal of the Enugu State Government of Science and Technology is to bring together individuals who are experts in their areas of specialization in science and tech projects to the state. We based our believe in getting
                            the best state with World first-class projects in tech boost.</p>
                        <div class="row mb-10">
                            <div class="col-sm-6">
                                <div class="tp-about-service mb-35">
                                    <div class="tp-about-service-icon yellow-circle-shape mb-20">
                                        <i class="flaticon-snowfall"></i>
                                    </div>
                                    <div class="tp-about-service-text">
                                        <h4 class="tp-about-service-text-title mb-15">Science Projects Initiative</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tp-about-service mb-35">
                                    <div class="tp-about-service-icon yellow-circle-shape mb-20">
                                        <i class="flaticon-business-and-trade"></i>
                                    </div>
                                    <div class="tp-about-service-text">
                                        <h4 class="tp-about-service-text-title mb-15">
                                            Progrmming Projects Initiative
                                        </h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end here -->

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

    <!-- service area start here -->
    <section class="tp-service-area-three pt-115 pb-200 bg-gray-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".3s">
                        <h5 class="tp-section-subtitle-three mb-20">_ _ Upcoming Events _ _</h5>
                        <h2 class="tp-section-title-two color-theme-blue">Events to attend</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php 
                    $events = EXECUTE_QUERY(SELECT_ALL_LIMIT("events", "event_id", "0", "4"));
                    foreach ($events as $event) { ?>
                        <div class="col-lg-6">
                            <div class="tp-service-three mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tp-service-three-img">
                                    <img src="assets/img/<?= $event['event_image']; ?>" style="width: 260x; height: 300px; object-fit: cover;" class="img-fluid tp-about-img-three-second" alt="img-not-found">
                                    <!-- <div class="tp-service-three-img-icon">
                                                    <i class="flaticon-house-cleaning"></i>
                                                </div> -->
                                </div>
                                <div class="tp-service-three-text fix">
                                    <h4 class="tp-service-three-title mb-20"><a href="<?= FORMAT_URL("./event-details?event=" . $event['event_title']); ?>"><?= $event['event_title']; ?></a></h4>
                                    <p class="mb-30"><?= SUB_STRING($event['event_desc']); ?></p>
                                    <div class="tp-service-three-text-btn">
                                        <a href="<?= FORMAT_URL("./event-details?event=" . $event['event_title']); ?>" class="yellow-btn"><i class="flaticon-enter"></i> Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php } ?>
    
            </div>
        </div>
    </section>
    <!-- service area end here -->
    <div class="tp-footer-subscribe-area-two position-relative pt-100 pb-100 ">
        <div class="container">
            <div class="tp-footer-subscribe-bg-two theme-yellow-bg pt-30 pb-20 z-index pl-60 pr-60">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-4">
                        <div class="tp-footer-subscribe">
                            <h3 class="tp-footer-subscribe-title">Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="tp-footer-subscribe-form">
                            <form action="" id="subscribe" class="p-0">
                                <div class="tp-footer-subscribe-form-field mb-10">
                                    <input type="email" required id="email" name="email" placeholder="Email Address">
                                    <i class="fal fa-paper-plane"></i>
                                </div>
                                <div class="tp-footer-subscribe-form-btn mb-10">
                                    <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project area start here -->
    <section class="tp-project-area-three pb-90">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="tp-project-title-wrapper wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle-three mb-20">Recent Project _ _</h5>
                        <h2 class="tp-section-title-two color-theme-blue mb-45">Successful Projects Executed</h2>
                        <div class="tp-project-title-btn">
                            <a href="project-details.html" class="yellow-btn"><i class="flaticon-enter"></i> More Project</a>
                        </div>
                    </div>
                </div>

                <?php 
                    $projects = EXECUTE_QUERY(SELECT_ALL_LIMIT("projects", "project_id", "0", "2"));
                    foreach ($projects as $project) { ?>

                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="tp-project-three mb-30 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tp-project-three-img">
                                    <!-- <img src="assets/img/project/project-5.jpg" class="img" alt="img-not-found"> -->
                                    <img src="assets/img/<?= $project['project_image']; ?>" style="width: 413px; height: 413px; object-fit: cover;" class="img-fluid tp-about-img-three-second" alt="img-not-found">
                                    <div class="tp-project-three-img-overlay">
                                        <div class="tp-project-three-img-overlay-text">
                                            <div class="tp-project-three-img-overlay-text-icon">
                                                <a href="assets/img/<?= $project['project_image']; ?>" class="popup-image"><i class="fal fa-plus"></i></a>
                                            </div>
                                            <h4 class="tp-project-three-img-overlay-title"><a href="<?= FORMAT_URL("./project-details?project=" . $project['project_title']); ?>"><?= $project['project_title']; ?></a></h4>
                                            <span><?= $project['handled_by']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                <?php } ?>
                <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="tp-project-three mb-30 wow fadeInUp" data-wow-delay="1s">
                                    <div class="tp-project-three-img">
                                        <img src="assets/img/project/project-7.jpg" class="img" alt="img-not-found">
                                        <div class="tp-project-three-img-overlay">
                                            <div class="tp-project-three-img-overlay-text">
                                                <div class="tp-project-three-img-overlay-text-icon">
                                                    <a href="assets/img/project/project-7.jpg" class="popup-image"><i class="fal fa-plus"></i></a>
                                                </div>
                                                <h4 class="tp-project-three-img-overlay-title"><a href="project-details.html">Kitchen Cleaning</a></h4>
                                                <span>Kitchen Service</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                <!-- <div class="col-xl-8 col-lg-8">
                                <div class="tp-project-three mb-30 wow fadeInUp" data-wow-delay="1.3s">
                                    <div class="tp-project-three-img">
                                        <img src="assets/img/project/project-8.jpg" class="img" alt="img-not-found">
                                        <div class="tp-project-three-img-overlay">
                                            <div class="tp-project-three-img-overlay-text">
                                                <div class="tp-project-three-img-overlay-text-icon">
                                                    <a href="assets/img/project/project-8.jpg" class="popup-image"><i class="fal fa-plus"></i></a>
                                                </div>
                                                <h4 class="tp-project-three-img-overlay-title"><a href="project-details.html">Hospital Cleaning</a></h4>
                                                <span>Hospital Service</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
            </div>
        </div>
    </section>
    <!-- project area end here -->

    <!-- testimonial area start here -->
    <section class="tp-testimonial-area-three pt-115 pb-190 bg-gray-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper text-center mb-55">
                        <h5 class="tp-section-subtitle-three mb-20"> _ _ People's Feedback _ _</h5>
                        <h2 class="tp-section-title-two color-theme-blue">See people's <br>reaction so far</h2>
                    </div>
                </div>
            </div>
            <div class="tp-testimonial-three-shadow common-dots">
                <div class="tp-testimonial-three-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="tp-testimonial-two position-relative swiper-slide">
                            <div class="tp-testimonial-two-author mb-20">
                                <div class="tp-testimonial-two-author-img">
                                    <img src="assets/img/testimonial/muscle-man-smiling.jpg" class="img-fluid" alt="img not found">
                                </div>
                                <div class="tp-testimonial-two-author-text">
                                    <span>Snr. Product Designer <br> Apple Ng</span>
                                    <h4 class="tp-testimonial-two-name">Chijoke Fenna</h4>
                                </div>
                            </div>
                            <p>Enugu State Government in Science and Technology is building the next generation of science and Technology individuals in the future to enhance world best technology</p>
                            <div class="tp-testimonial-two-qoute">
                                <i class="fal fa-quote-left"></i>
                            </div>
                        </div>
                        <div class="tp-testimonial-two position-relative swiper-slide">
                            <div class="tp-testimonial-two-author mb-20">
                                <div class="tp-testimonial-two-author-img">
                                    <img src="assets/img/testimonial/guy_smiling_on_yellow_shirt.png" class="img-fluid" alt="img not found">
                                </div>
                                <div class="tp-testimonial-two-author-text">
                                    <span>Mobile App Dev <br> Genesys</span>
                                    <h4 class="tp-testimonial-two-name">Elvis Okoro</h4>
                                </div>
                            </div>
                            <p>Enugu State Government in Science and Technology is building the next generation of science and Technology individuals in the future to enhance world best technology</p>
                            <div class="tp-testimonial-two-qoute">
                                <i class="fal fa-quote-left"></i>
                            </div>
                        </div>
                        <div class="tp-testimonial-two position-relative swiper-slide">
                            <div class="tp-testimonial-two-author mb-20">
                                <div class="tp-testimonial-two-author-img">
                                    <img src="assets/img/testimonial/stephanie-liverani-Zz5LQe-VSMY-unsplash.jpg" class="img-fluid" alt="img not found">
                                </div>
                                <div class="tp-testimonial-two-author-text">
                                    <span>Special Assistant <br>MTN, Enugu State</span>
                                    <h4 class="tp-testimonial-two-name">Cecilia Duke</h4>
                                </div>
                            </div>
                            <p>Enugu State Government in Science and Technology is building the next generation of science and Technology individuals in the future to enhance world best technology</p>
                            <div class="tp-testimonial-two-qoute">
                                <i class="fal fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination-testimonial slide-dots "></div>
            </div>
        </div>
    </section>
    <!-- testimonial area end here -->

    <!-- cta area start here -->
    <section class="tp-appoint-cta-area blue-dark-bg pt-80 pb-65">
        <div class="container">
            <div class="row align-items-center custom-mar-20">
                <div class="col-xl-2 col-lg-12 custom-pad-20">
                    <div class="tp-appoint wow fadeInUp" data-wow-delay=".2s">
                        <h4 class="tp-appoint-title text-white">Online <br> Appointment </h4>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 custom-pad-20">
                    <form action="" id="appointment" method="post">
                    <div class="row align-items-center custom-mar-20">
                        <div class="col-lg-4 custom-pad-20">
                            <div class="tp-appoint tp-appoint-three wow fadeInUp" data-wow-delay=".4s">
                                <input id="fullname" required name="fullname" type="text" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-lg-4 custom-pad-20">
                            <div class="tp-appoint tp-appoint-three wow fadeInUp" data-wow-delay=".6s">
                                <input type="text" id="phone" required name="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-4 custom-pad-20">
                            <div class="tp-appoint tp-appoint-three select-field-arrow wow fadeInUp" data-wow-delay=".8s">
                                <select name="cat" id="cat" required>
                                    <option value="" disabled selected>Appointment On:</option>
                                    <option value="Project Request">Project Request</option>
                                    <option value="Tech Ideas">Tech Ideas</option>
                                    <option value="Internet Of Things">Internet Of Things</option>
                                    <option value="Tech Related Events">Tech related events</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 custom-pad-20">
                    <div class="tp-appoint tp-appoint-three text-end wow fadeInUp" data-wow-delay="1s">
                        <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Submit Now</button>
                    </div>
                </div>
                    </form>
            </div>
        </div>
    </section>
    <!-- cta area end here -->

    <!-- choose area start here -->
    <!-- <section class="tp-choose-area-three position-relative mt-120 pb-50">
                    <div class="tp-choose-area-three-img">
                        <img src="assets/img/about/about-img-5.jpg" alt="img-not-found">
                        <div class="tp-choose-three-year tp-choose-three-year-responsive mb-50">
                            <div class="tp-choose-three-year-inner">
                                <h3>20 Years</h3>
                                <h4>Succesfully <br>Provide Service</h4>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-end justify-content-center">
                            <div class="col-xl-6 text-end d-xl-block d-none">
                                <div class="tp-choose-three-year mb-50">
                                    <div class="tp-choose-three-year-inner">
                                        <h3>20 Years</h3>
                                        <h4>Succesfully <br>Provide Service</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-10">
                                <div class="tp-choose-three">
                                    <div class="section-title-wrapper mb-25">
                                        <h5 class="tp-section-subtitle-three mb-20">Why Choose Us _ _</h5>
                                        <h2 class="tp-section-title-two color-theme-blue">Find Standard Cleaning <br>with Personal Touch</h2>
                                    </div>
                                    <p class="mb-45">Sed nteger porta vel placerat cra torquent dolor site habitasse elementum disign proin pulvinar class quam socis quam cum quisque ennim praesent anest amet fermentum proin donec massa augue in neque sapien</p>
                                    <div class="row mb-10">
                                        <div class="col-sm-6">
                                            <div class="tp-about-service mb-55">
                                                <div class="tp-about-service-icon yellow-circle-shape mb-20">
                                                    <i class="flaticon-delivery-box"></i>
                                                </div>
                                                <div class="tp-about-service-text">
                                                    <h4 class="tp-about-service-text-title mb-15"><a href="service.html">Online Estimation</a></h4>
                                                    <p>Facilsis veicula hendrerit turp turpis solutat neique dapibus justo rdiculu dapibus no ridiculuy</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="tp-about-service mb-55">
                                                <div class="tp-about-service-icon yellow-circle-shape mb-20">
                                                    <i class="flaticon-gift-box"></i>
                                                </div>
                                                <div class="tp-about-service-text">
                                                    <h4 class="tp-about-service-text-title mb-15"><a href="service.html">Project Discount</a></h4>
                                                    <p>Facilsis veicula hendrerit turp turpis solutat neique dapibus justo rdiculu dapibus no ridiculuy</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="tp-about-service mb-55">
                                                <div class="tp-about-service-icon yellow-circle-shape mb-20">
                                                    <i class="flaticon-video-camera"></i>
                                                </div>
                                                <div class="tp-about-service-text">
                                                    <h4 class="tp-about-service-text-title mb-15"><a href="service.html">Work Monitoring</a></h4>
                                                    <p>Facilsis veicula hendrerit turp turpis solutat neique dapibus justo rdiculu dapibus no ridiculuy</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="tp-about-service mb-55">
                                                <div class="tp-about-service-icon yellow-circle-shape mb-20">
                                                    <i class="flaticon-snowfall"></i>
                                                </div>
                                                <div class="tp-about-service-text">
                                                    <h4 class="tp-about-service-text-title mb-15"><a href="service.html">Satisfied Service</a></h4>
                                                    <p>Facilsis veicula hendrerit turp turpis solutat neique dapibus justo rdiculu dapibus no ridiculuy</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
    <!-- choose area end here -->

    <!-- blog area start here -->
    <section class="tp-blog-area-three bg-gray-light pt-115">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper mb-55 text-center wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle-three mb-20">_ _ Recent Article_ _</h5>
                        <h2 class="tp-section-title-two color-theme-blue">Stay Connect Our Journal <br>Every Moment</h2>
                    </div>
                </div>
            </div>
            <div class="row">

            <?php 
                $articles = EXECUTE_QUERY(SELECT_ALL_LIMIT("articles", "article_id", "0", "3"));
                foreach ($articles as $article) { ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="tp-blog-three mb-30 wow fadeInUp" data-wow-delay=".4s">
                            <div class="tp-blog-three-img">
                                <a href="<?= FORMAT_URL("./article-details?article=" . $article['article_title']); ?>"><img src="assets/img/<?= $article['article_image']; ?>" style="width: 410px; height: 390px; object-fit: cover;" class="img-fluid tp-about-img-three-second" alt="img-not-found"></a>
                            </div>
                            <div class="tp-blog-three-text">
                                <div class="tp-blog-three-text-meta">
                                    <a href="<?= FORMAT_URL("./article-details?article=" . $article['article_title']); ?>">By Admin</a>
                                    <span>*</span>
                                    <a href="<?= FORMAT_URL("./article-details?article=" . $article['article_title']); ?>"><?= HUMAN_DATE($article['created_at']); ?></a>
                                </div>
                                <h4 class="tp-blog-three-title mb-15"><a href="<?= FORMAT_URL("./article-details?article=" . $article['article_title']); ?>"><?= $article['article_title'];?></a></h4>
                                <div class="tp-blog-three-link">
                                    <a href="<?= FORMAT_URL("./article-details?article=" . $article['article_title']); ?>"><i class="flaticon-enter"></i> Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <?php } ?>
            </div>
        </div>
        <!-- contact area start here -->
        <div class="tp-contact-cta-area position-relative pt-85">
            <div class="container">
                <div class="tp-contact-cta-bg">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="tp-contact-cta border-r-1 wow fadeInUp" data-wow-delay=".3s">
                                <div class="tp-contact-cta-inner">
                                    <div class="tp-contact-cta-inner-icon">
                                        <i class="flaticon-home"></i>
                                    </div>
                                    <div class="tp-contact-cta-inner-text">
                                        <span>Office Address</span>
                                        <h5>Enugu State Government </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="tp-contact-cta border-r-2 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tp-contact-cta-inner justify-content-center">
                                    <div class="tp-contact-cta-inner-icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <div class="tp-contact-cta-inner-text">
                                        <span>SMS Only</span>
                                        <h5><a href="+234(0)902384748">+234(0)902384748</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-contact-cta wow fadeInUp" data-wow-delay=".9s">
                                <div class="tp-contact-cta-inner justify-content-end">
                                    <div class="tp-contact-cta-inner-icon">
                                        <i class="flaticon-email-1"></i>
                                    </div>
                                    <div class="tp-contact-cta-inner-text">
                                        <span>Email Address</span>
                                        <h5><a href="mailto:info@enugustate.com">info@enugustate.com</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end here -->
    </section>
    <!-- blog area end here -->

</main>

<?php require_once './inc/footer.php'; ?>