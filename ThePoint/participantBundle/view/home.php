<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
    <link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script type='text/javascript' src="../../public/dist/js/jquery-1.12.3.min.js"></script>
    <script type='text/javascript' src="../../public/dist/js/bootstrap.min.js"></script>

    <title>home</title>
</head>
<body>

<?php include '../../public/view/navBar.php'; ?>

<!----------------------------------------------------------------------------------------------------->


<div id="sliderFrame" style="padding-top: 100px;">
    <div id="slider">

        <img src="../dist/image/slider-1.jpg"/>
        <img src="../dist/image/slider-2.jpg"/>
        <img src="../dist/image/slider-3.jpg"/>
        <img src="../dist/image/slider-4.jpg"/>
        <img src="../dist/image/slider-new1.jpg"/>
        <img src="../dist/image/slider-new4.jpg"/>
        <img src="../dist/image/slider-new2.jpg"/>
        <img src="../dist/image/slider-8.JPG"/>
        <img src="../dist/image/slider-9%20.JPG"/>
        <img src="../dist/image/slider-new3.JPG"/>
        <img src="../dist/image/slider-10%20.JPG"/>
        <img src="../dist/image/slider-11%20.JPG"/>
        <img src="../dist/image/new-12.jpg"/>

    </div>
    <div id="htmlcaption" style="display: none;">
        <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
    </div>
</div>


<div class="section-margin-top">
    <div class="row">
        <div class="tm-section-header">
            <div class="col-lg-3 col-md-2 col-sm-3">
                <hr>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-6"><h2 class="tm-section-title">University of Moratuwa International
                    Shuttlers’ Fest</h2></div>
            <div class="col-lg-3 col-md-2 col-sm-3">
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="tm-banner-text">
                <div>
                    <p class="tm-about-box-2-description">It is a great pleasure to announce that the University of
                        Moratuwa International Shuttlers’ Fest (UMiSF) will be held for the SIXTH consecutive year
                        organized by the Badminton team of University of Moratuwa in collaboration with the division of
                        Physical Education. The event will starts on 6th of May 2016 in the New Gymnasium of University
                        of Moratuwa running over 11 days and concluding on 16th of May 2016 and a number of invitee
                        teams from foreign universities are scheduled to compete in this tournament.</p>

                    <p class="tm-about-box-2-description">It is with great honor that we invite you to take part in this
                        event to create goodwill and develop relationships with fellow sportsman from all over the
                        country and also your neighboring countries while availing the opportunity to excel and showcase
                        your talents in an international badminton arena.</p>
                </div>


                <div class="tm-tours-box-1-link">
                    <div class="tm-tours-box-1-link-left">
                        COUNTDOWN BEGINS !!
                    </div>
                    <a class="tm-tours-box-1-link-right">
                        10 days
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="tm-black-bg">
    <div class="container">
        <div class="row">
            <p class="tm-copyright-text">Copyright &copy; BadmintonMora

                | Designed by <a rel="nofollow" href="http://www.templatemo.com" target="_parent">A.N.Herath</a></p>
        </div>
    </div>
</footer>


<div id="successModal" class="modal fade" role="dialog" data-animation="fade" data-animationspeed="300"
     data-closeBGclick="true">
    <div id="entry-modal2 " class="modal-dialog">
        <div class="modal-content" id="sucessForm">
            <h2 align="center">Success</h2>
            <br>
            <p align="center">Logged in successfully.</p>
            <center>
                <button type="button"
                        class="btn btn-danger"><i class="glyphicon "></i> Okay
                </button>
            </center>
        </div>
    </div>
</div>

<div id="failModal" class="modal fade" role="dialog" data-animation="fade" data-animationspeed="300"
     data-closeBGclick="true">
    <div id="entry-modal2 " class="modal-dialog">
        <div class="modal-content" id="sucessForm">
            <h2 align="center">Failed</h2>
            <br>
            <p align="center"> Logged in failure, please check your username/email and password again</p>
            <center>
                <button type="button"
                        class="btn btn-danger"><i class="glyphicon "></i> Okay
                </button>
            </center>
        </div>
    </div>
</div>


<?php
if (isset($_GET["logged"])) {
    if (($_GET["logged"] == 1)) {
        echo "<script>
            $(window).load(function () {
                $('#successModal').modal('show');
            });
        </script>";
    }
} ?>

<?php
if (isset($_GET["logged"])) {
    if (($_GET["logged"] == 0)) {
        echo "<script>
            $(window).load(function () {
                $('#failModal').modal('show');
            });
        </script>";
    }
} ?>
<!--------------------------------------------------------------------------------------------->


</body>

<script src="../dist/js/js-image-slider.js" type="text/javascript"></script>