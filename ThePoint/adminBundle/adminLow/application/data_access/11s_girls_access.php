<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/11/2016
 * Time: 5:04 PM
 */

include_once '../../../../public/data_access/DBConnection.php';

function loadPlayers(){
    $conn=DBConnection::get_database_connection();
    //$stmt = "SELECT * FROM school_player, singles WHERE singles.age_group = \'11\' && school_player.gender = \'Female\' && school_player.player_id = singles.player_id";
   $stmt = 'SELECT * FROM `uni_team` WHERE gender = \'Female\' ';
    $result = $conn->query($stmt);
    print 'to be here';
    $teams = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($teams);
}