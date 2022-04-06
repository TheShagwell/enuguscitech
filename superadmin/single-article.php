<?php
require_once 'MYSQLi/wbtml.php';

if (!isset($_GET['article_id'])) {
    header('Location: ./');
    exit;
} else {
    $id = $_GET['article_id'];

    $articles = EXECUTE_QUERY(SELECT_WHERE("articles", "article_id", $id));
    foreach ($articles as $article) {
        extract($article);
    }
}

?>

<?php require_once './inc/header.php'; ?>

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content content-full">
            
                    <!-- project -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2 class="font-w300 mb-0"><?= $article_title; ?></h2>
                        <a href="<?= FORMAT_URL('../article-details?' . $article_title); ?>" class="btn btn-primary btn-sm btn-primary btn-rounded px-3">
                            <i class="fa fa-link mr-1"></i> Visit Article
                        </a>
                    </div>

                    <div class="mb-3 rounded shadow" style="background-image: url(../assets/img/service/fine-girl-studying-with-laptop.jpeg); width: 100%; height: 400px; background-size: cover; background-position: center;"></div>

                    <div class="block block-rounded block-fx-pop mb-2 invisible" data-toggle="appear" data-timeout="300">
                        <div class="block-content block-content-full border-left border-3x border-info">
                            <div class="d-md-flex justify-content-md-between align-items-md-center">
                                <div class="p-1 p-md-3">
                                    <h3 class="h4 font-w700 mb-1"><?= $article_title; ?></h3> <hr />
                                    <p class="font-size-sm mb-2"><?= $article_desc; ?></p>
                                    <p class="font-size-sm text-muted mb-0">
                                    Date Completed: <i><?= HUMAN_DATE($created_at); ?></i>
                                    </p>
                                </div>
                                <div class="p-1 p-md-3">
                                    <a class="btn btn-sm btn-alt-danger btn-rounded px-3 my-1" data-id="<?= $article_id; ?>" onclick="deleteArticle(this)">
                                        <i class="fa fa-times mr-1"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <!-- END Project -->
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
        <script src="./js/actions.js"></script>
    </body>
</html>
