<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/11/2016
 * Time: 7:05 AM
 */

include_once '../../../public/data_access/DBConnection.php';

function add_new_player($id, $player_name, $school, $gender, $dob, $phone_no, $email, $singles, $single_age_group, $doubles, $doubles_age_group, $double_partner_name, $partner_school,
                        $tounament1, $year1, $place1, $tounament2, $year2, $place2, $tounament3, $year3, $place3, $tounament4, $year4, $place4, $tounament5, $year5, $place5,
                        $ranking, $rank_age, $player_rank,$year, $event1,$event2,$event3, $event4, $event5, $rank_event )
{

   
    /*
    print ' ********** ';
    print $player_name;
    print ' ********** ';
    print $player_rank;*/
    $db_conn = DBConnection::get_database_connection(); // get the Testing connectionprint $this;
    $stmt1 = $db_conn->prepare("INSERT INTO school_player(player_id, first_name, gender, school_code, mobile, email, dob) VALUES (?,?,?,?,?,?,?)");
    $stmt1->bind_param("sssssss", $id, $player_name, $gender, $school, $phone_no, $email, $dob);

    $stmt1->execute();
    $stmt1->close();

    if ($singles != "") {
        $stmt2 = $db_conn->prepare("INSERT INTO `singles`(`player_id`, `age_group`) VALUES (?,?)");
        $stmt2->bind_param("ss", $id, $single_age_group);
        $stmt2->execute();
        $stmt2->close();
    }

    if ($doubles != "") {
        $stmt3 = $db_conn->prepare("INSERT INTO `doubles`(`player_id`, `age_group`, `partner_name`, `partner_school`) VALUES (?,?,?,?)");
        $stmt3->bind_param("ssss", $id, $doubles_age_group, $double_partner_name, $partner_school);
        $stmt3->execute();
        $stmt3->close();
    }

    if ($tounament1 != ""){
        $stmt4 = $db_conn->prepare("INSERT INTO `school_player_perfomance`(`player_id`, `tournament`, `event`, `place`, `age_group`) VALUES (?,?,?,?,?)");
        $stmt4->bind_param("sssss", $id, $tounament1, $event1, $place1, $year1);
        $stmt4->execute();
        $stmt4->close();
    }

    if ($tounament2 != ""){
        $stmt5 = $db_conn->prepare("INSERT INTO `school_player_perfomance`(`player_id`, `tournament`, `event`, `place`, `age_group`) VALUES (?,?,?,?,?)");
        $stmt5->bind_param("sssss", $id, $tounament2, $event2, $place2, $year2);
        $stmt5->execute();
        $stmt5->close();
    }

    if ($tounament3 != ""){
        $stmt6 = $db_conn->prepare("INSERT INTO `school_player_perfomance`(`player_id`, `tournament`, `event`, `place`, `age_group`) VALUES (?,?,?,?,?)");
        $stmt6->bind_param("sssss", $id, $tounament3, $event3, $place3, $year3);
        $stmt6->execute();
        $stmt6->close();
    }

    if ($tounament4 != ""){
        $stmt7 = $db_conn->prepare("INSERT INTO `school_player_perfomance`(`player_id`, `tournament`, `event`, `place`, `age_group`) VALUES (?,?,?,?,?)");
        $stmt7->bind_param("sssss", $id, $tounament4, $event4, $place4, $year4);
        $stmt7->execute();
        $stmt7->close();
    }

    if ($tounament5 != ""){
        $stmt8 = $db_conn->prepare("INSERT INTO `school_player_perfomance`(`player_id`, `tournament`, `event`, `place`, `age_group`) VALUES (?,?,?,?,?)");
        $stmt8->bind_param("sssss", $id, $tounament5, $event5, $place5, $year5);
        $stmt8->execute();
        $stmt8->close();
    }

    if ($rank_age != ""){
        $stmt9 = $db_conn->prepare("INSERT INTO `school_player_perfomance`(`player_id`, `tournament`, `place`, `age_group`, `event`) VALUES (?,?,?,?,?)");
        $stmt9->bind_param("sssss", $id, $ranking, $player_rank, $rank_age, $rank_event);
        $stmt9->execute();
        $stmt9->close();
    }


    // print_r($_POST);


}