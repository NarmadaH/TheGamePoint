<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/14/2016
 * Time: 1:44 AM
 */


          //data access class for sign up --this should be in interfaces
?>

<div id="signupModal" class="modal fade" name = "signupModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sign Up</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="../application/controller/signUp.php?url=<?php echo $_SERVER["REQUEST_URI"] ?>">
                    <div class="form-group" style="margin-bottom: 15px;">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-default"
                            style="width: 100%; height:60px; background-color: #42c4d6; border-color: #42c4d6; font-weight: bold; font-size: 16px">
                        Sign Up
                    </button>
                </form>
                <?php
                if (($_GET["emailError"]) == '1') { ?>
                    <div id="errorBox">
                        <b>Error in signing up!</b>
                        <p>Email is invalid</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

