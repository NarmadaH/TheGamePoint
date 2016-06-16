<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/14/2016
 * Time: 1:25 AM
 */



include_once '../data_access/loginModel.php';           //the data access class

$input = $_POST['username'];
$pword = $_POST['password'];
$url = $_GET['url'];

if (filter_var($input, FILTER_VALIDATE_EMAIL)) {          //user entered an email
    $email = $input;
    $result = login_check_email($email, $pword);

    if ($result == "N") {
        header('Location: ' . $url . "?logged=0");
    } elseif ($result == "S") {
        session_start();
        $id = get_user_id_email($email, $pword);
        $_SESSION["id"] = get_user_id_email($email, $pword);
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = get_username($id);

        $varname = "error";
        $url = preg_replace('/([?&])' . $varname . '=[^&]+(&|$)/', '$1', $url);
        header('Location: ../../../adminBundle/adminLow/view/enter.php?logged=1');
    }
} else {                                                      //user entered username
    $uname = $input;
    $result = login_check_username($uname, $pword);
    if ($result == "N") {
        header('Location: ' . $url . "?logged=0");
    } elseif ($result == "S") {
        session_start();
        $_SESSION["id"] = get_user_id_username($input, $pword);;
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $uname;

        $varname = "error";
        $url = preg_replace('/([?&])' . $varname . '=[^&]+(&|$)/', '$1', $url);
        header('Location: ' . $url);
    }
}


?>