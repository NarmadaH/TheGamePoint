

<?php
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

$uni_name =isset($_POST['uni-name'])? $_POST['uni-name']:'cccccc';
$gender = isset($_POST['gender'])? $_POST['gender']:'b';
$country = isset($_POST['country'])? $_POST['country']:'c';
$player1 = isset($_POST['uni-player1'])? $_POST['uni-player1']:'e';
$player2 = isset($_POST['uni-player2'])? $_POST['uni-player2']:'f';
$player3 = isset($_POST['uni-player1'])? $_POST['uni-player1']:'';
$player4 = isset($_POST['uni-player1'])? $_POST['uni-player1']:'';
$player5 = isset($_POST['uni-player1'])? $_POST['uni-player1']:'';
$player6 = isset($_POST['uni-player1'])? $_POST['uni-player1']:'';
$player7 = isset($_POST['uni-player1'])? $_POST['uni-player1']:'';
$player8 = isset($_POST['uni-player1'])? $_POST['uni-player1']:'';
$id = isset($_POST['username']) ? $_POST['username'] : '111';

// sql to create table
/*
$id = '123kkkkkk';
$uni_name = 'aaaaaaaa';
$country = 'hhhhhhhh';
$gender = 'uuuuuuuuuu';
$player1 = 'asd';
$player2 = 'iop';
*/
$stmt = "INSERT INTO uni_team (team_id, university, country, gender, uni_player1, uni_player2) VALUES ('$id','$uni_name','$country','$gender','$player1','$player2')";
//$stmt->bind_param("ssssss", $id,$uni_name,$country,$gender,$player1,$player2);


if ($conn->query($stmt) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>


