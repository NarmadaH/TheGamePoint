<?php
session_start();                                //this starts a session when user logs in so this part should be included in all pages after login
if(isset($_SESSION["id"])){
    $user_id = $_SESSION["id"];                   //these session variables are set in the controller
    $logged_in = $_SESSION["logged_in"];
    $username = $_SESSION["username"];
}?>

<div id="loginModal" class="modal fade" role="dialog" data-animation="fade" data-animationspeed="300"
     data-closeBGclick="true">
    <div id="entry-modal2" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Log In</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="../application/controller/logger.php?url=<?php echo $_SERVER["REQUEST_URI"] ?>">
                    <div class="form-group" style="margin-bottom: 15px;">
                        <input type="text" class="form-control" name="username" placeholder="Username or Email"
                               required>
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-default"
                            style="width: 100%; height:60px; background-color: #42c4d6; border-color: #42c4d6; font-weight: bold; font-size: 16px">
                        Log In
                    </button>
                </form>
                <?php
                if (isset($_GET["error"])){
                if (($_GET["error"]) == '1') { ?>
                    <div id="errorBox">
                        <b>Error in logging in!</b>
                        <p>Login details are incorrect</p>
                    </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</div>


