<?php $page="events"; require_once './inc/header.php'; 
require_once 'superadmin/MYSQLi/wbtml.php';

if (isset($_GET['event'])) {
    $event = $_GET['event'];
    $event_title = RETURN_URL($event);

    $events = EXECUTE_QUERY(SELECT_WHERE("events", "event_title", $event_title));
    foreach ($events as $event) {
        extract($event);
    }

}



?>



<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="https://cdn.pixabay.com/photo/2017/10/22/09/02/training-2877134__340.jpg" style="background-image: url(https://cdn.pixabay.com/photo/2017/10/22/09/02/training-2877134__340.jpg">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">Event <span>Details</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Event Details</span></li>
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
                                    <img src="assets/img/<?= $event_image; ?>" class="img-fluid" alt="img">
                                </div>
                                <div class="ablog__text ablog__text4">
                                    <div class="ablog__meta ablog__meta4">
                                        <ul>
                                            <li><a><i class="far fa-calendar-check"></i> <?= HUMAN_DATE($event_date); ?> </a></li>
                                            <li><a><i class="far fa-clock"></i> <?= HUMAN_TIME($event_time); ?> </a></li>
                                            <li><a><i class="far fa-map"></i> <?= $event_title; ?> </a></li>
                                        </ul>
                                    </div>
                                    <h3 class="ablog__text--title4 mb-20"><a><?= $event_title; ?></a></h3>
                                    <p class="mb-30"><?= $event_desc;?></p>
                                    <blockquote class="wow fadeInUp">
                                        <p><?= $event_motivation; ?></p>
                                        <p><cite>Office of the SA</cite></p>
                                    </blockquote>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ablog__sidebar mb-50">
                            <div class="widget mb-45 wow fadeInUp">
                                <h3 class="sidebar__widget--title mb-30">Other Events</h3>

                                <?php
                                    $other_events = EXECUTE_QUERY(SELECT_ALL_LIMIT("events", "event_id", 0, 10));
                                    
                                    foreach ($other_events as $other_event) { ?>
                                        <div class="sidebar--widget__post mb-20">
                                            <div class="sidebar__post--thumb">
                                                <a href="<?= FORMAT_URL("./event-details?event=" . $other_event['event_title']); ?>">
                                                    <div class="post__img" data-background="assets/img/<?= $other_event['event_image']; ?>" style="background-image: url(&quot;assets/img/<?= $other_event['event_image']; ?>&quot;);"></div>
                                                </a>
                                            </div>
                                            <div class="sidebar__post--text">
                                                <h4 class="sidebar__post--title"><a href="<?= FORMAT_URL("./event-details?event=" . $other_event['event_title']); ?>"><?= $other_event['event_title']; ?></a></h4>
                                                <span><?= HUMAN_DATE($other_event['event_date']); ?></span>
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