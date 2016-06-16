<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/14/2016
 * Time: 1:27 AM
 */

include_once '../../../public/data_access/DBConnection.php';

function login_check_username($username, $password)                         //functions for checking user details
{
    $db_conn = DBConnection::get_database_connection(); // get the db connection
    $password = md5($password);
    $stmt = $db_conn->prepare("SELECT * FROM login WHERE user_name = ? AND password = ?");// prepare
    $stmt->bind_param("ss", $username, $password);
    // execute the query
    $stmt->execute();

    if (!($result = $stmt->get_result())) {
        echo "Error " . $stmt->error;
    }
    if ($result->num_rows == 0) {
        return "N";
    } else {
        return "S";
    }

    $stmt->close();
    DBConnection::close_database_connection($db_conn);
}

function login_check_email($username, $password)
{
    $db_conn = DBConnection::get_database_connection(); // get the db connection
    $password = md5($password);
    $stmt = $db_conn->prepare("SELECT * FROM login WHERE email = ? AND password = ?");// prepare
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    if (!($result = $stmt->get_result())) {
        echo "Error " . $stmt->error;
    }
    if ($result->num_rows == 0) {
        return "N";
    } else {
        return "S";
    }

    $stmt->close();
    DBConnection::close_database_connection($db_conn);
}

function get_user_id_email($input, $password)
{
    $db_conn = DBConnection::get_database_connection(); // get the db connection
    $password = md5($password);
    $stmt = $db_conn->prepare("SELECT user_name FROM login WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $input, $password);
    $stmt->execute();
    if (!($result = $stmt->get_result())) {
        echo "Error " . $stmt->error;
    }
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row["user_id"];
        echo $user_id;
        return $user_id;
    }
    return null;
}

function get_user_id_username($input, $password)
{
    $db_conn = DBConnection::get_database_connection();
    $password = md5($password);
    $stmt = $db_conn->prepare("SELECT user_name FROM login WHERE user_name = ? AND password = ?");
    $stmt->bind_param("ss", $input, $password);
    $stmt->execute();
    $stmt->store_result();
    $num_of_rows = $stmt->num_rows;
    $id = "";
    if($num_of_rows>0){
        $stmt->bind_result($user_id);
        while ($stmt->fetch()) {
            $id = $user_id;
        }
        $stmt->free_result();
        $stmt->close();
        return $id;
    }
    return null;
}

function get_username($user_id)
{
    $db_conn = DBConnection::get_database_connection();
    $stmt = $db_conn->prepare("SELECT user_name FROM login WHERE user_name = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    if (!($result = $stmt->get_result())) {
        echo "Error " . $stmt->error;
    }
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row["username"];
        return $username;
    }
    return null;
}