<?php
include_once '../../../../public/data_access/DBConnection.php';

function getTeamsGirls()
{
   // $request = Request::createFromGlobals();
    //$venueCategory = $request->request->get('venueCategory'); //query : post //in js what is posted obj.send("department=" + department);
    //$deptName = $request->request->get('department');

    $conn=DBConnection::get_database_connection();
    //$conn = $this->get('database_connection');
    $stmt = 'SELECT * FROM `uni_team` WHERE gender = \'Female\' ';
    $result = $conn->query($stmt);
    $teams = $result->fetch_all(MYSQLI_ASSOC);

    //echo json_encode(array($teams));


    //$response = new Response(json_encode(array('team-details' => $teams)));
    header('Content-Type', 'application/json');
   echo json_encode($teams);
    //return $response;

}

function getTeamsBoys()
{
    // $request = Request::createFromGlobals();
    //$venueCategory = $request->request->get('venueCategory'); //query : post //in js what is posted obj.send("department=" + department);
    //$deptName = $request->request->get('department');

    $conn=DBConnection::get_database_connection();
    //$conn = $this->get('database_connection');
    $stmt = 'SELECT * FROM `uni_team` WHERE gender = \'Male\' ';
    $result = $conn->query($stmt);
    $teams = $result->fetch_all(MYSQLI_ASSOC);

    //echo json_encode(array($teams));


    //$response = new Response(json_encode(array('team-details' => $teams)));
    header('Content-Type', 'application/json');
    echo json_encode($teams);
    //return $response;

}

function getTeamPlayers(){
    $conn=DBConnection::get_database_connection();
    //$venueCategory = $request->request->get('venueCategory');
    $team_id = $_GET['teamid'];
    //echo $team_id;
   $stmt = "SELECT team_id, uni_player1, uni_player2, uni_player2,uni_player3,uni_player4,uni_player5,uni_player6,uni_player7,uni_player8 from uni_team where team_id = '$team_id'";
    //$stmt = 'SELECT * FROM `uni_team` WHERE gender = \'Male\' ';
    $result = $conn->query($stmt);
    $teams_players = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($teams_players);
}

function getTeamPerfomance(){
    $conn=DBConnection::get_database_connection();
    //$venueCategory = $request->request->get('venueCategory');
    $team_id = $_GET['teamid'];
    //echo $team_id;
 
    $stmt = "SELECT * from uni_team_perfomance where team_id = '$team_id'";
    //$stmt = 'SELECT * FROM `uni_team` WHERE gender = \'Male\' ';
    $result = $conn->query($stmt);
    $teams_perfomance = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($teams_perfomance);
}

function getAllPerfomance(){
    $conn=DBConnection::get_database_connection();
    //$venueCategory = $request->request->get('venueCategory');
    //$team_id = $_GET['teamid'];
    //echo $team_id;

    $stmt = "SELECT DISTINCT(team_id) FROM uni_team_perfomance ";
    //$stmt = 'SELECT * FROM `uni_team` WHERE gender = \'Male\' ';
    $result = $conn->query($stmt);
    $teams_perfomance = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($teams_perfomance);

}

function setRank(){
    $conn=DBConnection::get_database_connection();
    //$venueCategory = $request->request->get('venueCategory');
    $team_id = $_GET['id'];
    $rank = $_GET['rank'];
    //echo $team_id;

    //$stmt = "SELECT * from uni_team_perfomance ";
    $stmt = "UPDATE uni_team SET rank=$rank WHERE uni_team.team_id = '$team_id'";
    //$stmt = 'SELECT * FROM `uni_team` WHERE gender = \'Male\' ';
    $result = $conn->query($stmt);

    header('Content-Type', 'application/json');
   // echo json_encode($teams_perfomance);
}


function DisplayWithRank(){
    $conn=DBConnection::get_database_connection();
    //$venueCategory = $request->request->get('venueCategory');
    //$team_id = $_GET['teamid'];
    //echo $team_id;

    $stmt = "SELECT team_id, university, gender, rank, points from uni_team where gender = 'Female' order by rank ASC ";
    //$stmt = 'SELECT * FROM `uni_team` WHERE gender = \'Male\' ';
    $result = $conn->query($stmt);
    $teams_perfomance = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($teams_perfomance);

}


function setPoints(){
    $conn=DBConnection::get_database_connection();
    $team_id = $_GET['id'];
    $stmt = "SELECT * FROM `uni_team_perfomance` WHERE team_id = '$team_id'";
    $result = $conn->query($stmt);
    $team_perfomance = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($team_perfomance);
}

function saveTeamPoints(){
    $conn=DBConnection::get_database_connection();
    $team_id = $_GET['id'];
    $points = $_GET['points'];

    $stmt = "UPDATE uni_team SET points = $points WHERE uni_team.team_id = '$team_id'";

    $result = $conn->query($stmt);

    header('Content-Type', 'application/json');
}

function getRankOder(){
    $conn=DBConnection::get_database_connection();
    $stmt = "SELECT team_id,points FROM `uni_team` where gender = 'Female' order by points desc";
    $result = $conn->query($stmt);
    $team_ranks = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($team_ranks);
}

function addGroup(){
    $conn=DBConnection::get_database_connection();
    $uni = $_GET['university'];
    $group = $_GET['group'];

    $stmt = "UPDATE uni_team SET groupNo = $group WHERE uni_team.university = '$uni'";

    $result = $conn->query($stmt);

    header('Content-Type', 'application/json');

}

function groupSchedule(){
    $conn=DBConnection::get_database_connection();
    $stmt = "SELECT groupNo, university FROM `uni_team` where gender = 'Female'  order by groupNo ASC ";
    $result = $conn->query($stmt);
    $team_ranks = $result->fetch_all(MYSQLI_ASSOC);
    header('Content-Type', 'application/json');
    echo json_encode($team_ranks);
}