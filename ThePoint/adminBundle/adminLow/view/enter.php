<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
    <link rel="stylesheet" href="../../../public/dist/css/style.css" type="text/css">
    <script type="text/javascript" src="../../../public/dist/js/jquery-1.12.3.min.js"></script>
    <link href="../../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../dist/js/uniteam_table.js"></script>
    <script src="../dist/js/jspdf.min.js"></script>
    <script src="../../../public/dist/css/bootstrap.min.css"></script>

    <link href="../../../public/dist/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">


    <title>Logged In Page</title>
</head>

<body>
<?php include 'navBar.php'; ?>
<?php include '../../../public/view/sideBar.php'; ?>


<div class="col-md-12" style="padding-top: 20px;">
    <div class="col-md-2"></div>

    <div class="col-md-10">
        <div class="row">
            <div class="tm-section-header section-margin-top1 hidden-print">
                <div class=" col-md-3 ">
                    <hr>
                </div>
                <div class="col-md-6 hidden-print"><h2 class="tm-section-title">UMiSF 2016</h2></div>

                <div class=" col-md-3">
                    <hr>

                </div>
            </div>
        </div>

        <div>
            <center><img src="../dist/images/umisf.jpg" align="center" alt="image"></center>
        </div>
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <center><h3>Project Chairpersons</h3></center>
                    <center><p >Sakmal Kariyawasam (Men's Captain) : 0718486623</p>
                    <p >Manoj Wijerathna (Men's Vice Captain) : 0718789453</p>
                    <p >Achini Herath (Women's Captain) : 0717519485</p>
                    <p >Thilini Nadeera (Women's Vice Captain) : 0712384956</p></center>

                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div class="col-md-2"></div>


</div>


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
            <br>
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

</body>