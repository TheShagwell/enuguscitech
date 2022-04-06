<?php

require_once 'MYSQLi/wbtml.php';

?>

<?php require_once './inc/header.php'; ?>

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content content-full">
                    <!-- Overview -->
                    <h2 class="font-w300 mt-4 mb-3">Projects</h2>
                    <div class="row">
                      
                        <div class="col-sm-12 col-lg-12 invisible" data-toggle="appear" data-timeout="150">
                            <div class="block block-rounded block-fx-pop text-center">
                                <div class="block-content block-content-full d-flex justify-content-center align-items-center">
                                    <div>
                                        <a class="link-fx text-primary font-size-h1 font-w600" href="javascript:void(0)"><?= GET_TOTAL('projects'); ?></a>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted mt-1"> Projects
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END Overview -->

                    <!-- Events -->

                    <div class="d-flex justify-content-between align-items-center mt-6 mb-3">
                        <h2 class="font-w300 mb-0">Projects</h2>
                        <button type="button" class="btn btn-primary btn-sm btn-primary btn-rounded px-3" onclick="Dashmix.block('open', '#dm-add-domain');">
                            <i class="fa fa-plus mr-1"></i> Add Project
                        </button>
                    </div>
                    <div class="overflow-hidden">
                        <div id="dm-add-domain" class="block block-rounded d-none bg-body-dark animated fadeIn">
                            <div class="block-header bg-white-25">
                                <h3 class="block-title">Add a new project</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-question"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                            <div class="block-content block-content-full">
                                <form action="" method="POST" id="project" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" required class="form-control mb-3" name="title" id="title" placeholder="Enter project title">

                                        <input type="text" required class="form-control mb-3" name="handled" id="handled" placeholder="Who did the project?">

                                        <input type="text" required class="form-control mb-3" name="category" id="category" placeholder="Enter project category e.g Technology, Arts etc">

                                        <input type="date" required class="form-control mb-3" name="date" id="time" placeholder="Enter when project was completed">
                                        
                                        <textarea name="desc" id="desc" required class="form-control mb-3" placeholder="Description about the project"></textarea>

                                        <input type="file" name="image" id="image" required class="form-control">
                                        <span class="text-center float-right">Add customized image for the project</span>

                                        <button class="btn btn-primary mt-5" type="submit">Add Project</button>

                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                
                    <?php 
                        $projects = EXECUTE_QUERY(SELECT_ALL("projects", "project_id"));
                        
                        if (!empty($projects)) {
                            foreach ($projects as $project) { ?>

                            <div class="block block-rounded block-fx-pop mb-2 invisible" data-toggle="appear" data-timeout="300">
                                <div class="block-content block-content-full border-left border-3x border-info">
                                    <div class="d-md-flex justify-content-md-between align-items-md-center">
                                        <div class="p-1 p-md-3">
                                            <h3 class="h4 font-w700 mb-1"><?= $project['project_title']; ?></h3>
                                            <p class="font-size-sm text-muted mb-0">
                                            Date: <i><?= HUMAN_DATE($project['created_at']); ?></i>
                                            </p>
                                        </div>
                                        <div class="p-1 p-md-3">
                                            <a class="btn btn-sm btn-alt-primary btn-rounded px-3 mr-1 my-1" href="./single-project?project_id=<?= $project['project_id'];; ?>">
                                                <i class="fa fa-eye mr-1"></i> View project
                                            </a>

                                            <a class="btn btn-sm btn-alt-success btn-rounded px-3 mr-1 my-1" href="./edit-project?id=<?= $project['project_id'];; ?>">
                                                    <i class="fa fa-cog mr-1"></i> Edit Project
                                                </a>
                                                
                                            <a class="btn btn-sm btn-alt-danger btn-rounded px-3 my-1" data-id="<?= $project['project_id']; ?>" onclick="deleteproject(this)">
                                                <i class="fa fa-times mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php } } else { ?>
                            <h2>No Project</h2>
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
        <script src="./js/add.js"></script>
        <script src="./js/actions.js"></script>
    </body>
</html>
