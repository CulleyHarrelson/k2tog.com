<?php
$GLOBALS['title'] = 'Culley Harrelson UX Research Portfolio';
require_once('header.php');
?>
<div class="container">

    <h1 class="mt-5 h3">Portfolio</h1>

    <p>
        Please visit my <a
            href="https://github.com/CulleyHarrelson">github</a> page.
    </p>
</div>
<?php
require_once('footer.php');
return;
?>

<div class="container">

    <h1 class="mt-5 h3">Portfolio</h1>

    <p>
        Welcome to my data portfolio! This page is intended to compliment my <a
            href="https://github.com/CulleyHarrelson">github</a> page.
    </p>

    <div class="row mb-5">

        <div class="col-sm">
            <!--  notebooks {{{ -->
            <div class="card">
                <img src="portfolio/jupyter.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Notebooks</h5>
                    <p class="card-text">
                        Notebooks contain live code, equations, visualizations,
                        and text.  This example shows an export of the <a
                        href="https://github.com/CulleyHarrelson/GeneralSocialSurvey">GeneralSocialSurvey
                        Essential Variable</a> jupyter notebook in github.  It was written in
                        python, uses pandas for the data pipeline, and Seaborn is used for plotting graphs.
                    </p>
                    <a class="btn btn-primary" href="/GSS-Essential-Variables.html" role="button">View Notebook</a>

                </div>
            </div>
            <!-- }}} -->
        </div>
        <div class="col-sm">
            <!--  ETL {{{ -->
            <div class="card">
                <img src="portfolio/warehouse.png" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ETL</h5>
                    <p class="card-text">
ETL comes in many forms. This notebook extracts JSON data and log data from the
locally "saved world" files from Minecraft Java Edition.
                    </p>
                    <a class="btn btn-primary" href="/MinecraftStats.html" role="button">View Notebook</a>

                </div>
            </div>
            <!-- }}} -->
        </div>
        <div class="col-sm">
            <!--  ec2 {{{ -->
            <div class="card">
                <img src="portfolio/ec2.png" width="90%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cloud Services</h5>
                    <p class="card-text">
                        I specialize in data engineering on unix systems, including FreeBSD,
                        Amazon Linux, Google Linux, Debian, macOS, and RedHat. This website is hosted
                        on my private <a href="https://aws.amazon.com/pm/ec2/">AWS EC2</a> instance. I have worked in
                        Google environments for several years and
                        I am prepared for GCP deployments as well.
                    </p>
                </div>
            </div>
            <!-- }}} -->
        </div>

    </div>

    <div class="row mb-5">
        <div class="col-sm">
            <!--  Data Modeling {{{ -->
            <div class="card">
                <img src="portfolio/erd.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Data Modeling</h5>
                    <p class="card-text">
                        Creation of conceptual and logical data models in addition to business process modeling
                    </p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#erdModal">
                        View ERD
                    </button>

                    <div class="modal fade" id="erdModal" tabindex="-1" role="dialog"
                        aria-labelledby="interpretingModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="interpretingModalLabel">Entity Relationship Diagram</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-fluid" src="portfolio/erd.png" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- }}} -->
        </div>
        <div class="col-sm">
            <!--  TPM {{{ -->
            <div class="card">
                <img src="portfolio/rasci.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Technical Program Management</h5>
                    <p class="card-text">
                        Managing teams projects and programs. Software tooling capability analysis.
                    </p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rasci">
                        View RACI
                    </button>

                    <div class="modal fade" id="rasci" tabindex="-1" role="dialog"
                        aria-labelledby="interpretingModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="interpretingModalLabel">Tables RASCI Matrix</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-fluid" src="portfolio/rasci.png" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- }}} -->
        </div>
        <div class="col-sm">
            <!--  Front-End Engineering {{{ -->
            <div class="card">
                <img src="portfolio/ux.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Front-End Engineering</h5>
                    <p class="card-text">
                        This responsive website was built by hand using php, html, css and Bootstrap.
                        The source can be found in github.
                    </p>
                    <a class="btn btn-primary" href="https://github.com/CulleyHarrelson/k2tog.com" role="button">View
                        Source</a>
                </div>
            </div>
            <!-- }}} -->
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-sm">
            <!--  BigQuery ML {{{ -->
            <div class="card">
                <img src="portfolio/bqml.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BigQuery ML &amp; Kaggle</h5>
                    <p class="card-text">
                        This is an older portfolio article describing the use of BigQuery ML for entering into a
                        kaggle.com competition.
                    </p>

                    <a class="btn btn-primary" target="_new" href="bqml.php" role="button">Project Description</a>

                </div>
            </div>
            <!-- }}} -->
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
        </div>
    </div>

</div>
<?php
require_once('footer.php');
?>
