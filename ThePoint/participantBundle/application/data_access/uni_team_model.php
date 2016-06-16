<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 5/1/2016
 * Time: 11:23 AM
 */

include_once '../../../public/data_access/DBConnection.php';
include_once '../entity/uniteam.php';

function add_new_uniteam ($uni_team, $perfomance){

$db_conn=DBConnection::get_database_connection(); // get the Testing connectionprint $this;
    $id = $uni_team->getTeamId();
    $uni_name = $uni_team->getUniversity();
    $country = $uni_team->getCountry();
    $gender = $uni_team->getGender();
    $player1 = $uni_team->getPlayer1();
    $player2 = $uni_team->getPlayer2();
    $player3 = $uni_team->getPlayer3();
    $player4 = $uni_team->getPlayer4();
    $player5 = $uni_team->getPlayer5();
    $player6 = $uni_team->getPlayer6();
    $player7 = $uni_team->getPlayer7();
    $player8 = $uni_team->getPlayer8();

    print $country;
    print $id;
    print '*********';

    $tounament1 = $perfomance->getTounament1();
    $year1 = $perfomance-> getYear1();
    $place1 = $perfomance->getPalce1();

    $tounament2 = $perfomance->getTounament2();
    $year2 = $perfomance-> getYear2();
    $place2 = $perfomance->getPalce2();

    $tounament3 = $perfomance->getTounament3();
    $year3 = $perfomance-> getYear3();
    $place3 = $perfomance->getPalce3();

    $tounament4 = $perfomance->getTounament4();
    $year4 = $perfomance-> getYear4();
    $place4 = $perfomance->getPalce4();

    $tounament5 = $perfomance->getTounament5();
    $year5= $perfomance-> getYear5();
    $place5 = $perfomance->getPalce5();


    /*$id = '123';
    $name = 'aaaaaaaa';
    $country = 'hhhhhhhh';
    $gender = 'uuuuuuuuuu';
    $player1 = 'asd';
    $player2 = 'iop';
    */

    $stmt1 = $db_conn->prepare("INSERT INTO uni_team (team_id, university, country, gender, uni_player1, uni_player2,uni_player3,uni_player4,uni_player5,uni_player6,uni_player7, uni_player8) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt1->bind_param("ssssssssssss", $id,$uni_name,$country,$gender,$player1,$player2,$player3,$player4,$player5,$player6,$player7,$player8);


    $stmt1->execute();
    $stmt1->close();
    

    $stmt2 = $db_conn->prepare("INSERT INTO uni_team_perfomance(team_id, tounament, year, place) VALUES (?,?,?,?)");
    $stmt2->bind_param("ssss", $id, $tounament1, $year1, $place1);

    $stmt3 = $db_conn->prepare("INSERT INTO uni_team_perfomance(team_id, tounament, year, place) VALUES (?,?,?,?)");
    $stmt3->bind_param("ssss", $id, $tounament2, $year2, $place2);

    $stmt4 = $db_conn->prepare("INSERT INTO uni_team_perfomance(team_id, tounament, year,  place) VALUES (?,?,?,?)");
    $stmt4->bind_param("ssss", $id, $tounament3, $year3, $place3);

    $stmt5 = $db_conn->prepare("INSERT INTO uni_team_perfomance(team_id, tounament, year,  place) VALUES (?,?,?,?)");
    $stmt5->bind_param("ssss", $id, $tounament4, $year4, $place4);

    $stmt6 = $db_conn->prepare("INSERT INTO uni_team_perfomance(team_id, tounament, year, place) VALUES (?,?,?,?)");
    $stmt6->bind_param("ssss", $id, $tounament5, $year5, $place5);



    $stmt2->execute();
    $stmt2->close();

    $stmt3->execute();
    $stmt3->close();

    $stmt4->execute();
    $stmt4->close();

    $stmt5->execute();
    $stmt5->close();

    $stmt6->execute();
    $stmt6->close();

    print $tounament1;
    print $year1;
    print $place1 ;
    print '*********';

    print $tounament2;
    print $year2;
    print $place2 ;
    print '*********';

    print $tounament3;
    print $year3;
    print $place3 ;
    print '*********';




    // execute the query
    DBConnection::close_database_connection($db_conn);
}

/*
function add_new_uniteam(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the game point";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = '123';
$name = 'aaaaaaaa';
$country = 'hhhhhhhh';
$gender = 'uuuuuuuuuu';
$player1 = 'asd';
$player2 = 'iop';
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

$stmt = "INSERT INTO uni_team (team_id, university, country, gender, uni_player1, uni_player2) VALUES ('aaaa', 'bbbbbb', 'cccccc', 'ffffff', 'gggggg', 'kkkkkkkk')";


if ($conn->query($stmt) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

}
*/