<?php $page="projects"; require_once './inc/header.php';
require_once 'superadmin/MYSQLi/wbtml.php'; ?>

<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="assets/img/slider/GovenorUgwanyi.png" style="background-image: url('assets/img/slider/GovenorUgwanyi.png) width: max-content;">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title text-light">Our <span>Project</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html" style="color: #f7f7f7;">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span style="color: #f7f7f7;">Our Project</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- project area start here -->
    <div class="tp-prjects-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-prjects-tab-menu mb-60">
                        <ul class="nav justify-content-center" id="myTab" role="tablist">
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="IOT-tab" data-bs-toggle="tab" data-bs-target="#iot" type="button" role="tab" aria-controls="profile" aria-selected="false">IOT</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="programming-tab" data-bs-toggle="tab" data-bs-target="#programming" type="button" role="tab" aria-controls="contact" aria-selected="false">PRORAMMING</button>
                            </li> -->

                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab1" data-bs-toggle="tab" data-bs-target="#contact1" type="button" role="tab" aria-controls="contact1" aria-selected="false">Outdoor</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab2" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2" aria-selected="false">Office</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab3" data-bs-toggle="tab" data-bs-target="#contact3" type="button" role="tab" aria-controls="contact3" aria-selected="false">Kitchen</button>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-12">
                    <div class="tp-prjects-tab-content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">

                                <?php
                                    $projects = EXECUTE_QUERY(SELECT_ALL("projects", "project_id"));
                                    foreach ($projects as $project) {
                                        extract($project); ?>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/<?= $project_image; ?>" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle"><?= $handled_by; ?></span>
                                                    <h4 class="tp-project-title"><a href="<?= FORMAT_URL("./project-details?project=" . $project_title); ?>"><?= $project_title; ?></a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="<?= FORMAT_URL("./project-details?project=" . $project_title); ?>"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="iot" role="tabpanel" aria-labelledby="IOT-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-1.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Title</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">WBy</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="tab-pane fade" id="programming" role="tabpanel" aria-labelledby="programming-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-1.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Title</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">WBy</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-1.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Window Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-2.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Kitchen Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-3.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Exterior Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-4.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Bathroom Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-9.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Apartment Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-5.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Floor Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-6.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Ground Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-7.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Market Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-8.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Plumbing Service</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-1.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Window Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-2.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Kitchen Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-3.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Exterior Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-4.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Bathroom Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-9.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Apartment Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-5.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Floor Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-6.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Ground Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-7.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Market Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-8.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Plumbing Service</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-1.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Window Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-2.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Kitchen Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-3.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Exterior Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-4.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Bathroom Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-9.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Apartment Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-5.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Floor Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-6.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Ground Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-7.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Market Cleaning</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <img src="assets/img/project/project-tab-8.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    <span class="tp-project-subtitle">Residential Service</span>
                                                    <h4 class="tp-project-title"><a href="project-details.html">Plumbing Service</a></h4>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- project area end here -->

</main>

<?php require_once './inc/footer.php'; ?>