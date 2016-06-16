<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/14/2016
 * Time: 1:44 AM
 */


include_once '../../../public/data_access/DBConnection.php';

include_once 'loginModel.php';
include_once '../entity/user.php';

function save_user($user){
    $db_conn=DBConnection::get_database_connection(); // get the db connection

    $username=$user->getUsername();
    $password=$user->getPassword();
    $password = md5($password);
    $email=$user->getEmail();

    $stmt = $db_conn->prepare("INSERT INTO login (user_name,password,email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username,$password,$email);

    // execute the query
    $stmt->execute();
    $stmt->close();

    DBConnection::close_database_connection($db_conn);
}