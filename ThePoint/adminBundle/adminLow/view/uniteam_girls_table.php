<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
    <link rel="stylesheet" href="../../../public/dist/css/style.css" type="text/css">
    <script type="text/javascript" src="../../../public/dist/js/jquery-1.12.3.min.js"></script>
    <link href="../../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../dist/js/uniteam_table.js"></script>
    <script src="../dist/js/jspdf.min.js"></script>
    <script src="../../../public/dist/js/bootstrap.min.js"></script>
    <link href="../../../public/dist/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">


    <title>uniteam_girls_table</title>
</head>
<body onload="loadTeams()">
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
                <div class="col-md-6 hidden-print"><h2 class="tm-section-title">University Girls Teams</h2></div>


                <div class=" col-md-3">
                    <hr>
                </div>
            </div>
        </div>

        <form role="form" class="col-lg-12">
            <div class="container col-lg-12 hidden-print">
                <div  style="padding: 20px" id="uni-girls-teams" class="panel panel-primary hidden-print"></div>
            </div>
        </form>

        <div id="message-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <h2 style="text-align: center;">Players</h2>
                    <div class="panel panel-info" style="margin: 20px;" id="players-modal"></div>
                </div>
            </div>
        </div>

        <div style="margin: 20px;" id="players-modal1"></div>

        <div id="perfomance-message-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <h2 style="text-align: center;">Past Performances</h2>
                    <div class="panel panel-success" style="margin: 20px;" id="perfomance-modal"></div>
                </div>
            </div>
        </div>

        <div id="point-scheme-modal" class="modal fade" role="dialog">
            <div class="modal-dialog hidden-print">
                <div class="modal-content">
                    <h2 style="text-align: center;">Point Scheme</h2>
                    <div class="panel panel-success" style="margin: 20px;" id="scheme-modal"></div>
                </div>
            </div>
        </div>


        <div class="hidden-print">
            <button class="btn btn-xs btn-primary" type="button" onclick="rankTeams()" style="display: none"
            <span class="glyphicon glyphicon-pencil"></span>
            <h2> Generate Rank</h2></button></td>';
        </div>

        <div class="col-md-12">
            <div class="col-md-3">

            </div>
            <div class="col-md-6 hidden-print">
                <div class="form-group tm-yellow-gradient-bg text-center">
                    <button id="makeDraw" type="button" class="tm-yellow-btn" onclick="rankTeams()">Generate Ranking
                        Points
                    </button>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>

        <div id="message-modal-success" class="modal fade" role="dialog">
            <div class="modal-dialog hidden-print">
                <div class="modal-content">
                    <h2 style="text-align: center; color:red;"  >Success</h2>
                    <div style="margin: 20px;" id="message-modal-content" class = "panel panel-danger"></div>
                </div>
            </div>
        </div>

        <div id="successModal" class="modal fade" role="dialog" data-animation="fade" data-animationspeed="300"
             data-closeBGclick="true">
            <div id="entry-modal2 " class="modal-dialog">
                <div class="modal-content" id="sucessForm">
                    <h2 align="center">Success</h2>
                    <br>
                    <p align="center">Points were calculated for each team depending on their past performances. Please click the GENERATE TEAM RANKS button to proceed</p>
                    <center>
                        <button type="button" class="btn btn-danger" onclick="window.opener=null; window.close(); return false;" />><i class="glyphicon "></i> Okay
                        </button>
                    </center>
                    <br>
                </div>
            </div>
        </div>

        <div class="col-md-12 hidden-print">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="form-group tm-yellow-gradient-bg text-center">
                    <button id="makeranks" type="button" class="tm-yellow-btn" onclick="RankEachTeams()">Generate Team
                        Ranks
                    </button>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>


        <div class="col-md-12 hidden-print">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <button id="makeranks" type="button" class="tm-yellow-btn" onclick="showRank()"
                        style="display: none">Ranks
                </button>

                <div id="rank-table"></div>
            </div>
            <div class="col-md-1"></div>
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


        <div class="col-md-12" class="padding-bottom: 50px; hidden-print" style="bo">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="draw-final"></div>
            <div class="col-md-2"></div>
        </div>

        

    </div>


</div>

</body>
