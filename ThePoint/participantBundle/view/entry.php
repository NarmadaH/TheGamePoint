<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
    <link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="../dist/js/entry.js"></script>
    <script type='text/javascript' src="../../public/dist/js/jquery-1.12.3.min.js"></script>
    <script type='text/javascript' src="../../public/dist/js/bootstrap.min.js"></script>
    <script type='text/javascript' src="../../public/dist/js/jquery-1.12.3.min.js"></script>
    <script type='text/javascript' src="../../public/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script type='text/javascript' src="../../public/dist/js/jquery-1.12.3.min.js"></script>
    <script type='text/javascript' src="../../public/dist/js/bootstrap.min.js"></script>

    <script type='text/javascript' src="../dist/js/validator.js"></script>



    <title>entry</title>
</head>
<body>

<?php include '../../public/view/navBar.php'; ?>

<div class="container">
    <button data-display="modalWindow2" data-animation="fade" data-animationspeed="300" data-closeBGclick="true"
            id="modalButton2" style="display: none">Here1
    </button>
    <br>

    <!--Check for error -->
</div>

<div class="row">
    <div class="tm-section-header section-margin-top1" style="padding-top: 50px;">
        <div class=" col-md-3 ">
            <hr>
        </div>
        <div class="col-md-6 "><h2 class="tm-section-title">UMiSF Tournaments</h2></div>
        <div class=" col-md-3">
            <hr>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div>
            <div class="col-md-4">
                <img src="../dist/image/school-entry.JPG" alt="image" class="tm-about-box-2-img ">
            </div>
            <div class="col-md-8">
                <div class="tm-about-box-2-text">
                    <h3 class="tm-about-box-2-title">Inter School Championship</h3>
                    <p class="tm-about-box-2-description gray-text">The Inter School Championship is held for the 9th
                        consecutive year. The age categories for the inter school champianship is under 11, 13, 15, 17
                        and 19. The players can participate for singles, doubles and mix doubles events. A player can
                        compete in maximum of 3 events - 1 single, 1 double and 1 mix double. </p>
                    <p class="tm-about-box-2-footer-entry">Entry Deadline - 29th April 2016</p>
                    <div class="form-group tm-yellow-gradient-bg text-center">
                        <button
                            id="entry-school" type="submit" name="entry-school" class="tm-yellow-btn"
                            onclick="showSchoolEntry()">entry
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div>
            <div class="col-md-4">
                <img src="../dist/image/entry-uni.JPG" alt="image" class="tm-about-box-2-img ">
            </div>
            <div class="col-md-8">
                <div class="tm-about-box-2-text">
                    <h3 class="tm-about-box-2-title">Inter University Championship</h3>
                    <p class="tm-about-box-2-description gray-text">The University Championship is held for the 6th
                        consecutive year. The tounament comprise of team events for girl's and boy's teams. And
                        individual events- singles, doubles and mix doubles. A player can compete in the team event and
                        in any two individual events of his/her choice out of singles, doubles and mix doubles. </p>
                    <p class="tm-about-box-2-footer-entry">Entry Deadline - 29th April 2016</p>
                    <div class="form-group tm-yellow-gradient-bg text-center">
                        <button
                            id="entry" type="submit" name="submit" class="tm-yellow-btn" onclick="showUniEntry()">entry
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Entry Form--->
<div id="request-entry"></div>

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
    <div id="entry-modal3" class="modal-dialog">
        <div class="modal-content" id="sucessForm">
            <h2 align="center">Success</h2>
            <br>
            <p align="center">Entry foam submitted successfully.</p>
            <p align="center">Please visit the website again for more updates on the tournament</p>
            <center>
                <button type="button" formaction=""
                        class="btn btn-danger"><i class="glyphicon "></i> Okay
                </button>
            </center>
        </div>
    </div>

</div>

<!--------university entry---------->
<!--<div id="modalWindow3" class="col-md-8 portBox">-->
<div id="modalWindow8" class="modal fade" role="dialog" data-animation="fade" data-animationspeed="300"
     data-closeBGclick="true">
    <div id="entry-modal3" class="modal-dialog">
        <div class="modal-content" id="myform">
            <form role="form" action="../application/controller/uni_team_registration.php" method="post">
                <center><h2>University Team Entry</h2></center>

                <div class="form-group">
                    <label for="uni-name">Name of the University:</label>
                    <input required="" type="text" class="form-control" id="uni-name" name="uni-name"
                           placeholder="Enter name of university">
                </div>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input required="" type="text" class="form-control" name="country" placeholder="Enter country">
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <!-- <input type="text" class="form-control" name="gender" placeholder="Enter gender">-->
                    <select class="form-control" required="" name="gender">
                        <option selected disabled="" value="select">- Select Gender -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <div class="form-group" style="margin-top: 10px;">
                        <label for="uni-players">Enter names of players (Min-5):</label>

                        <div class="col-md-8" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player1"
                                   placeholder="Enter name of player 1">
                        </div>
                        <div class="col-md-4" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player-index"
                                   placeholder="University ID">
                        </div>

                        <div class="col-md-8" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player2"
                                   placeholder="Enter name of player 2"></div>
                        <div class="col-md-4" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player-index"
                                   placeholder="University ID">
                        </div>

                        <div class="col-md-8" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player3"
                                   placeholder="Enter name of player 3"></div>
                        <div class="col-md-4" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player-index"
                                   placeholder="University ID">
                        </div>

                        <div class="col-md-8" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player4"
                                   placeholder="Enter name of player 4"></div>
                        <div class="col-md-4" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player-index"
                                   placeholder="University ID">
                        </div>

                        <div class="col-md-8" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player5"
                                   placeholder="Enter name of player 5"></div>
                        <div class="col-md-4" style="margin-top: 5px;">
                            <input required="" type="text" class="form-control input-sm" name="uni-player-index"
                                   placeholder="University ID">
                        </div>

                        <div class="col-md-8" style="margin-top: 5px;">
                            <input type="text" class="form-control input-sm" name="uni-player6"
                                   placeholder="Enter name of player 6"></div>
                        <div class="col-md-4" style="margin-top: 5px;">
                            <input  type="text" class="form-control input-sm" name="uni-player-index"
                                   placeholder="University ID">
                        </div>

                        <div class="col-md-8" style="margin-top: 5px;">
                            <input type="text" class="form-control input-sm" name="uni-player7"
                                   placeholder="Enter name of player 7"></div>
                        <div class="col-md-4" style="margin-top: 5px;">
                            <input type="text" class="form-control input-sm" name="uni-player-index"
                                   placeholder="University ID">
                        </div>

                        <div class="col-md-8" style="margin-top: 5px;">
                            <input type="text" class="form-control input-sm" name="uni-player8"
                                   placeholder="Enter name of player 8"></div>
                        <div class="col-md-4" style="margin-top: 5px;">
                            <input  type="text" class="form-control input-sm" name="uni-player-index"
                                   placeholder="University ID">
                        </div>

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12 panel panel-info" style="margin-top: 25px; padding-bottom: 25px;">
                        <h3>Past Perfomance</h3>
                        <p class="text-justify">Please indicate the team's past year’s best performances and if
                            participated,
                            performance in our
                            past tournaments (UMiSF)</p>
                        <p class="text-justify">If past performances are not indicated the committee is not responsible
                            for any issues
                            regarding
                            the draws.</p>

                        <button id="add-performance" class="btn btn-default" onclick="loadPerformanceGroup(this.id)"
                                type="button">Add
                            Performance
                        </button>
                    </div>

                    <div style="display: none" id="add_1">

                        <div id="performance-group" class="col-md-12 panel panel-primary"
                             style="margin-top: 15px; padding-bottom: 15px;">
                            <div class="col-md-12" style="padding-top: 10px">
                                <div class="col-md-6"><label for="tounament" class="form-control input-sm">Tournament
                                        Name:</label></div>
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="tournament1">
                                        <option value="select" selected="selected" disabled="disabled">- Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship">UMiSF Championship</option>
                                        <option value="Inter University Games">Inter University Games</option>
                                        <option value="Faster Championship">Faster Championship</option>
                                        <option value="Pera Smashes Championship">Pera Smashes Championship</option>
                                        <option value="Western Province Championship">Western Province Championship
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-year" class="form-control input-sm">Tournament
                                            Year:</label>
                                    </div>

                                    <div class="col-md-6">
                                        <select name="year1" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">- Select Year
                                                -
                                            </option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6"><label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label></div>

                                    <div class="col-md-6">
                                        <select name="place1" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">- Select
                                                Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="display: none" id="add_2">
                        <div id="performance-group" class="col-md-12 panel panel-primary"
                             style="margin-top: 15px; padding-bottom: 15px;">
                            <div class="col-md-12" style="padding-top: 10px">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Tournament Name:</label>
                                </div>
                                <!--<input type="text" class="form-control" name="tournament-name" placeholder="Enter name of tournament">-->
                                <div class="col-md-6">
                                    <select name="tournament2" class="form-control input-sm">
                                        <option value="select" selected="selected" disabled="disabled">-
                                            Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship">UMiSF Championship</option>
                                        <option value="Inter University Games">Inter University Games</option>
                                        <option value="Faster Championship">Faster Championship</option>
                                        <option value="Pera Smashes Championship">Pera Smashes Championship</option>
                                        <option value="Western Province Championship">Western Province Championship
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-year" class="form-control input-sm">Tournament
                                            Year:</label>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">-->
                                    <div class="col-md-6">
                                        <select name="year2" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Year -
                                            </option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label>
                                    </div>
                                    <!--<input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">-->
                                    <div class="col-md-6">
                                        <select name="place2" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="display: none" id="add_3">
                        <div id="performance-group" class="col-md-12 panel panel-primary"
                             style="margin-top: 15px; padding-bottom: 15px;">
                            <div class="col-md-12" style="padding-top: 10px">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Tournament Name:</label>
                                </div>
                                <!--<input type="text" class="form-control" name="tournament-name" placeholder="Enter name of tournament">-->
                                <div class="col-md-6">
                                    <select name="tournament3" class="form-control input-sm">
                                        <option value="select" selected="selected" disabled="disabled">-
                                            Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship">UMiSF Championship</option>
                                        <option value="Inter University Games">Inter University Games</option>
                                        <option value="Faster Championship">Faster Championship</option>
                                        <option value="Pera Smashes Championship">Pera Smashes Championship</option>
                                        <option value="Western Province Championship">Western Province Championship
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-year" class="form-control input-sm">Tournament
                                            Year:</label>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">-->
                                    <div class="col-md-6">
                                        <select name="year3" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Year -
                                            </option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label>
                                    </div>
                                    <!--<input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">-->
                                    <div class="col-md-6">
                                        <select name="place3" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="display: none" id="add_4">
                        <div id="performance-group" class="col-md-12 panel panel-primary"
                             style="margin-top: 15px; padding-bottom: 15px;">
                            <div class="col-md-12" style="padding-top: 10px">
                                <div class="col-md-6">
                                    <label for="tounament4" class="form-control input-sm">Tournament Name:</label>
                                </div>
                                <!--<input type="text" class="form-control" name="tournament-name" placeholder="Enter name of tournament">-->
                                <div class="col-md-6">
                                    <select name="tournament4" class="form-control input-sm">
                                        <option value="select" selected="selected" disabled="disabled">-
                                            Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship">UMiSF Championship</option>
                                        <option value="Inter University Games">Inter University Games</option>
                                        <option value="Faster Championship">Faster Championship</option>
                                        <option value="Pera Smashes Championship">Pera Smashes Championship</option>
                                        <option value="Western Province Championship">Western Province Championship
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-year" class="form-control input-sm">Tournament
                                            Year:</label>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">-->
                                    <div class="col-md-6">
                                        <select name="year4" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Year -
                                            </option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label>
                                    </div>
                                    <!--<input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">-->
                                    <div class="col-md-6">
                                        <select name="place4" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="display: none" id="add_5">
                        <div id="performance-group" class="col-md-12 panel panel-primary"
                             style="margin-top: 15px; padding-bottom: 15px;">
                            <div class="col-md-12" style="padding-top: 10px">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Tournament Name:</label>
                                </div>
                                <!--<input type="text" class="form-control" name="tournament-name" placeholder="Enter name of tournament">-->
                                <div class="col-md-6">
                                    <select name="tournament5" class="form-control input-sm">
                                        <option value="select" selected="selected" disabled="disabled">-
                                            Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship">UMiSF Championship</option>
                                        <option value="Inter University Games">Inter University Games</option>
                                        <option value="Faster Championship">Faster Championship</option>
                                        <option value="Pera Smashes Championship">Pera Smashes Championship</option>
                                        <option value="Western Province Championship">Western Province Championship
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-year" class="form-control input-sm">Tournament
                                            Year:</label>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">-->
                                    <div class="col-md-6">
                                        <select name="year5" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Year -
                                            </option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label>
                                    </div>
                                    <!--<input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">-->
                                    <div class="col-md-6">
                                        <select name="place5" class="form-control input-sm">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>

                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>


                <div class="form-group">
                    <div class="col-md-12 panel panel-info" style="margin-top: 10px; padding-bottom: 25px;">
                        <h4>Print Entry</h4>
                        <p class="text-justify">Please check the validity of the Information you provided before
                            submitting. And download your entry for future references. click the button below </p>
                        <button type="submit" formaction="#" formtarget="_blank"
                                class="btn btn-danger"><i class="glyphicon glyphicon-print"></i> Download Entry
                        </button>
                    </div>
                </div>


                <div class="row" style="margin-top: 25px;">
                    <center>
                        <button id="submitButton" type="submit" class="btn btn-primary btn-lg "><i
                                class="glyphicon glyphicon-save"></i> Submit
                        </button>
                    </center>
                </div>



            </form>
        </div>
    </div>
</div>


<div id="successModal1" class="modal fade" role="dialog" data-animation="fade" data-animationspeed="300"
     data-closeBGclick="true">
    <div id="entry-modal2 " class="modal-dialog">
        <div class="modal-content" id="myform">
            <h2 align="center">Success</h2>
            <br>
            <p align="center">Foam submitted succesfully.</p>
            <center>
                <button type="button" formaction=""
                        class="btn btn-danger"><i class="glyphicon "></i> Okay
                </button>
            </center>
        </div>
    </div>

</div>


<!--inter school entry-->
<div id="modalWindow4" class="modal fade" role="dialog" data-animation="fade" data-animationspeed="300"
     data-closeBGclick="true">
    <div id="entry-modal2 " class="modal-dialog">
        <div class="modal-content" id="myform">
            <form role="form" action="../application/controller/inter_school_registration.php" method="post" data-toggle="validator">
                <h2 align="center">Inter School Entry</h2>

                <div class="form-group">
                    <label for="player-name">Name of Player:</label>
                    <input required type="text" class="form-control" id="player-name" name="player-name"
                           placeholder="Enter name of player" data-match-error="nnnnn"  >
                </div>

                <div class="form-group">
                    <label for="school">School of the applicant:</label>
                    <input required= type="text" class="form-control" name="school" placeholder="Enter School">
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <!-- <input type="text" class="form-control" name="gender" placeholder="Enter gender">-->
                    <select required="" name="player-gender" class="form-control">
                        <option value="select" selected="selected" disabled="disabled">- Select Gender -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="dob">Date of birth:</label>
                    <input type="date" required="" class="form-control" name="player-dob" placeholder="Enter DOB">
                </div>

                <div class="form-group">
                    <label for="phono-no">Contact Number:</label>
                    <input type="text" required="" class="form-control" name="player-phone-no"
                           placeholder="Enter phone number">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" required="" class="form-control" name="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="event">Events:</label>

                    <div class="col-md-12">
                        <!--    select singles    -->
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="singles-id">
                                    <input type="radio" name="singles-select" onclick="enableSelect()" value="singles"
                                           id="singles-id"/> Singles</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="none-id">
                                    <input type="radio" name="singles-select" value="" id="none-id" checked="checked"/>
                                    None</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control input-sm" name="single-age-group" disabled="disabled"
                                    id="single-age-group">
                                <option value="select" selected="selected" disabled="disabled">--Select Age Category--
                                </option>
                                <option value="11">Under 11</option>
                                <option value="13">Under 13</option>
                                <option value="15">Under 15</option>
                                <option value="17">Under 17</option>
                                <option value="19">Under 19</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <hr/>
                        <!--  select doubles   -->
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="doubles-id"> <input type="radio" onclick="enableSelect2()"
                                                                name="doubles-select" value="doubles"
                                                                id="doubles-id"/> Double</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="none-doubles-id"> <input type="radio" name="doubles-select" value=""
                                                                     id="none-doubles-id" checked="checked"/>
                                    None</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control input-sm" name="doubles-age-group" id="doubles-age-group"
                                    disabled="disabled">
                                <option value="" selected="selected" disabled="disabled">--Select Age Category--
                                </option>
                                <option value="11">Under 11</option>
                                <option value="13">Under 13</option>
                                <option value="15">Under 15</option>
                                <option value="17">Under 17</option>
                                <option value="19">Under 19</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 10px;">
                        <div class="col-md-6">
                            <label for="doubles-details" name="double-partner" style="font-weight: normal;">Doubles
                                Partner: </label>
                            <input type="text" class="form-control input-sm" name="double-partner-name"
                                   id="double-partner-name"
                                   placeholder="Doubles Partner's Name" disabled="disabled">
                        </div>
                        <div class="col-md-6">
                            <label for="age-group" name="partner-school-label" style="font-weight: normal;">Partner
                                School: </label>
                            <input type="text" class="form-control input-sm" name="partner-school" id="partner-school"
                                   placeholder="Doubles Partner's School" disabled="disabled">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 panel panel-info" style="margin-top: 25px; padding-bottom: 25px;">
                        <h4>Past Perfomance</h4>
                        <p class="text-justify">Please indicate the your past year’s best performances and if
                            participated,
                            performance in our
                            past tournaments (UMiSF)</p>
                        <p class="text-justify">If past performances are not indicated the committee is not responsible
                            for any issues
                            regarding
                            the draws.</p>
                        <button id="add-school-performance"  class="btn btn-default"
                                onclick="loadPerformanceSchool(this.id)"
                                type="button">Add
                            Performance
                        </button>
                    </div>


                    <div style="display: none" id="adding_1">
                        <div id="performance-group" class="col-md-12 panel panel-primary">
                            <div class="col-md-12" style="margin-top: 15px; padding-bottom: 15px;">
                                <div class="col-md-6">
                                    <label for="ranking" class="form-control input-sm">Junior National Rank:</label>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control input-sm" name="rank-age">
                                        <option value="" selected="selected">-U-
                                        </option>
                                        <option value="11">11</option>
                                        <option value="13">13</option>
                                        <option value="15">15</option>
                                        <option value="17">17</option>
                                        <option value="19">19</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control input-sm" name="player-rank">
                                        <option value="select" selected="selected" disabled="disabled">-No-</option>
                                        <option value="No: 01">01</option>
                                        <option value="No: 02">02</option>
                                        <option value="No: 03">03</option>
                                        <option value="No: 04">04</option>
                                        <option value="No: 05">05</option>
                                        <option value="No: 06">06</option>
                                        <option value="No: 07">07</option>
                                        <option value="No: 08">08</option>
                                        <option value="No: 09">09</option>
                                        <option value="No: 10">10</option>
                                        <option value="No: 11">11</option>
                                        <option value="No: 12">12</option>
                                        <option value="No: 13">13</option>
                                        <option value="No: 14">14</option>
                                        <option value="No: 15">15</option>
                                        <option value="No: 16">16</option>
                                        <option value="No: 17">17</option>
                                        <option value="No: 18">18</option>
                                        <option value="No: 19">19</option>
                                        <option value="No: 20">20</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Tournament Name:</label>
                                </div>
                                <!--<input type="text" class="form-control" name="tournament-name" placeholder="Enter name of tournament">-->
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="tournament1">
                                        <option value="select" selected="selected" disabled="disabled">- Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship 2015">UMiSF Championship 2015</option>
                                        <option value="Junior Nationals 2015">Junior Nationals 2015</option>
                                        <option value="Faster Championship 2015">Faster Championship 2015</option>
                                        <option value="Pera Smashes Championship 2015">Pera Smashes Championship 2015
                                        </option>
                                        <option value="D.S Smashes 2015">D.S Smashes 2015</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Event:</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="event1">
                                        <option value="select" selected="selected" disabled="disabled">- Select Event
                                            -
                                        </option>
                                        <option value="Singles">Singles</option>
                                        <option value="Doubles">Doubles</option>
                                        <option value="Mix Doubles">Mix Doubles</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-age" class="form-control input-sm">Age Group:</label>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="year1">
                                            <option value="select" selected="selected" disabled="disabled">- Age Group
                                                -
                                            </option>
                                            <option value="11">Under 11</option>
                                            <option value="13">Under 13</option>
                                            <option value="15">Under 15</option>
                                            <option value="17">Under 17</option>
                                            <option value="19">Under 19</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label>
                                    </div>
                                    <!--<input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="place1">
                                            <option value="select" selected="selected" disabled="disabled">- Select
                                                Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>
                                            <option value="Quarter Finalist">Quarter Finalist</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="display: none" id="adding_2">
                        <div id="performance-group" class="col-md-12 panel panel-primary">
                            <div class="col-md-12" style="margin-top: 15px; padding-bottom: 15px;">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Tournament Name:</label>
                                </div>
                                <!--<input type="text" class="form-control" name="tournament-name" placeholder="Enter name of tournament">-->
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="tournament2">
                                        <option value="select" selected="selected" disabled="disabled">- Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship 2015">UMiSF Championship 2015</option>
                                        <option value="Junior Nationals 2015">Junior Nationals 2015</option>
                                        <option value="Faster Championship 2015">Faster Championship 2015</option>
                                        <option value="Pera Smashes Championship 2015">Pera Smashes Championship 2015
                                        </option>
                                        <option value="D.S Smashes 2015">D.S Smashes 2015</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Event:</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="event2">
                                        <option value="select" selected="selected" disabled="disabled">- Select
                                            Event
                                            -
                                        </option>
                                        <option value="Singles">Singles</option>
                                        <option value="Doubles">Doubles</option>
                                        <option value="Mix Doubles">Mix Doubles</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-age" class="form-control input-sm">Age Group:</label>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="year2">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Age Group -
                                            </option>
                                            <option value="11">Under 11</option>
                                            <option value="13">Under 13</option>
                                            <option value="15">Under 15</option>
                                            <option value="17">Under 17</option>
                                            <option value="19">Under 19</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label>
                                    </div>
                                    <!--<input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="place2">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>
                                            <option value="Quarter Finalist">Quarter Finalist</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="display: none" id="adding_3">
                        <div id="performance-group" class="col-md-12 panel panel-primary">
                            <div class="col-md-12" style="margin-top: 15px; padding-bottom: 15px;">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Tournament Name:</label>
                                </div>
                                <!--<input type="text" class="form-control" name="tournament-name" placeholder="Enter name of tournament">-->
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="tournament3">
                                        <option value="select" selected="selected" disabled="disabled">- Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship 2015">UMiSF Championship 2015</option>
                                        <option value="Junior Nationals 2015">Junior Nationals 2015</option>
                                        <option value="Faster Championship 2015">Faster Championship 2015</option>
                                        <option value="Pera Smashes Championship 2015">Pera Smashes Championship 2015
                                        </option>
                                        <option value="D.S Smashes 2015">D.S Smashes 2015</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Event:</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="event3">
                                        <option value="select" selected="selected" disabled="disabled">- Select
                                            Event
                                            -
                                        </option>
                                        <option value="Singles">Singles</option>
                                        <option value="Doubles">Doubles</option>
                                        <option value="Mix Doubles">Mix Doubles</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-age" class="form-control input-sm">Age Group:</label>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="year3">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Age Group -
                                            </option>
                                            <option value="11">Under 11</option>
                                            <option value="13">Under 13</option>
                                            <option value="15">Under 15</option>
                                            <option value="17">Under 17</option>
                                            <option value="19">Under 19</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label>
                                    </div>
                                    <!--<input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="place3">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>
                                            <option value="Quarter Finalist">Quarter Finalist</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="display: none" id="adding_4">
                        <div id="performance-group" class="col-md-12 panel panel-primary">
                            <div class="col-md-12" style="margin-top: 15px; padding-bottom: 15px;">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Tournament Name:</label>
                                </div>
                                <!--<input type="text" class="form-control" name="tournament-name" placeholder="Enter name of tournament">-->
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="tournament4">
                                        <option value="select" selected="selected" disabled="disabled">- Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship 2015">UMiSF Championship 2015</option>
                                        <option value="Junior Nationals 2015">Junior Nationals 2015</option>
                                        <option value="Faster Championship 2015">Faster Championship 2015</option>
                                        <option value="Pera Smashes Championship 2015">Pera Smashes Championship 2015
                                        </option>
                                        <option value="D.S Smashes 2015">D.S Smashes 2015</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Event:</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="event4">
                                        <option value="select" selected="selected" disabled="disabled">- Select
                                            Event
                                            -
                                        </option>
                                        <option value="Singles">Singles</option>
                                        <option value="Doubles">Doubles</option>
                                        <option value="Mix Doubles">Mix Doubles</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-age" class="form-control input-sm">Age Group:</label>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="year4">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Age Group -
                                            </option>
                                            <option value="11">Under 11</option>
                                            <option value="13">Under 13</option>
                                            <option value="15">Under 15</option>
                                            <option value="17">Under 17</option>
                                            <option value="19">Under 19</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label>
                                    </div>
                                    <!--<input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="place4">
                                            <option value="select" selected="selected" disabled="disabled">
                                                -
                                                Select Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>
                                            <option value="Quarter Finalist">Quarter Finalist</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="display: none" id="adding_5">
                        <div id="performance-group" class="col-md-12 panel panel-primary">
                            <div class="col-md-12" style="margin-top: 15px; padding-bottom: 15px;">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Tournament Name:</label>
                                </div>
                                <!--<input type="text" class="form-control" name="tournament-name" placeholder="Enter name of tournament">-->
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="tournament5">
                                        <option value="select" selected="selected" disabled="disabled">- Select
                                            Tournament -
                                        </option>
                                        <option value="UMiSF Championship 2015">UMiSF Championship 2015</option>
                                        <option value="Junior Nationals 2015">Junior Nationals 2015</option>
                                        <option value="Faster Championship 2015">Faster Championship 2015</option>
                                        <option value="Pera Smashes Championship 2015">Pera Smashes Championship 2015
                                        </option>
                                        <option value="D.S Smashes 2015">D.S Smashes 2015</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label for="tounament" class="form-control input-sm">Event:</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="event5">
                                        <option value="select" selected="selected" disabled="disabled">- Select Event
                                            -
                                        </option>
                                        <option value="Singles">Singles</option>
                                        <option value="Doubles">Doubles</option>
                                        <option value="Mix Doubles">Mix Doubles</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-age" class="form-control input-sm">Age Group:</label>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="year5">
                                            <option value="select" selected="selected" disabled="disabled">- Age Group -
                                            </option>
                                            <option value="11">Under 11</option>
                                            <option value="13">Under 13</option>
                                            <option value="15">Under 15</option>
                                            <option value="17">Under 17</option>
                                            <option value="19">Under 19</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="tounament-place" class="form-control input-sm">Tournament
                                            Place:</label>
                                    </div>
                                    <!--<input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">-->
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" name="place5">
                                            <option value="select" selected="selected" disabled="disabled">- Select
                                                Place -
                                            </option>
                                            <option value="Champion">Champion</option>
                                            <option value="Runners up">Runners up</option>
                                            <option value="2nd Runner up">2nd Runner up</option>
                                            <option value="3rd Place">3rd Place</option>
                                            <option value="Quarter Finalist">Quarter Finalist</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-md-12 panel panel-info" style="margin-top: 10px; padding-bottom: 25px;">
                        <h4>Print Entry</h4>
                        <p class="text-justify">Please check the validity of the Information you provided before
                            submitting. And download your entry for future references. click the button below </p>
                        <button type="submit" formaction="../view/print/actionpdf.php" formtarget="_blank"
                                class="btn btn-danger"><i class="glyphicon glyphicon-print"></i> Download Entry
                        </button>
                    </div>
                    </div>


                    <div class="row" style="margin-top: 25px;">
                        <center>
                            <button id="submitButton" type="submit" class="btn btn-primary btn-lg "><i
                                    class="glyphicon glyphicon-save"></i> Submit
                            </button>
                        </center>
                    </div>

            </form>
        </div>
    </div>
</div>


<div id="message-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="margin: 20px;" id="message-modal-content"></div>
        </div>
    </div>
</div>


<?php
if (isset($_GET["errorEntry"])) {
    if (($_GET["errorEntry"] == 0)) {
        echo "<script>
            $(window).load(function () {
                $('#successModal').modal('show');
            });
        </script>";
    }
} ?>

<div class="col-md-12">
    <div class="col-lg-5"></div>
    <div class="col-lg-6">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] != "0") {
                ?>
                <div class="pad margin no-print">
                    <div class="bs-callout bs-callout-warning" style="margin-bottom: 0!important;">
                        <h4>Error</h4>
                        An error has occurred. Please resubmit.
                    </div>
                </div>
                <br>
                <?php
            } else {
                ?>
                <div class="pad margin no-print">
                    <div class="bs-callout bs-callout-success" style="margin-bottom: 0!important;">
                        <h4>Success</h4>
                        Foam submitted succesfully.
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="col-lg-1"></div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../dist/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="../dist/js/portBox.slimscroll.min.js"></script>
<link href="../dist/css/portBox.css" rel="stylesheet"/>

<script src="../dist/js/abc.js"></script>

</body>