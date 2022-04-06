<?php

require_once 'MYSQLi/wbtml.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $results = EXECUTE_QUERY(SELECT_WHERE("projects", "project_id", $id));
    foreach ($results as $result) {
        extract($result);
    }
}

?>

<?php require_once './inc/header.php'; ?>

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content content-full">

                    <!-- Event -->
                    <div class="d-flex justify-content-between align-items-center mt-6 mb-3">
                        <h2 class="font-w300 mb-0">Edit Project</h2>
                    </div>
                    <div class="overflow-hidden">
                        <div id="dm-add-event" class="block block-rounde bg-body-dark animated fadeIn">
                            <div class="block-header bg-white-25">
                                <h3 class="block-title">Edit project</h3>
                            </div>
                            <div class="block-content block-content-full">
                            <form action="" method="POST" id="editproject" enctype="multipart/form-data">
                                    <div class="form-group">

                                        <input type="hidden" id="id" name="id" value="<?= $project_id; ?>">

                                        <input type="text" required class="form-control mb-3" name="title" id="title" value="<?= $project_title; ?>" placeholder="Enter project title">

                                        <input type="text" required class="form-control mb-3" name="handled" id="handled" value="<?= $handled_by; ?>" placeholder="Who did the project?">

                                        <input type="text" required class="form-control mb-3" name="category" id="category" value="<?= $project_cat; ?>" placeholder="Enter project category e.g Technology, Arts etc">

                                        <input type="date" value="<?= $date_completed; ?>" required class="form-control mb-3" name="date" id="date" placeholder="Enter when project was completed">
                                        
                                        <textarea name="desc" id="desc" required class="form-control mb-3" placeholder="Description about the project"><?= $project_desc; ?></textarea>

                                        <input type="file" name="image" id="image" required class="form-control">
                                        <span class="text-center float-right"><?= $project_image; ?></span>

                                        <button class="btn btn-primary mt-5" type="submit">Edit Project</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

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
        <script src="./js/edit-project.js"></script>
    </body>
</html>
