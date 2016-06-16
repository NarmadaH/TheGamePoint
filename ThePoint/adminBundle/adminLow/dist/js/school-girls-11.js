/**
 * Created by Achini on 6/11/2016.
 */

function loadTeams() {

    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
        //alert('1-load');
    } else if (window.ActiveXObject) {
        // alert('2-load');
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        //alert('2-load');
        obj.onreadystatechange = function () {
            // alert('2-load');
            if (obj.readyState < 4) {
                //alert('notready-load');
                // progress
            } else if (obj.readyState === 4) {
                // alert('ready-load');
                //alert('abc');
                var res = obj.responseText;
                //alert('abc2');
                var result = JSON.parse(res)

                var TableContent = '<table class="table table-hover "><tr><th>No</th><th>Player ID</th><th>Name</th><th>School</th><th>DOB</th><th>Contact</th><th>E-Mail</th><th>Performance</th></tr>';
                var t=0;
                for (var i = 0; i < result.length; i++) {
                    t++;
                    TableContent += '<tr ><td>' + t + '</td>';
                    TableContent += '<td id = "teamId">' + result[i].player_id + '</td>';
                    TableContent += '<td>' + result[i].first_name + '</td>';
                    TableContent += '<td>' + result[i].school_code + '</td>';
                    TableContent += '<td>' + result[i].dob + '</td>';
                    TableContent += '<td>' + result[i].mobile + '</td>';
                    TableContent += '<td>' + result[i].email + '</td>';
                    TableContent += '<td>' + '<button id = "veiw-perfomance" class="btn btn-xs btn-primary btn btn-sm btn-info" type="button" <span class="glyphicon glyphicon-pencil" onclick="showPefomanceModal( \'' + result[i].player_id + '\' )"></span> Veiw Perfomances</button></td>';

                }
                TableContent += '</table>';

                //TableContent+=result.length;
                document.getElementById('11-girls-players').innerHTML = TableContent;

            }
        }
        var path = window.location.pathname;
        var page = path.split("/").pop();
        obj.open("GET", "../application/controller/girls_get_players.php", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        obj.send();
    }
}


function showPefomanceModal(player_id) {
    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                var result = JSON.parse(res);
               // alert(res);
                var TableContent = '';
                if (result == '') {
                    TableContent = '<table class="table table-hover">';
                    TableContent += "No Past Performances";
                    TableContent += '</table>';
                }
                else {

                    TableContent = '<table class="table table-hover"><tr><th>Tournament</th><th >Age Group</th><th >Place</th></tr>';
                    for (var i = 0; i < result.length; i++) {
                        TableContent += '<tr ><td>' + result[i].tournament + '</td>';

                        TableContent += '<td>' + result[i].age_group + '</td>';

                        TableContent += '<td>' + result[i].place + '</td></tr >';


                        //TableContent+=result.length;
                    }
                    TableContent += '</table>';
                }


            }
            document.getElementById('perfomance-modal').innerHTML = TableContent;
            $('#perfomance-message-modal').modal();
        }
    }
    /*var path = window.location.pathname;
     var page = path.split("/").pop();*/

    var pass = "player_id=" + player_id;
    obj.open("GET", "../application/controller/girls11_getPerformance.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    obj.send();
}

function playerPoints() {
    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
               // alert('passed=not ready');
            } else if (obj.readyState === 4) {
                //alert('ready rank teams');
                var res = obj.responseText;
                var result = JSON.parse(res);
               // alert(res);

                var success = 0;
                for (var i = 0; i < result.length; i++) {
                    //alert('team with perfomance' + result[i].player_id);
                    findPoints(result[i].player_id);
                    success++;
                }
            }
        }

        obj.open("GET", "../application/controller/girls11_performance_rank.php?", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        obj.send();
    }
}

function findPoints(player_id) {
    var name1 = "Junior National Rank Singles 13 No: 01";
    var name2 = "Junior National Rank Singles 13 No: 02";
    var name3 = "Junior National Rank Singles 13 No: 03";

    var name4 = "UMiSF Championship 2015 Singles 13 Champion";

    var name5 = "Junior National Rank Singles 13 No: 04";

    var name6 = "Junior Nationals 2015 Singles 13 Champion";
    var name7 = "UMiSF Championship 2015 Singles 13 Runners up";
    var name8 = "Junior Nationals 2015 Singles 13 Runners up";

    var name9 = "Junior National Rank Singles 11 No: 01";
    var name10 = "Junior National Rank Singles 11 No: 02";
    var name11 = "Junior National Rank Singles 11 No: 03";

    var name12 = "UMiSF Championship 2015 Singles 11 Champion";

    var name13 = "Junior National Singles Rank 11 No: 04";

    var name14 = "Junior Nationals 2015 Singles 11 Champion";
    var name15New = "UMiSF Championship 2015 Singles 11 Runners up";

    var name15 = "Junior National Rank Singles 13 No: 05";
    var name16 = "Junior National Rank Singles 13 No: 06";
    var name17 = "Junior National Rank Singles 13 No: 07";
    var name18 = "Junior National Rank Singles 13 No: 08";
    var name19 = "Junior National Rank Singles 13 No: 09";
    var name20 = "Junior National Rank Singles 13 No: 10";

    var name21 = "UMiSF Championship 2015 Singles 13 2nd Runner up";
    var name22 = "Junior Nationals 2015 Singles 13 2nd Runner up";

    var name23 = "Junior National Rank Singles 13 No: 11";
    var name24 = "Junior National Rank Singles 13 No: 12";
    var name25 = "Junior National Rank Singles 13 No: 13";
    var name26 = "Junior National Rank Singles 13 No: 14";
    var name27 = "Junior National Rank Singles 13 No: 15";
    var name28 = "Junior National Rank Singles 13 No: 16";
    var name29 = "Junior National Rank Singles 13 No: 17";
    var name30 = "Junior National Rank Singles 13 No: 18";
    var name31 = "Junior National Rank Singles 13 No: 19";
    var name32 = "Junior National Rank Singles 13 No: 20";

    var name33 = "Junior National Rank Singles 11 No: 05";
    var name34 = "Junior National Rank Singles 11 No: 06";
    var name35 = "Junior National Rank Singles 11 No: 07";
    var name36 = "Junior National Rank Singles 11 No: 08";
    var name37 = "Junior National Rank Singles 11 No: 09";
    var name38 = "Junior National Rank Singles 11 No: 10";

    var name39 = "UMiSF Championship 2015 Singles 11 2nd Runner up";
    var name40 = "Junior Nationals 2015 Singles 11 2nd Runner up";

    var name41 = "Junior National Rank Singles 11 No: 11";
    var name42 = "Junior National Rank Singles 11 No: 12";
    var name43 = "Junior National Rank Singles 11 No: 13";
    var name44 = "Junior National Rank Singles 11 No: 14";
    var name45 = "Junior National Rank Singles 11 No: 15";
    var name46 = "Junior National Rank Singles 11 No: 16";
    var name47 = "Junior National Rank Singles 11 No: 17";
    var name48 = "Junior National Rank Singles 11 No: 18";
    var name49 = "Junior National Rank Singles 11 No: 19";
    var name50 = "Junior National Rank Singles 11 No: 20";

    var name51 = "Junior Nationals 2015 Singles 11 Quarter Finalist";
    var name52 = "Junior Nationals 2015 Singles 11 Quarter Finalist";

    var name53 = "Faster Championship 2015 Singles 13 Champion";
    var name54 = "Faster Championship 2015 Singles 11 Champion";

    var name55 = "Pera Smashes Championship 2015 13 Champion";
    var name56 = "Pera Smashes Championship 2015 11 Champion";

    var name57 = "D.S Smashes 2015 Singles 13 Champion";
    var name58 = "D.S Smashes 2015 Singles 11 Champion";

    var name59 = "Faster Championship 2015 Singles 13 Runner up";
    var name60 = "Faster Championship 2015 Singles 11 Runner up";

    var name61 = "Pera Smashes Championship 2015 13 Runner up";
    var name62 = "Pera Smashes Championship 2015 11 Runner up";

    var name63 = "D.S Smashes 2015 Singles 13 Runner up";
    var name64 = "D.S Smashes 2015 Singles 11 Runner up";


    var no1 = 37;
    var no2 = 25;
    var no3 = 15;
    var no4 = 11;
    var no5 = 8;

    var no6 = 6;
    var no7 = 4;
    var no8 = 3.5;
    var no9 = 3;

    var no10 = 2.5;
    var no11 = 2;
    var no12 = 2;

    var no13 = 1.5;
    var no14 = 1.5;
    var no15New = 1.3;

    var no15 = 1.2;
    var no16 = 1.1;
    var no17 = 1;
    var no18 = 0.8;
    var no19 = 0.6;
    var no20 = 0.4;

    var no21 = 1;
    var no22 = 1;

    var no23 = 0.2;
    var no24 = 0.1;
    var no25 = 0.08;
    var no26 = 0.07;
    var no27 = 0.06;
    var no28 = 0.05;
    var no29 = 0.04;
    var no30 = 0.03;

    var no31 = 0.02;
    var no32 = 0.01;

    var no33 = 0.08;
    var no34 = 0.07;
    var no35 = 0.06;
    var no36 = 0.05;
    var no37 = 0.04;
    var no38 = 0.03;

    var no39 = 0.07;
    var no40 = 0.07;

    var no41 = 0.02;
    var no42 = 0.01;
    var no43 = 0.009;
    var no44 = 0.008;
    var no45 = 0.007;
    var no46 = 0.006;
    var no47 = 0.005;
    var no48 = 0.004;
    var no49 = 0.003;
    var no50 = 0.002;

    var no51 = 0.003;
    var no52 = 0.003;

    var no53 = 0.001;
    var no54 = 0.001;
    var no55 = 0.001;
    var no56 = 0.001;
    var no57 = 0.001;
    var no58 = 0.001;


    var no59 = 0.0005;
    var no60 = 0.0005;
    var no61 = 0.0005;
    var no62 = 0.0005;
    var no63 = 0.0005;
    var no64 = 0.0005;

    var myPoints = 0;

    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                var result = JSON.parse(res);

                for (var i = 0; i < result.length; i++) {
                    var passing = result[i].tournament + ' ' + result[i].event + ' ' + result[i].age_group + ' ' + result[i].place;
                   // alert(passing);

                    switch (passing) {
                        case name1:
                            myPoints += no1;
                            break;
                        case name2:
                            myPoints += no2;
                            break;
                        case name3:
                            myPoints += no3;
                            break;
                        case name4:
                            myPoints += no4;
                            break;
                        case name5:
                            myPoints += no5;
                            break;
                        case name6:
                            myPoints += no6;
                            break;
                        case name7:
                            myPoints += no7;
                            break;
                        case name8:
                            myPoints += no8;
                            break;
                        case name9:
                            myPoints += no9;
                            break;
                        case name10:
                            myPoints += no10;
                            break;
                        case name11:
                            myPoints += no11;
                            break;
                        case name12:
                            myPoints += no12;
                            break;
                        case name13:
                            myPoints += no13;
                            break;
                        case name14:
                            myPoints += no14;
                            break;
                        case name15:
                            myPoints += no15;
                            break;
                        case name16:
                            myPoints += no16;
                            break;
                        case name17:
                            myPoints += no17;
                            break;
                        case name18:
                            myPoints += no18;
                            break;
                        case name19:
                            myPoints += no19;
                            break;
                        case name20:
                            myPoints += no20;
                            break;
                        case name21:
                            myPoints += no21;
                            break;
                        case name22:
                            myPoints += no22;
                            break;
                        case name23:
                            myPoints += no23;
                            break;
                        case name24:
                            myPoints += no24;
                            break;
                        case name25:
                            myPoints += no25;
                            break;
                        case name26:
                            myPoints += no26;
                            break;
                        case name27:
                            myPoints += no27;
                            break;
                        case name28:
                            myPoints += no28;
                            break;
                        case name29:
                            myPoints += no29;
                            break;
                        case name30:
                            myPoints += no30;
                            break;
                        case name31:
                            myPoints += no31;
                            break;
                        case name32:
                            myPoints += no32;
                            break;
                        case name33:
                            myPoints += no33;
                            break;
                        case name34:
                            myPoints += no34;
                            break;
                        case name35:
                            myPoints += no35;
                            break;
                        case name36:
                            myPoints += no36;
                            break;
                        case name37:
                            myPoints += no37;
                            break;
                        case name38:
                            myPoints += no38;
                            break;
                        case name39:
                            myPoints += no39;
                            break;
                        case name40:
                            myPoints += no40;
                            break;
                        case name41:
                            myPoints += no41;
                            break;
                        case name42:
                            myPoints += no42;
                            break;
                        case name43:
                            myPoints += no43;
                            break;
                        case name44:
                            myPoints += no44;
                            break;
                        case name45:
                            myPoints += no45;
                            break;
                        case name46:
                            myPoints += no46;
                            break;
                        case name47:
                            myPoints += no47;
                            break;
                        case name48:
                            myPoints += no48;
                            break;
                        case name49:
                            myPoints += no49;
                            break;
                        case name50:
                            myPoints += no50;
                            break;
                        case name51:
                            myPoints += no51;
                            break;
                        case name52:
                            myPoints += no52;
                            break;
                        case name53:
                            myPoints += no53;
                            break;
                        case name54:
                            myPoints += no54;
                            break;
                        case name55:
                            myPoints += no55;
                            break;
                        case name56:
                            myPoints += no56;
                            break;
                        case name57:
                            myPoints += no57;
                            break;
                        case name58:
                            myPoints += no58;
                            break;
                        case name59:
                            myPoints += no59;
                            break;
                        case name60:
                            myPoints += no60;
                            break;
                        case name61:
                            myPoints += no61;
                            break;
                        case name62:
                            myPoints += no62;
                            break;
                        case name63:
                            myPoints += no63;
                            break;
                        case name64:
                            myPoints += no64;
                            break;
                        case name15New:
                            myPoints += no15New;
                            break;
                        default:
                            myPoints += 0;
                        //echo "Your favorite color is neither red, blue, nor green!";
                    }
                   /// alert(myPoints);

                }
               // alert(myPoints);
                addPoints(player_id, myPoints);


            }
        }
        var pass = "id=" + player_id;

        obj.open("GET", "../application/controller/girls_setPoints_controller.php?" + pass, true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        obj.send();
       // alert('find points - out of it');
    }
}

function addPoints(player_id, myPoints) {
   // alert('came to add points');
    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
       // alert('here i am');
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {

            if (obj.readyState < 4) {

            } else if (obj.readyState === 4) {
                var res = obj.responseText;
/*
                var content = '<div style="margin: 10px;"><p>';

                content+=  'Points were calculated for each team depending on their past performances. Please click the GENERATE TEAM RANKS button to proceed</p><button class="btn btn-sm btn-success"';

                content+= '<center><button class="btn btn-danger" onclick="closeWindow()"  <span class="glyphicon glyphicon-pencil" ></span> Okay</button></center>';

                document.getElementById('message-modal-content').innerHTML = content;
                */

                $('#successModal').modal();
            }
        }
    }
    var pass = "id=" + player_id + "&points=" + myPoints;
   // alert(player_id + ' has ' + myPoints);
    obj.open("GET", "../application/controller/girls_savePoints_controller.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    obj.send();
}

function RankEachTeams() {
    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                var result = JSON.parse(res);

                var rank = 0;
                var success = 0;
                for (var i = 0; i < result.length; i++) {
                    if (result[i].points == 0.0000) {
                        var zeroRank = 0;
                      //  alert('goint to rank this team' + result[i].player_id + ' ' + zeroRank);
                        writeRank(result[i].player_id, zeroRank);
                    } else {
                        rank++;
                        writeRank(result[i].player_id, rank);
                      //  alert('goint to rank this team' + result[i].player_id + ' ' + rank);
                        //alert('after write rank');
                    }
                    success = 1;
                }

              //  alert('out of for block');
                if (success === 1) {
              //      alert('sucesss= ' + success);
                    showRank();
              //      alert('called show rank');
                }


            }
        }
    }
    var pass = "age_group=" + '13';
    obj.open("GET", "../application/controller/girls_points_rank.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();
}

function writeRank(id, rank) {
    var obj;
   // alert('in write rank');
    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
        //alert ('new rqest');
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        //alert('obj not null');
        obj.onreadystatechange = function () {
            //alert ('on ready function');
            if (obj.readyState < 4) {
            } else if (obj.readyState === 4) {
            }
        }
    }

    var pass = "id=" + id + "&rank=" + rank;

    obj.open("GET", "../application/controller/girls_writeRank.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();


}


function showRank() {
    var obj;
    //alert('in show rank');

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                //alert(res);

                //generateDraw(res);
                var result = JSON.parse(res);


                var TableContent = '<h3 align="center" style="padding-top: 50px;">Player Ranks</h3>';
                TableContent += ' <div class="panel panel-primary">';

                TableContent += '<table class="table table-hover"><tr><th>Player ID</th><th>Name</th><th >School</th><th>Points</th><th>Rank</th><th>Performance</th></tr>';

                for (var i = 0; i < result.length; i++) {


                    if (result[i].points == 0.0000) {
                        TableContent += '<tr ><td bgcolor =#ffff80 id = "teamId">' + result[i].player_id + '</td>';
                        TableContent += '<td bgcolor =#ffff80>' + result[i].first_name + '</td>';
                        TableContent += '<td bgcolor =#ffff80>' + result[i].school_code + '</td>';
                        TableContent += '<td bgcolor =#ffff80>' + result[i].points + '</td>';
                        TableContent += '<td bgcolor =#ffff80 id = "no-rank-row">' + '0' + '</td>';
                        TableContent += '<td bgcolor =#ffff80>' + '<button id = "veiw-perfomance" class="btn btn-sm btn-info" type="button" <span class="glyphicon glyphicon-pencil" onclick="showPefomanceModal( \'' + result[i].player_id + '\' )"></span> Veiw Perfomances</button></td>';
                    } else {
                        TableContent += '<tr ><td bgcolor="#ffa366" id = "teamId">' + result[i].player_id + '</td>';
                        TableContent += '<td bgcolor="#ffa366">' + result[i].first_name + '</td>';
                        TableContent += '<td bgcolor="#ffa366" >' + result[i].school_code + '</td>';
                        TableContent += '<td bgcolor ="#ffa366">' + result[i].points + '</td>';
                        TableContent += '<td bgcolor ="#ffa366">' + result[i].rank + '</td>';
                        TableContent += '<td bgcolor ="#ffa366">' + '<button id = "veiw-perfomance" class="btn btn-sm btn-info" type="button" <span class="glyphicon glyphicon-pencil" onclick="showPefomanceModal( \'' + result[i].player_id + '\' )"></span> Veiw Perfomances</button></td>';


                    }
                }
                TableContent += '</table>';
                TableContent += '</div>';

                //TableContent += '<div style="padding-top: 20px;" class="form-group tm-yellow-gradient-bg text-center">';
               // TableContent += '<button id="point-scheme" type="button" class="tm-yellow-btn" onclick="pointScheme()">View Point Scheme</button></div>';

                TableContent += '<div class="form-group tm-yellow-gradient-bg text-center">';
                TableContent += '<button id="smthing" type="button" class="tm-yellow-btn" onclick="DrawNumber()">Generate Draw</button></div>';

                document.getElementById('rank-table').innerHTML = TableContent;
                window.location = "#rank-table";
            }
        }

        var pass = "age_group=" + '13';
        obj.open("GET", "../application/controller/girls_show_rank.php?" + pass, true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        obj.send();

    }
}

function DrawNumber() {
    var draw1 = 32;
    var draw2 = 64;
    var draw = draw1;
   // alert(draw);

    var r1 = 0;
    var r2 = 0;
    var r3 = 0;
    var r4 = 0;
    var r5 = 0;
    var r6 = 0;
    var r7 = 0;
    var r8 = 0;
    var r9 = 0;
    var r10 = 0;
    var r11 = 0;
    var r12 = 0;
    var r13 = 0;
    var r14 = 0;
    var r15 = 0;
    var r16 = 0;
    var r17 = 0;
    var r18 = 0;
    var r19 = 0;


    if (draw == draw1) {
        r1 = 1;
        r2 = 32;
        r3 = 9;
        r4 = 24;
        r5 = 5;
        r6 = 13;
        r7 = 20;
        r8 = 28;
        var rank32 = [1, 32, 9, 24, 5, 13, 20, 28];
        var bye32 = [2, 31, 10, 23, 6, 27, 14, 19, 4, 29, 12, 21, 8, 25, 16];
    }

    if (draw = draw2) {
        r1 = 1;
        r2 = 64;
        r3 = 17;
        r4 = 48;
        r5 = 9;
        r6 = 25;
        r7 = 40;
        r8 = 28;
        r9 = 56;
        r10 = 5;
        r11 = 13;
        r12 = 21;
        r13 = 29;
        r14 = 36;
        r15 = 44;
        r16 = 52;
        r17 = 60;
    }

    var obj;
   // alert('in write rank');
    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
        //alert ('new rqest');
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        //alert('obj not null');
        obj.onreadystatechange = function () {
            //alert ('on ready function');
            if (obj.readyState < 4) {
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                var result = JSON.parse(res);
              //  alert(res);

                var byeNo = result.length;
                var success = 0;
                var ranked = 0;
                var totRanked = 0;
                var random = 1;
                var start = 1;
                var given = 0;
                var taken =[];

                var seedNo=0;

                for (var i = 0; i < result.length; i++){
                     if (result[i].rank != 0){
                         seedNo++;
                     }
                }

                var rankNew = [];

                for (var i = 0; i < seedNo; i++){
                    if (seedNo<=rank32.length){
                        rankNew.push(rank32[i]);
                    }
                }

                rankNew.sort();


                var noOfByes = draw1 - result.length;
               // alert ('no of byes' + noOfByes);
                var myNo = 0;

                for (var i = 0; i < result.length; i++) {
                 //  alert('inside_ countig ' + i);
                    if (result[i].rank != 0 && i <= rank32.length) {
                        myNo = rank32[ranked];
                        ranked++;
                        given = 1;
                        //alert ('ranked person to - ' +myNo);

                        taken.push(myNo);
                        writeDrawNo(result[i].player_id, myNo);

                    } else {

                       // alert('none ranked');
                       // alert('now random = '+ random);
                        var looped =0;
                        for (var y = 0; y <= rankNew.length; y++) {
                        //   alert('for - avoid rankers now rank ' );
                            if (random == rankNew[y]) {
                                random++;
                                looped++;
                                given = 1;
                              //  alert('taken by rank - so - random ' +random);
                                break;
                                //alert('given ' + random);
                            } else {
                             //   alert ('not taken - '+ random);
                                random += 0;
                            }
                        }

                        for (var z = 0; z <= bye32.length; z++) {
                         //  alert('for - avoid byes');
                            if (random == bye32[z] && z < noOfByes) {
                                random++;
                                looped++;
                              //  alert('taken by bye so random ' + random);
                                given = 1;
                                break;
                            } else {
                                random += 0;
                            }
                        }

                        for (var y = 0; y <= rankNew.length; y++) {
                           // alert('for - avoid rankers now rank ' );
                            if (random == rankNew[y]) {
                                random++;
                                looped++;
                                given = 1;
                               // alert('taken by rank - so - random ' +random);
                                break;
                                //alert('given ' + random);
                            } else {
                               // alert ('not taken - '+ random);
                                random += 0;
                            }
                        }

                        for (var z = 0; z <= bye32.length; z++) {
                          //  alert('for - avoid byes');
                            if (random == bye32[z] && z < noOfByes) {
                                random++;
                                looped++;
                              //  alert('taken by bye so random ' + random);
                                given = 1;
                                break;
                            } else {
                                random += 0;
                            }
                        }

                        if (given == 0) {

                            random++;
                          //  alert ('given==0 ' +random);
                        }
                        myNo = random;
                        taken.push(myNo);
                        //alert('final no ' + myNo);
                        random++;
                        writeDrawNo(result[i].player_id, myNo);

                    }
                }
              //  alert('out of loop');
                generateDraw();

            }


        }
    }


    var pass = "age_group=" + '13';

    obj.open("GET", "../application/controller/girls_draw_no.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();


}


function writeDrawNo(player_id, num) {
    var obj;
   // alert('in write draw no');
    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
        //alert ('new rqest');
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        //alert('obj not null');
        obj.onreadystatechange = function () {
            //alert ('on ready function');
            if (obj.readyState < 4) {
            } else if (obj.readyState === 4) {
            }
        }
    }

    var pass = "id=" + player_id + "&drawNo=" + num;

    obj.open("GET", "../application/controller/girls_write_drawNo.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();
}

function generateDraw() {
    var bye32 = [2, 31, 10, 23, 6, 27, 14, 19, 4, 29, 12, 21, 8, 25, 16];
    var totNo = 32;
    var obj;
    
    
  //  alert('in generate draw');
    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
        //alert ('new rqest');
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        //alert('obj not null');
        obj.onreadystatechange = function () {
            //alert ('on ready function');
            if (obj.readyState < 4) {
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                var result = JSON.parse(res);
               // alert(res);

                var TableContent = '<h3 align="center" style="padding-top: 50px;">Under 13 Girls Singles Draw</h3>';
                TableContent += ' <div class="panel panel-danger">';

                TableContent += '<table class="table table-hover"><tr><th>No</th><th>Name</th></tr>';

                var resultNo =0;
                for (var i = 1; i <= totNo; i++) {

                        if (result[resultNo].draw_no == i && resultNo<=result.length) {
                            TableContent += '<tr ><td bgcolor =#b3f0ff id = "teamId">' + i + '</td>';
                            TableContent += '<td bgcolor =#b3f0ff>' + result[resultNo].first_name + '</td>';
                            resultNo++;
                        } else {
                            TableContent += '<tr ><td bgcolor =#b3f0ff id = "teamId">' + i + '</td>';
                            TableContent += '<td bgcolor =#b3f0ff>' + 'Bye' + '</td>';
                        }
                }
                TableContent += '</table>';
                TableContent += '<div class="form-group tm-yellow-gradient-bg text-center">';
                TableContent += '<button id="print-draw" type="button" class="tm-yellow-btn hidden-print" onclick="printDiv(\'' + 'draw-table' + '\' )">Print Draw</button></div>';

                TableContent += ' </div>';

                document.getElementById('draw-table').innerHTML = TableContent;
                window.location = "#draw-table";

            }
        }

        obj.open("GET", "../application/controller/girls_get_players.php?" + true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        obj.send();

    }
}

function closeWindow() {
    successModal.close();
}

function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}