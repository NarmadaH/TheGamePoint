<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/12/2016
 * Time: 8:11 AM
 */

include_once '../../../../public/data_access/DBConnection.php';

function getTeamsGirls()
{
    $conn=DBConnection::get_database_connection();
    $stmt = 'SELECT * FROM school_player, singles WHERE singles.age_group = \'13\' and school_player.gender = \'Female\' and school_player.player_id = singles.player_id order by singles.draw_no ASC ';
    $result = $conn->query($stmt);
    $teams = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($teams);
    //return $response;

}

function getAllPerfomance(){
    $conn=DBConnection::get_database_connection();
    $player_id = $_GET['player_id'];

    $stmt = "SELECT * FROM `school_player_perfomance` WHERE player_id = '$player_id'";

   // $stmt = "SELECT * from uni_team_perfomance where team_id = '$team_id'";
    $result = $conn->query($stmt);
    $teams_perfomance = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($teams_perfomance);
}

function getPerfomancePoints(){
    $conn=DBConnection::get_database_connection();
   // $stmt = "SELECT DISTINCT(team_id) FROM uni_team_perfomance ";
    $stmt = 'SELECT distinct singles.player_id FROM `school_player_perfomance`, singles where singles.age_group = \'13\' and singles.player_id = school_player_perfomance.player_id';
    $result = $conn->query($stmt);
    $player_perfomance = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($player_perfomance);
}

function findPoints(){
    $conn=DBConnection::get_database_connection();
    $player_id = $_GET['id'];
    $stmt = "SELECT * FROM `school_player_perfomance` WHERE player_id = '$player_id'";
    $result = $conn->query($stmt);
    $team_perfomance = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($team_perfomance);
}

function addPoints(){
    $conn=DBConnection::get_database_connection();
    $team_id = $_GET['id'];
    $points = $_GET['points'];
    $stmt = "UPDATE singles SET points = $points WHERE singles.player_id = '$team_id'";
    $result = $conn->query($stmt);
    header('Content-Type', 'application/json');
}

function insertRank(){
    $conn=DBConnection::get_database_connection();
    $player_id = $_GET['id'];
    $rank = $_GET['rank'];
    $stmt = "UPDATE singles SET rank=$rank WHERE singles.player_id = '$player_id'";
      $result = $conn->query($stmt);

    header('Content-Type', 'application/json');
}

function rankPlayers()
{
    $age_group = $_GET['age_group'];
    $conn=DBConnection::get_database_connection();
   // $stmt = "SELECT team_id,points FROM `uni_team` order by points desc";
    $stmt = " SELECT points,player_id FROM `singles` WHERE age_group= '$age_group' order by points desc";
    $result = $conn->query($stmt);
    $team_ranks = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($team_ranks);
}

function showRanks(){
    $age_group = $_GET['age_group'];
    $conn=DBConnection::get_database_connection();
    $stmt = 'SELECT school_player.first_name, school_player.school_code, singles.points, singles.rank, singles.player_id FROM singles, school_player WHERE school_player.gender = \'Female\' and singles.age_group = \'13\' and school_player.player_id = singles.player_id order by singles.points desc';
   // $stmt = "SELECT team_id, university, gender, rank, points from uni_team where gender = 'Female' order by rank ASC ";
    $result = $conn->query($stmt);
    $teams_perfomance = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($teams_perfomance);

}

function findDrawNo(){
    $age_group = $_GET['age_group'];
    $conn=DBConnection::get_database_connection();
    // $stmt = "SELECT team_id,points FROM `uni_team` order by points desc";
    $stmt = 'SELECT singles.player_id, singles.rank, singles.age_group, school_player.school_code, singles.points FROM singles, school_player where singles.age_group = \'13\' and singles.player_id = school_player.player_id order by singles.points desc';
    $result = $conn->query($stmt);
    $team_ranks = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($team_ranks);

}

function writeDrawNumber(){
    $conn=DBConnection::get_database_connection();
    $player_id = $_GET['id'];
    $drawNo = $_GET['drawNo'];
    $stmt = "UPDATE singles SET draw_no = $drawNo WHERE singles.player_id = '$player_id'";
    $result = $conn->query($stmt);

    header('Content-Type', 'application/json');

}