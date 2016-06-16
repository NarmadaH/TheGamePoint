<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact</title>
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
    <link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../dist/js/entry.js"></script>
    <script type='text/javascript' src="../../public/dist/js/jquery-1.12.3.min.js"></script>
    <script type='text/javascript' src="../../public/dist/js/bootstrap.min.js"></script>
    <script type='text/javascript' src="../../public/dist/js/jquery-1.12.3.min.js"></script>
    <script type='text/javascript' src="../../public/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script type='text/javascript' src="../../public/dist/js/jquery-1.12.3.min.js"></script>
    <script type='text/javascript' src="../../public/dist/js/bootstrap.min.js"></script>


</head>
<body>
<?php include '../../public/view/navBar.php'; ?>

<!------------------------------------------------------------------------>

<div class="container">
    <div class="row">
        <div class="tm-section-header section-margin-top1">
            <div class=" col-md-3 ">
                <hr>
            </div>
            <div class="col-md-6 "><h2 class="tm-section-title" style="padding-top: 50px;">Contact Us</h2></div>
            <div class=" col-md-3">
                <hr>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="tm-section-header section-margin-top1">
            <div class=" col-md-6 " style="padding-top: 50px;">
                <div>
                    <center><img src="../dist/image/smashit.jpg" align="center" alt="image"></center>
                </div>
            </div>
            <div class="col-md-6 "><h4  style="padding-top: 30px;">Send us a message..</h4></div>
            <div class="row">
                <!-- contact form -->
                <form action="#" method="post" class="tm-contact-form">
                    <div class="col-lg-6 col-md-6">
                        <div id="google-map"></div>
                        <div class="contact-social">
                            <a href="#" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="tm-social-icon tm-social-dribbble"><i class="fa fa-dribbble"></i></a>
                            <a href="#" class="tm-social-icon tm-social-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="tm-social-icon tm-social-google-plus"><i
                                    class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-lg-6 col-md-6 tm-contact-form-input">
                        <div class="form-group">
                            <input type="text" id="contact_name" class="form-control" placeholder="NAME"/>
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" class="form-control" placeholder="EMAIL"/>
                        </div>
                        <div class="form-group">
                            <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT"/>
                        </div>
                        <div class="form-group">
                            <textarea id="contact_message" class="form-control" rows="6"
                                      placeholder="MESSAGE"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="submit">Submit now</button>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </form>
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

</body>

<script src="../dist/js/abc.js" type="text/javascript"></script>
</html>