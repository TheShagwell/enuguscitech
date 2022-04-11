<?php

require_once 'MYSQLi/wbtml.php';

?>

<?php require_once './inc/header.php'; ?>

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content content-full">
                    <!-- Overview -->
                    <h2 class="font-w300 mt-4 mb-3">Subscribed Emails</h2>
                    <div class="row">
                      
                        <div class="col-sm-12 col-lg-12 invisible" data-toggle="appear" data-timeout="150">
                            <div class="block block-rounded block-fx-pop text-center">
                                <div class="block-content block-content-full d-flex justify-content-center align-items-center">
                                    <div>
                                        <a class="link-fx text-primary font-size-h1 font-w600" href="javascript:void(0)"><?= GET_TOTAL('emails'); ?></a>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted mt-1"> Emails
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END Overview -->

                    <!-- Appointments -->
                
                    <?php 
                        $emails = EXECUTE_QUERY(SELECT_ALL("emails", "email_id"));
                        
                        if (!empty($emails)) {
                            foreach ($emails as $email) { extract($email); ?>

                            <div class="block block-rounded block-fx-pop mb-2 invisible" data-toggle="appear" data-timeout="300">
                                <div class="block-content block-content-full border-left border-3x border-warning">
                                    <div class="d-md-flex justify-content-md-between align-items-md-center">
                                        <div class="p-1 p-md-3">
                                            <h3 id="email" class="h4 font-w700 mb-1"><?= $email; ?></h3>
                                            <p class="font-size-sm text-muted mb-0">
                                            Date: <i><?= HUMAN_DATE($created_at); ?></i>
                                            </p>
                                        </div>
                                        <div class="p-1 p-md-3">
                                                
                                            <a class="btn btn-sm btn-alt-warning btn-rounded px-3 my-1" data-email="<?= $email; ?>" onclick="copyEmail(this)">
                                                <i class="fa fa-copy mr-1"></i> Copy
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php } } else { ?>
                            <h2>No Emails</h2>
                    <?php } ?>

                    

                    <!-- END Event -->
                </div>

                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer">
                <div class="content py-0">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                            Developed <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://www.worldbraintechnology.com" target="_blank">World Brain Technology</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">Enugu State Science and Technology</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Dashmix JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/dashmix.core.min.js"></script>

        <!--
            Dashmix JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_js/main/app.js
        -->
        <script src="assets/js/dashmix.app.min.js"></script>
        <script src="./js/copy.js"></script>
    </body>
</html>
