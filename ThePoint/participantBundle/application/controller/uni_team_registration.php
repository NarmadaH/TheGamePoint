<?php

/* Created by PhpStorm.
 * User: Achini
* Date: 5/1/2016
* Time: 11:01 AM
*/


include_once '../data_access/uni_team_model.php';
include_once '../entity/uniteam.php';
include_once '../entity/uni_team_perfomance.php';


$prefix = 'uni';
//$make = uniqid();
$id = $prefix.uniqid();
//$id = '1233333';
$uni_name =isset($_POST['uni-name'])? $_POST['uni-name']:'';
$gender = isset($_POST['gender'])? $_POST['gender']:'';
$country = isset($_POST['country'])? $_POST['country']:'';
$player1 = isset($_POST['uni-player1'])? $_POST['uni-player1']:'';
$player2 = isset($_POST['uni-player2'])? $_POST['uni-player2']:'';
$player3 = isset($_POST['uni-player3'])? $_POST['uni-player3']:'';
$player4 = isset($_POST['uni-player4'])? $_POST['uni-player4']:'';
$player5 = isset($_POST['uni-player5'])? $_POST['uni-player5']:'';
$player6 = isset($_POST['uni-player6'])? $_POST['uni-player6']:'';
$player7 = isset($_POST['uni-player7'])? $_POST['uni-player7']:'';
$player8 = isset($_POST['uni-player8'])? $_POST['uni-player8']:'';
$tounament1 = isset($_POST['tournament1'])? $_POST['tournament1']:'';
$year1 = isset($_POST['year1'])? $_POST['year1']:'';
$place1 = isset($_POST['place1'])? $_POST['place1']:'';

$tounament2 = isset($_POST['tournament2'])? $_POST['tournament2']:'';
$year2 = isset($_POST['year2'])? $_POST['year2']:'';
$place2 = isset($_POST['place2'])? $_POST['place2']:'';

$tounament3 = isset($_POST['tournament3'])? $_POST['tournament3']:'';
$year3 = isset($_POST['year3'])? $_POST['year3']:'';
$place3 = isset($_POST['place3'])? $_POST['place3']:'';

$tounament4 = isset($_POST['tournament4'])? $_POST['tournament4']:'';
$year4 = isset($_POST['year4'])? $_POST['year4']:'';
$place4 = isset($_POST['place4'])? $_POST['place4']:'';

$tounament5 = isset($_POST['tournament5'])? $_POST['tournament5']:'';
$year5 = isset($_POST['year5'])? $_POST['year5']:'';
$place5 = isset($_POST['place5'])? $_POST['place5']:'';


//$id = isset($_POST['id']) ? $_POST['id'] : '12345kjhjkd';

print_r($_POST);

$uni_team=new uniteam();
$perfomance = new uni_team_perfomance();


$uni_team->setUniversity($uni_name);
$uni_team->setGender($gender);
$uni_team->setCountry($country);
$uni_team->setPlayer1($player1);
$uni_team->setPlayer2($player2);
$uni_team->setTeamId($id);
$uni_team->setPlayer3($player3);
$uni_team->setPlayer4($player4);
$uni_team->setPlayer5($player5);
$uni_team->setPlayer6($player6);
$uni_team->setPlayer7($player7);
$uni_team->setPlayer8($player8);

if ($tounament1 != ''){
$perfomance-> setTounament1($tounament1);
$perfomance->setYear1($year1);
$perfomance->setPalce1($place1);}

if ($tounament2 != ''){
$perfomance-> setTounament2($tounament2);
$perfomance->setYear2($year2);
$perfomance->setPalce2($place2);}

if ($tounament3 != ''){
$perfomance-> setTounament3($tounament3);
$perfomance->setYear3($year3);
$perfomance->setPalce3($place3);}

if ($tounament4 != ''){
$perfomance-> setTounament4($tounament4);
$perfomance->setYear4($year4);
$perfomance->setPalce4($place4);}

if ($tounament5 != ''){
$perfomance-> setTounament5($tounament5);
$perfomance->setYear5($year5);
$perfomance->setPalce5($place5);}

add_new_uniteam($uni_team, $perfomance);

header('Location: ../../view/entry.php?errorEntry=0');

?>
