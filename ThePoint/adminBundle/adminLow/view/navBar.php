

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
    <link href="../../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!--    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>-->
    <script type='text/javascript' src="../../../public/dist/js/jquery-1.12.3.min.js"></script>
    <script type='text/javascript' src="../../../public/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link href="../../../public/dist/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">



    <title>intro</title>
</head>
<body>

<nav id="navMain" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">UMiSF</a>
        </div>
        <ul class="nav navbar-nav">
            <li id="home" class="active"><a href="../../../participantBundle/view/home.php">Home</a></li>

            <li><a href="../../../participantBundle/view/entry.php">Entry</a></li>
            <li><a href="../../../participantBundle/view/draw-shedule.php">Shedule</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li data-toggle="modal" data-target="#"><a href="#"><span
                        class="fa fa-pencil-square"></span> Logged In</a></li>
        </ul>
    </div>
</nav>

<div id="signupModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content">
            <div class="modal-header">

                <div class="form-group tm-yellow-gradient-bg text-center">
                    <h4 class="modal-title" align="center">Sign Up</h4>
                </div>

            </div>
            <div class="modal-body">
                <form method="post"
                      action="../../participantBundle/application/controller/signUp.php?url=<?php echo $_SERVER["REQUEST_URI"] ?>">
                    <div class="form-group" style="margin-bottom: 15px;">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group tm-yellow-gradient-bg text-center">
                        <button id="makeDraw" type="submit" class="tm-yellow-btn">Sign Up</button>
                    </div>
                </form>
                <?php
                if (isset($_GET["error"])) {
                    if (($_GET["emailError"]) == '1') { ?>
                        <div id="errorBox">
                            <b>Error in signing up!</b>
                            <p>Email is invalid</p>
                        </div>
                    <?php } else { ?>
                        <div id="errorBox">
                            <b>Login Success</b>
                        </div>

                    <?php }
                } ?>

            </div>
        </div>
    </div>
</div>


<?php //this starts a session when user logs in so this part should be included in all pages after login
if (isset($_SESSION["id"])) {
    $user_id = $_SESSION["id"];                   //these session variables are set in the controller
    $logged_in = $_SESSION["logged_in"];
    $username = $_SESSION["username"];
} ?>

<div id="loginModal" class="modal fade" role="dialog" data-animation="fade" data-animationspeed="300"
     data-closeBGclick="true">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div id="entry-modal2"  class="modal-dialog">
        <div class="modal-content" id="myform">
            <div class="modal-header">

                <div class="form-group tm-yellow-gradient-bg text-center">
                    <h4 class="modal-title" align="center">Login</h4>
                </div>

            </div>
            <div class="modal-body">
                <form method="post"
                      action="../../participantBundle/application/controller/logger.php?url=<?php echo $_SERVER["REQUEST_URI"] ?>">
                    <div class="form-group" style="margin-bottom: 15px;">
                        <input type="text" class="form-control" name="username" placeholder="Username or Email"
                               required>
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group tm-yellow-gradient-bg text-center">
                        <button id="makeDraw" type="submit" class="tm-yellow-btn">Login</button>
                    </div>
                </form>
                <?php
                if (isset($_GET["error"])) {
                    if (($_GET["emailError"]) == '1') { ?>
                        <div id="errorBox">
                            <b>Error in signing up!</b>
                            <p>Email is invalid</p>
                        </div>
                    <?php } else { ?>
                        <div id="errorBox">
                            <b>Login Success</b>
                        </div>

                    <?php }
                } ?>


            </div>
        </div>
    </div>
</div>


<!--<a href="#" data-toggle="modal" data-target="#loginModal">Log In</a>-->