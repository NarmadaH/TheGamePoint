
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
    <link rel="stylesheet" href="../../../public/dist/css/style.css" type="text/css">
    <script type="text/javascript" src="../../../public/dist/js/jquery-1.12.3.min.js"></script>
    <link href="../../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../dist/js/uniteam_table.js"></script>
    <script src="../../../public/dist/js/bootstrap.min.js"></script>
    <link href="../../../public/dist/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">



    <title>schedule</title>
</head>
<body>
<?php include 'navBar.php'; ?>
<?php include '../../../public/view/sideBar.php'; ?>

<div class="col-md-12" style="padding-top: 20px;">
    <div class="col-md-2"></div>

    <div class="col-md-10">
    <!--  content block    -->

        <div class="row">
            <div class="tm-section-header section-margin-top1">
                <div class=" col-md-3 ">
                    <hr>
                </div>
                <div class="col-md-6 "><h2 class="tm-section-title">UMiSF Schedule Manager</h2></div>


                <div class=" col-md-3">
                    <hr>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class = "col-lg-1"></div>
                <div>
                    <div class="col-md-10">
                        <div class="tm-about-box-2-text">
                            <h3 class="tm-about-box-2-title" align="center">Inter University Championship</h3>
                            <p class="tm-about-box-2-description gray-text">The Inter University Team Championship will consist of group stage
                            matches between each of the university in the group. Selecting the group ranked no:1 and no:2 teams to go for the final draw. </p>
                            <p class="tm-about-box-2-footer-entry">Event Scheduled to - 13th, 14th May 2016</p>
                            <div class="form-group tm-yellow-gradient-bg text-center">
                                <button
                                    id="entry-school" type="submit" name="entry-school" class="tm-yellow-btn"
                                    onclick="MakeSchedule()">Women's: Generate Schedule
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-1"></div>
            </div>
        </div>




        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button id="xxx" type="button" class="tm-yellow-btn" onclick="showRank()"
                        style="display: none">Ranks
                </button>

                <div id="draw-tables"></div>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button id="xxx" type="button" class="tm-yellow-btn" onclick="showRank()"
                        style="display: none">Ranks
                </button>

                <div id="draw-matches"></div>
            </div>
            <div class="col-md-3"></div>
        </div>




        <!-- End content block    -->
    </div>


    <div class="col-md-2"></div>
</div>


</body>

