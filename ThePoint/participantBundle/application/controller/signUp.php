<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/14/2016
 * Time: 1:45 AM
 */



include_once '../data_access/signUpModel.php';
include_once '../data_access/loginModel.php';
include_once '../entity/user.php';

$uname = $_POST['username'];
$email = $_POST['email'];
$pword = $_POST['password'];
$url = $_GET['url'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $user = new user();
    $user->setUsername($uname);
    $user->setPassword($pword);
    $user->setEmail($email);

    save_user($user);
    session_start();
    $_SESSION["id"] = get_user_id_username($uname, $pword);
    $_SESSION["logged_in"] = true;

    $varname = "emailError";
    $url = preg_replace('/([?&])' . $varname . '=[^&]+(&|$)/', '$1', $url);
    header('Location: ' . $url);
} else {
    header('Location: ' . $url . "?emailError=1");
}


?>