<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/8/2016
 * Time: 1:00 PM
 */

include_once '../data_access/school-model.php';


$prefix = 'sc';
$id = $prefix.uniqid();
$player_name =isset($_POST['player-name'])? $_POST['player-name']:'';
$school= isset($_POST['school'])? $_POST['school']:'';
$gender = isset($_POST['player-gender'])? $_POST['player-gender']:'';

$dob =isset($_POST['player-dob'])? $_POST['player-dob']:'';
$phone_no = isset($_POST['player-phone-no'])? $_POST['player-phone-no']:'';
$email = isset($_POST['email'])? $_POST['email']:'';

$singles =isset($_POST['singles-select'])? $_POST['singles-select']:'';
$single_age_group = isset($_POST['single-age-group'])? $_POST['single-age-group']:'';


$doubles =isset($_POST['doubles-select'])? $_POST['doubles-select']:'';
$doubles_age_group = isset($_POST['doubles-age-group'])? $_POST['doubles-age-group']:'';
$double_partner_name = isset($_POST['double-partner-name'])? $_POST['double-partner-name']:'';
$partner_school = isset($_POST['partner-school'])? $_POST['partner-school']:'';

$tounament1 = isset($_POST['tournament1'])? $_POST['tournament1']:'';
$age1 = isset($_POST['year1'])? $_POST['year1']:'';
$place1 = isset($_POST['place1'])? $_POST['place1']:'';
$event1 = isset($_POST['event1'])? $_POST['event1']:'';

$tounament2 = isset($_POST['tournament2'])? $_POST['tournament2']:'';
$age2 = isset($_POST['year2'])? $_POST['year2']:'';
$place2 = isset($_POST['place2'])? $_POST['place2']:'';
$event2 = isset($_POST['event2'])? $_POST['event2']:'';

$tounament3 = isset($_POST['tournament3'])? $_POST['tournament3']:'';
$age3 = isset($_POST['year3'])? $_POST['year3']:'';
$place3 = isset($_POST['place3'])? $_POST['place3']:'';
$event3 = isset($_POST['event3'])? $_POST['event3']:'';

$tounament4 = isset($_POST['tournament4'])? $_POST['tournament4']:'';
$age4 = isset($_POST['year4'])? $_POST['year4']:'';
$place4 = isset($_POST['place4'])? $_POST['place4']:'';
$event4 = isset($_POST['event4'])? $_POST['event4']:'';

$tounament5 = isset($_POST['tournament5'])? $_POST['tournament5']:'';
$age5 = isset($_POST['year5'])? $_POST['year5']:'';
$place5 = isset($_POST['place5'])? $_POST['place5']:'';
$event5 = isset($_POST['event5'])? $_POST['event5']:'';

$ranking= 'Junior National Rank';
$rank_age = isset($_POST['rank-age'])? $_POST['rank-age']:'';
$player_rank = isset($_POST['player-rank'])? $_POST['player-rank']:'';
$year = '2015';
$rank_event = 'Singles';



add_new_player($id,$player_name,$school, $gender,$dob, $phone_no, $email,$singles ,$single_age_group, $doubles,$doubles_age_group,$double_partner_name, $partner_school,
    $tounament1,$age1,$place1, $tounament2,$age2,$place2, $tounament3,$age3,$place3, $tounament4,$age4,$place4,  $tounament5,$age5,$place5,
    $ranking,$rank_age,$player_rank, $year, $event1,$event2,$event3, $event4, $event5, $rank_event );

header('Location: ../../view/entry.php?errorEntry=0');



