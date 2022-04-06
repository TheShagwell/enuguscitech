<?php $page="projects"; require_once './inc/header.php'; 
require_once 'superadmin/MYSQLi/wbtml.php';

if (isset($_GET['project'])) {
    $project = $_GET['project'];
    $project_title = RETURN_URL($project);

    $projects = EXECUTE_QUERY(SELECT_WHERE("projects", "project_title", $project_title));
    foreach ($projects as $project) {
        extract($project);
    }

}



?>  

<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="https://cdn.pixabay.com/photo/2020/03/18/06/54/smartphone-4942918__340.jpg" style="background-image: url(https://cdn.pixabay.com/photo/2020/03/18/06/54/smartphone-4942918__340.jpg">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">Project <span>Details</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Project Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- project details area start here -->
    <section class="tp-services-details-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="tp-faqs-left">
                        <div class="tp-faqs-left-sidebar mb-30">
                            <h4 class="tp-faqs-left-sidebar-title">Project Info</h4>
                            <ul>
                                <li>By : <span><?= $handled_by; ?></span></li>
                                <li>Date : <span><?= HUMAN_DATE($date_completed); ?></span></li>
                                <li>Category : <span><?= $project_cat; ?></span></li>
                            </ul>
                        </div>
                        <div class="tp-faqs-left-img mb-30">
                            <img src="assets/img/<?= $project_image; ?>" class="img" alt="img not found">
                        </div>
                        <div class="tp-faqs-left-sidebar tp-services-sidebar mb-30">
                            <h4 class="tp-faqs-left-sidebar-title">Categories...</h4>
                            <ul>
                                <li><a>Technology <i class="fas fa-arrow-circle-right"></i></a></li>
                                <li><a>Education <i class="fas fa-arrow-circle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="tp-service-details">
                        <h2 class="tp-section-title heading-color-black translate-y--10 mb-10"><?= $project_title; ?></h2>
                        <div class="tp-service-details-img mb-30 position-relative">
                            <img src="assets/img/<?= $project_image; ?>" alt="img not found">
                        </div>
                        <p class="mb-25"><?= $project_desc; ?></p>
                        
                        <h3>Project Preview</h3>
                        <div class="tp-service-details-img mb-30 position-relative">
                            <img src="assets/img/<?= $project_image; ?>" alt="img not found">
                            <div class="tp-service-details-img-overlay">
                                <div class="tp-service-details-img-overlay-icon">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=OBMkGV_wdjI"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project details area end here -->

    <!-- project details area start here -->
    <section class="tp-project-details-area tp-prjects-tab-content pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper-two mb-55 text-center wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black">Some Completed Project</h5>
                        <h2 class="tp-section-title heading-color-black">Every Project is Different <br>Every Client special</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                    $other_projects = EXECUTE_QUERY(SELECT_ALL_LIMIT("projects", "project_id", 0, 3));
                    foreach ($other_projects as $other_project) { ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="tp-project z-index mb-30 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tp-project-img">
                                    
                                    <div class="" style="background-image: url(&quot;assets/img/<?= $other_project['project_image']; ?>&quot;); background-size: cover; background-position: center; width: 100%; height: 300px;"></div>
                                </div>
                                <div class="tp-project-text">
                                    <div class="tp-project-text-content">
                                        <span class="tp-project-subtitle"><?= $other_project['project_cat']; ?></span>
                                        <h4 class="tp-project-title"><a href="<?= FORMAT_URL("./project-details?project=" . $other_project['project_title']); ?>"><?= $other_project['project_title']; ?></a>   </h4>
                                    </div>
                                    <div class="tp-project-text-icon">
                                        <a href="<?= FORMAT_URL("./project-details?project=" . $other_project['project_title']); ?>"><i class="fal fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php } ?>
            
            </div>
        </div>
    </section>
    <!-- project details area end here -->

</main>

<?php require_once './inc/footer.php'; ?>