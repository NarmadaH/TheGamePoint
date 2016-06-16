<?php
include_once '../../../public/data_access/DBConnection.php';
if( isset( $_POST['user_name'] ) )
{

    $name = $_POST['user_name'];

    $host = 'localhost';
    $user = 'root';
    $pass = ' ';

   // mysql_connect($host, $user, $pass);

   // mysql_select_db('student');

    $conn=DBConnection::get_database_connection();

   // $selectdata = " SELECT age,course FROM student_info WHERE name LIKE '$name%' ";

    $stmt = $conn->prepare('SELECT * FROM `uni_team` WHERE gender = \'Female\'');
    $stmt->execute();
    $stmt->close();

   // $query = mysql_query($selectdata);

    /*while($row = mysql_fetch_array($query))
    {

        echo "<p>".$row['age']."</p>";
        echo "<p>".$row['course']."</p>";

    }*/
    //alert(stmt);

}
?>