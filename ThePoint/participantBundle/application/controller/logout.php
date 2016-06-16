<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/14/2016
 * Time: 1:49 AM
 */



session_start();
session_destroy();
header('Location: ../../view/home.php');